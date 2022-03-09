<?php

namespace App\Http\Controllers;

use App\File;
use App\Post;
use App\User;
use App\Solicitud;
use Illuminate\Http\Request;

class InicioController extends Controller
{
    public function home(){
        $posts = Post::orderBy('created_at','dsc')->get();
        return view('welcome', compact('posts'));
    }
	
	public function decalogo(){
        return view('decalogo');
    }

    public function contact(){
        return view('contact');
    }
    
    public function atencion(){
        return view('atencion');
    }
    
    public function afiliacion(){
        return view('afiliacion');
    }

    public function storeAtencion(Request $request){
        
        $rules = [
            'nombre' => 'required',
            'apellido' => 'required',
            'email' => 'required|email',
            'tel' => 'required',
            'municipio' => 'required',
            'solicitud' => 'required|integer|min:1|max:5',
            'descripcion' => 'required',
            'agree' => 'required',
            'archivo' => 'sometimes|file',
        ];

        $this->validate($request, $rules);
        
        $data = $request->all();
        $sol = '';
        switch($data['solicitud']){
            case 1: $sol = 'Presentación de proyectos'; break;
            case 2: $sol = 'Solicitud de apoyo'; break;
            case 3: $sol = 'Envío de CV'; break;
            case 4: $sol = 'Invitación a eventos'; break;
            default: $sol = 'Agendar cita'; break;
        }
        
        $data['solicitud'] = $sol;
        $data['status'] = Solicitud::STATUS_RECIBIDO;
        $data['user_id'] = User::where('role_id',3)->inRandomOrder()->first()->id;
        
        $solicitud = Solicitud::create($data);

        if($request->has('archivo')){
            $f_data['nombre'] = $request->archivo->store('');
            $f_data['solicitud_id'] = $solicitud->id;
            $file = File::create($f_data);
        }

        return redirect()->route('exito',['id'=>$solicitud->ticket]);
    }

    public function buscarAtencion(Request $request){
        $rules = [
            'email' => 'required|email',
            'ticket' => 'required',
            // 'ticket' => 'required|string|size:9',
        ];

        $this->validate($request,$rules);

        /* if(filter_var($request->email, FILTER_VALIDATE_EMAIL) == false){
            return $this->devolverJson( array('error'=>1, 'msg'=>'Verificar correo') );
        }

        $tk = mb_strtoupper($request->ticket,'UTF-8');
        $exp_ticket = "/^(TK-)[0-9]{6}$/";
        
        if( !preg_match($exp_ticket,$tk) ){
            return $this->devolverJson( array('error'=>2, 'msg'=>'Verificar número de ticket') );
        }

        $id = intval( substr($tk, 3) ); */

        $buscar = Solicitud::where('email',$request->email)
        // ->where('id',$id)
        ->where('ticket',$request->ticket)
        ->first();

        if(!$buscar){
            return $this->devolverJson( array('error'=>3, 'msg'=>'No hay resultados') );
        } else {
            $link = '';
            if(count($buscar->files)>0){
                $link = '<a class="btn btn--primary btn--icon" href="' . route('archivo.ver',['hash'=> md5($buscar->files[0]->id), 'name'=> $buscar->files[0]->nombre]) . '" target="_blank"><span class="btn__text"><i class="icon-File-Download"></i>Ver adjunto</span></a>';
            }
            
            $html_respuestas = '<section>
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-md-3 col-lg-2">
                                    <div class="text-block">
                                        <span class="h5">Solicitud:</span>
                                        <span>' . $buscar->solicitud . '</span>
                                    </div>
                                    <div class="text-block">
                                        <span class="h5">Estado:</span>
                                        <span style="background-color: #' . $buscar->getColor() . '; color: #FFF; padding: 0 10px; border-radius: 50px;">' . ucfirst($buscar->status) . '</span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-lg-5">
                                    <div class="text-block">
                                        <span class="h5">Descripción:</span>
                                        <p>
                                            ' . $buscar->descripcion . '
                                        </p>
                                    </div>' . $link . '
                                </div>
                                <div class="col-md-4 col-lg-3">
                                    <div class="text-block">
                                            <span class="h5">Ciudadano:</span>
                                            <ul class="bullets">
                                                <li>' . $buscar->nombre . " " . $buscar->apellido . '</li>
                                                <li>' . $buscar->email . '</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    
                    <section>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-md-10 col-lg-8">
                                    <div class="comments">
                                        <h3>' . $buscar->respuestas->count() . ' Respuestas</h3>';
            if($buscar->respuestas->count()>0){
                $html_respuestas .= '<ul class="comments__list">';
                foreach ($buscar->respuestas as $r) {
                    if($r->por_usuario==1){
                        $nombre = 'Yo - ' . $buscar->nombre . " " . $buscar->apellido;
                        $icon = 'User';
                    } else {
                        $nombre = $buscar->user->name . ' - Sistema de Atención Ciudadana';
                        $icon = 'Support';
                    }
                    $html_respuestas .= '<li>
                                            <div class="comment">
                                                <div class="comment__avatar">
                                                    <i class="icon icon--sm block icon-' . $icon . '"></i>
                                                </div>
                                                <div class="comment__body">
                                                    <h5 class="type--fine-print">' . $nombre . '</h5>
                                                    <div class="comment__meta">
                                                        <span>' . $r->created_at->diffForHumans() . '</span>
                                                    </div>
                                                    <p>' . $r->respuesta . '</p>
                                                </div>
                                            </div>
                                            <!--end comment-->
                                        </li>';
                }
                $html_respuestas .= '</ul>';
            }                            
            $html_respuestas .=     '</div>
                                    <!--end comments-->';
            if(!$buscar->isFinished()){
                $html_respuestas .= '<div class="comments-form">
                                        <h4>Responder</h4>
                                        <form id="formComment" name="formComment" action="#!" method="POST" class="row">
                                            <input type="hidden" id="numberSol" name="numberSol" value="' . $buscar->id . '">' .
                                            @csrf_field()
                                            . '<div class="col-md-12">
                                                <label>Mensaje:</label>
                                                <textarea rows="4" id="mensaje" name="mensaje" placeholder="Redacta el mensaje"></textarea>
                                            </div>
                                            <div class="col-md-3">
                                                <button id="sendComment" class="btn btn--primary" type="submit">Enviar</button>
                                            </div>
                                        </form>
                                    </div>';
            }
            $html_respuestas .= '</div>
                            </div>
                            <!--end of row-->
                        </div>
                        <!--end of container-->
                    </section>';
            
            $datos['us'] = $buscar->user->name;
            $datos['nm'] = $buscar->nombre . " " . $buscar->apellido;
            $datos['em'] = $buscar->email;
            $datos['mp'] = $buscar->municipio;
            $datos['tp'] = $buscar->solicitud;
            $datos['ds'] = $buscar->descripcion;
            $datos['st'] = $buscar->status;
            $datos['dt'] = $buscar->created_at->format('d M Y');
            $datos['_r'] = $buscar->respuestas->count();

            $respuestas = [];

            foreach ($buscar->respuestas as $r) {
                $aux = array('rp'=>$r->respuesta, 'us'=>$r->por_usuario, 'dt'=>$r->created_at->diffForHumans());
                $respuestas[] = $aux;
            }

            return $this->devolverJson( 
                array(
                    'error'=>0, 
                    'msg'=>'Tenemos resultados', 
                    'html'=>$html_respuestas,
                    'data'=> array(
                        'ticket' => $datos,
                        'mensajes' => $respuestas
                    ),
                )
            );
        }
        
    }

    private function devolverJson($data){
        return response()->json($data,200);
    }

    public function gracias($id, Request $request){
        return view('gracias', compact('id'));
    }
    
    public function informe1(){
        return view('app.transparencia.informe1');
    }
}
