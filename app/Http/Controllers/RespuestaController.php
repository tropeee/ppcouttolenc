<?php

namespace App\Http\Controllers;

use App\Respuesta;
use App\Solicitud;
use Illuminate\Http\Request;

class RespuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rules = [
            'email' => 'required|email',
            'ticket' => 'required',
            'mensaje' => 'required',
            'solicitud' => 'required|exists:solicitudes,id'
        ];

        $this->validate($request, $rules);

        $buscar = Solicitud::find( $request->solicitud );

        if(is_null($buscar)){
            return $this->devolverJson( array('error'=>1, 'msg'=>'La solicitud que trata de responder no existe') );
        }

        if( $buscar->isFinished()){
            return $this->devolverJson( array('error'=>2, 'msg'=>'El ticket ha sido atendido. Por favor realiza una nueva solicitud') );
        }

        if($request->email != $buscar->email){
            return $this->devolverJson( array('error'=>3, 'msg'=>'El ticket pertenece a otro ciudadano') );
        }
        
        if($request->ticket != $buscar->ticket){
            return $this->devolverJson( array('error'=>4, 'msg'=>'Por favor verifique el número de ticket') );
        }

        /* $tk = mb_strtoupper($request->ticket,'UTF-8');
        $exp_ticket = "/^(TK-)[0-9]{6}$/";
        if( !preg_match($exp_ticket,$tk) ){
            return $this->devolverJson( array('error'=>1, 'msg'=>'Verificar número de ticket') );
        }
        
        $id = intval( substr($tk, 3) );
        if($id != $buscar->id){
            return $this->devolverJson( array('error'=>3, 'msg'=>'El ticket pertenece a otro ciudadano') );
        }
        
        $tk2 = 'TK-' . str_pad($buscar->id,6,'0',STR_PAD_LEFT);
        if($tk != $tk2){
            return $this->devolverJson( array('error'=>4, 'msg'=>'El ticket pertenece a otro ciudadano') );
        } */

        $data['solicitud_id'] = $buscar->id;
        $data['respuesta'] = $request->mensaje;
        $data['por_usuario'] = true;
        $respuesta = Respuesta::create( $data );
        
        $buscar->status = Solicitud::STATUS_RESPONDIDO;
        $buscar->save();

        return $this->devolverJson( array('error'=>0, 'msg'=>'Hemos recibido el mensaje. En breve nos pondremos en contacto') );

    }

    private function devolverJson($data){
        return response()->json($data, 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function show(Respuesta $respuesta)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function edit(Respuesta $respuesta)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Respuesta $respuesta)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Respuesta  $respuesta
     * @return \Illuminate\Http\Response
     */
    public function destroy(Respuesta $respuesta)
    {
        //
    }
}
