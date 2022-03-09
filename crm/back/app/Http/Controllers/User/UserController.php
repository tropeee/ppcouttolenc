<?php

namespace App\Http\Controllers\User;

use App\User;
use App\Mail\UserCreated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\ApiController;

class UserController extends ApiController
{
    public function __construct(){
        $this->middleware('client.credentials')->only(['store','resend']);
        $this->middleware('auth:api')->except(['store','resend','verify']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $users = User::all();
        //return response()->json(["data"=>$users], 200);
        return $this->showAll($users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'name' => 'required',
            'email' => 'required|email|unique:users',   // Validar que el email tenga el formato correcto y que sea unico
            'password' => 'required|min:6|confirmed'
        ];

        $this->validate($request, $rules);

        $campos = $request->all();
        $campos['password'] = bcrypt($request->password);
        $campos['verified'] = User::USUARIO_NO_VERIFICADO;
        $campos['verification_token'] = User::generateVerificationToken();
        $campos['admin'] = User::USUARIO_REGULAR;

        $user = User::create( $campos );
        //return response()->json(["data"=>$user], 201);
        return $this->showOne($user, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    public function show(User $user)
    {
        // $user = User::findOrFail($id);

        //return response()->json(["data"=>$user], 200);
        return $this->showOne($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function update(Request $request, $id)
    public function update(Request $request, User $user)
    {
        // $user = User::findOrFail($id);

        $rules = [
            'email' => 'email|unique:users,email,' . $user->id, // Validar que el email tenga el formato correcto y que sea unico, 
                                                                // pero si pone el mismo correo que tiene, no falla la validación
            'password' => 'min:6|confirmed',
            'admin' => 'in:' . User::USUARIO_ADMINISTRADOR . "," . User::USUARIO_REGULAR
        ];

        $this->validate($request, $rules);

        if ($request->has('name')) {
            $user->name = $request->name;
        }

        if ($request->has('email') && $request->email!=$user->email ) {
            $user->verified = User::USUARIO_NO_VERIFICADO;
            $user->verification_token = User::generateVerificationToken();
            $user->email = $request->email;
        }

        if ($request->has('password')) {
            $user->password = $request->password;
        }

        if ($request->has('admin')) {
            if( !$user->isVerified() ){
                //return response()->json(["error"=>'Un usuario que no está verificado no puede hacerse administrador', 'code'=>409], 409);
                return $this->errorResponse('Un usuario que no está verificado no puede hacerse administrador',409);
            }
            
            $user->admin = $request->admin;
        }

        if (!$user->isDirty()) {
            //return response()->json(["error"=>'Se debe especificar al menos un valor diferente para actualizar', 'code'=>422], 422);
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar',422);
        }

        $user->save();

        //return response()->json(["data"=>$user], 200);
        return $this->showOne($user);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function destroy($id)
    public function destroy(User $user)
    {
        // $user = User::findOrFail($id);
        $user->delete();
        //return response()->json(["data"=>$user], 200);
        return $this->showOne($user);
    }

    public function verify($token)
    {
        $user = User::where('verification_token',$token)->firstOrFail();

        $user->verified = User::USUARIO_VERIFICADO;
        $user->verification_token = null;

        $user->save();

        return $this->showMessage('La cuenta ha sido verificada');
    }

    public function resend(User $user)
    {
        if ($user->isVerified()) {
            return $this->errorResponse('Este usuario ya ha sido verificado',409);
        }

        retry(5, function() use ($user){ 
            Mail::to($user)->send(new UserCreated($user));
        }, 200);

        return $this->showMessage('El correo de verificación se ha reenviado');
    }
}
