<?php

namespace App\Http\Controllers\Service;

use App\Auth;
use Carbon\Carbon;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\ServerException;

class ServiceController extends Controller
{
    function publicitaria(){
        if( session('token','NULL')=='NULL' ){
            return redirect()->route('login');
        }
        
        $error = false;

        $client = new Client(['base_uri' => Auth::API_BASE_URL]);
        try{
            $headers = [
                'Authorization' => $this->makeAuthorizationToken()
            ];

            $req = $client->request('GET', 'packages/1/services', [
                'headers' => $headers
            ]);

            $res = json_decode( $req->getBody(), true);
            $data = $res['data'];
        } catch(ServerException $se){
            $res = json_decode($se->getResponse()->getBody(), true);
            $data = $se;
            $error = true;
        } catch(ClientException $ce) {
            $res = json_decode($ce->getResponse()->getBody(), true);
            $data = isset( $res['error'] ) ? $res['error'] : $res['message'];
            $error = true;
        }
        //return $res;
        if($error){
            return redirect()->route('login');
        }

        return view('customer.services.publicitaria', compact('data'));
    }

    function cobertura(){
        if( session('token','NULL')=='NULL' ){
            return redirect()->route('login');
        }

        $error = false;
        
        $client = new Client(['base_uri' => Auth::API_BASE_URL]);
        try{
            $headers = [
                'Authorization' => $this->makeAuthorizationToken()
            ];

            $req = $client->request('GET', 'packages/2/services', [
                'headers' => $headers
            ]);

            $res = json_decode( $req->getBody(), true);
            $data = $res['data'];
        } catch(ServerException $se){
            $res = json_decode($se->getResponse()->getBody(), true);
            $data = $se;
            $error = true;
        } catch(ClientException $ce) {
            $res = json_decode($ce->getResponse()->getBody(), true);
            $data = isset( $res['error'] ) ? $res['error'] : $res['message'];
            $error = true;
        }
        //return $res;
        if($error){
            return redirect()->route('login');
        }
        
        return view('customer.services.cobertura', compact('data'));
    }

    public function aplicaciones(){
        if( session('token','NULL')=='NULL' ){
            return redirect()->route('login');
        }

        $error = false;

        $client = new Client(['base_uri' => Auth::API_BASE_URL]);
        try{
            $headers = [
                'Authorization' => $this->makeAuthorizationToken()
            ];

            $req = $client->request('GET', 'packages/3/services', [
                'headers' => $headers
            ]);

            $res = json_decode( $req->getBody(), true);
            $data = $res['data'];
        } catch(ServerException $se){
            $res = json_decode($se->getResponse()->getBody(), true);
            $data = $se;
            $error = true;
        } catch(ClientException $ce) {
            $res = json_decode($ce->getResponse()->getBody(), true);
            $data = isset( $res['error'] ) ? $res['error'] : $res['message'];
            $error = true;
        }
        //return $res;
        if($error){
            return redirect()->route('login');
        }
        return view('customer.services.aplicaciones',compact('data'));
    }

    function publicacion(){
        if( session('token','NULL')=='NULL' ){
            return redirect()->route('login');
        }
        
        return view('customer.services.publicacion');
    }

    public function storePublicitaria(Request $request){
        
        $rules = [
            'nombre' => 'required|string|min:6',
            'descripcion' => 'required|string',
            'nivel' => 'required|array',
            'nivel.*' => 'integer|min:1|max:6',
            'edad' => 'required|array',
            'edad.*' => 'integer|min:1|max:6',
            'genero' => 'required|integer|min:1',
            'meta' => 'required|array',
            'meta.*' => 'string|min:6',
            'duracion' => 'required|integer|in:1,2',
            'fechai' => 'required|date',
            'fechaf' => 'date|after:fechai',
            // 'moreInfo' => 'sometimes|integer',
            // 'extraFile' => 'required_if:moreInfo,1|file',
            // 'descrExtraFile' => 'required_if:moreInfo,1|string|min:6'
        ];
        $this->validate($request, $rules);

        $data['nombre'] = $request->nombre;
        $data['descripcion'] = $request->descripcion;
        $data['meta'] = $this->transformMetas( $request->meta );
        $data['nivel'] = $this->transformNivel( $request->nivel );
        $data['edad'] = $this->transformEdad( $request->edad );
        $data['genero'] = $this->transformGenero($request->genero);
        $data['duracion'] = ($request->duracion==1) ? 'permanente' : 'temporal';
        $data['fechai'] = $request->fechai;
        $data['fechaf'] = $request->fechaf;
        
        $items = null;
        if ($request->has('moreGrafico')) {
            if( is_array( $request->items ) ){
                $items = $request->items;
            }
        }

        if ($request->has('moreInfo')) {
            $data['descrExtraFile'] = $request->descrExtraFile;
        }

        $cuestionario = json_encode($data);

        $client = new Client(['base_uri' => Auth::API_BASE_URL]);

        $user = session('user','NULL');
        $id = (isset($user['id'])) ? $user['id'] : '0';

        session()->forget(['data']);
        $error = false;
        try{
            $headers = [
                'Authorization' => $this->makeAuthorizationToken()
            ];

            if ($request->has('moreInfo')) {
                $ruta = $request->extraFile->path();
                $file = fopen($ruta, 'r');
                $send = [
                    [
                        'name' => 'extraFile',
                        'contents' => $file
                    ],
                    [
                        'name' => 'fecha',
                        'contents' => $request->fechai
                    ],
                    [
                        'name' => 'cuestionario',
                        'contents' => $cuestionario
                    ]
                ];
                $type = 'multipart';
            } else {
                $send = [
                    'fecha' => $request->fechai,
                    'cuestionario' => $cuestionario
                ];
                $type = 'form_params';
            }

            if( $items != null ){
                if ($request->has('moreInfo')) {
                    $c = 0;
                    foreach($items as $i){
                        array_push( $send, ['name'=>'items['.$c++.']', 'contents'=>$i] );
                    }
                } else {
                    $send['items'] = $items;
                    $type = 'json';
                }
            }
            
            $req = $client->request('POST', 'packages/1/users/' . $id . '/tickets', [
                'headers' => $headers,
                $type => $send
            ]);
            
            $res = json_decode( $req->getBody(), true);
            //dd( $res );
            $data = $res['data'];
        } catch(ServerException $se){
            $res = json_decode($se->getResponse()->getBody(), true);
            $data = $se;
            $error = true;
        } catch(ClientException $ce) {
            $res = json_decode($ce->getResponse()->getBody(), true);
            $data = isset( $res['error'] ) ? $res['error'] : $res['message'];
            $error = true;
        }

        if($error){
            //dd($data);
            return back()
                ->withInput()
                ->withErrors(['error','Ha ocurrido un error. Por favor intente más tarde']);
        } else {
            return redirect()->route('customer.exito')->with([
                'data'=>$data
            ]);
        }
    }

    public function storeCobertura(Request $request){
        $rules = [
            'nombre' => 'required|string|min:6',
            'objetivo' => 'required|string',
            'fecha' => 'required|date',
            'hora' => 'required',
            'duracion' => 'required|integer|min:1',
            'direccion' => 'required|string',
            'foto' => 'required|image',
            'maps' => 'required|url',
            'pregira' => 'required|in:1,2',
            'espacio' => 'required|in:1,2',
            'estacionamiento' => 'required|in:1,2',
            'identificacion' => 'required|in:1,2',
            'encabeza' => 'required|string|min:6',
            //'asistentes' => 'string',
            //'coorganizador' => 'string|min:6',
            'contacto' => 'required|string|min:6',
            'telefono' => 'required|string|min:10|max:13',
        ];
        $this->validate($request, $rules);

        $data['nombre'] = $request->nombre;
        $data['objetivo'] = $request->objetivo;
        $data['fecha'] = $request->fecha;
        $data['hora'] = $request->hora;
        $data['duracion'] = $this->transformDuracion( $request->duracion );
        $data['direccion'] = $request->direccion;
        //$data['foto'] = $request->foto;
        $data['maps'] = $request->maps;
        $data['pregira'] = $this->transformAfirmacion( $request->pregira );
        $data['espacio'] = ($request->espacio==1) ? 'lugar_abierto' : 'lugar_cerrado';
        $data['estacionamiento'] = $this->transformAfirmacion( $request->estacionamiento );
        $data['identificacion'] = $this->transformAfirmacion( $request->identificacion );
        $data['encabeza'] = $request->encabeza;
        $data['contacto'] = $request->contacto;
        $data['telefono'] = $request->telefono;

        if ($request->has('asistentes')) {
            $data['asistentes'] = $request->asistentes;
        }

        if ($request->has('coorganizador')) {
            $data['coorganizador'] = $request->coorganizador;
        }

        $file_extra = null;
        if ($request->has('moreInfo')) {
            $data['descrExtraFile'] = $request->descrExtraFile;

            $ruta = $request->extraFile->path();
            $file_extra = fopen($ruta, 'r');
        }

        $cuestionario = json_encode($data);

        $items = null;
        if ($request->has('moreGrafico')) {
            if( is_array( $request->items ) ){
                $items = $request->items;
            }
        }

        $ruta = $request->foto->path();
        $file = fopen($ruta, 'r');
        
        $client = new Client(['base_uri' => Auth::API_BASE_URL]);

        $user = session('user','NULL');
        $id = (isset($user['id'])) ? $user['id'] : '0';

        session()->forget(['data']);
        $error = false;
        try{
            $headers = [
                'Authorization' => $this->makeAuthorizationToken(),
            ];

            $multipart = [
                [
                    'name' => 'foto',
                    'contents' => $file
                ],
                [
                    'name' => 'fecha',
                    'contents' => $request->fecha
                ],
                [
                    'name' => 'cuestionario',
                    'contents' => $cuestionario
                ]
            ];

            if ( $file_extra != null ) {
                array_push( $multipart, ['name' => 'extraFile', 'contents' => $file_extra] );
            }

            if( $items != null ){
                $c = 0;
                foreach($items as $i){
                    array_push( $multipart, ['name'=>'items['.$c++.']', 'contents'=>$i] );
                }
            }

            $req = $client->request('POST', 'packages/2/users/' . $id . '/tickets', [
                'headers' => $headers,
                'multipart' => $multipart
            ]);

            $res = json_decode( $req->getBody(), true);
            //dd( $res );
            $data = $res['data'];
        } catch(ServerException $se){
            $res = json_decode($se->getResponse()->getBody(), true);
            $data = $se->getMessage();
            $error = true;
        } catch(ClientException $ce) {
            $res = json_decode($ce->getResponse()->getBody(), true);
            $data = isset( $res['error'] ) ? $res['error'] : $res['message'];
            $error = true;
        }
        
        if($error){
            //dd($data);
            return back()
                ->withInput()
                ->withErrors(['error','Ha ocurrido un error. Por favor intente más tarde']);
        } else {
            return redirect()->route('customer.exito')->with([
                'data'=>$data
            ]);
        }
    }

    public function storeAplicacion(Request $request){
        
        $rules = [
            'nombre' => 'required|string|min:6',
            'descripcion' => 'required|string',
            'nivel' => 'required|array',
            'nivel.*' => 'integer|min:1|max:6',
            'edad' => 'required|array',
            'edad.*' => 'integer|min:1|max:6',
            'genero' => 'required|integer|min:1',
            'meta' => 'required|array',
            'meta.*' => 'string|min:6',
            'items' => 'required|array',
            'items.*' => 'integer|min:1',
        ];
        $this->validate($request, $rules);

        $data['nombre'] = $request->nombre;
        $data['descripcion'] = $request->descripcion;
        $data['genero'] = $this->transformGenero($request->genero);

        $items = $request->items;

        $data['meta'] = $this->transformMetas( $request->meta );
        $data['nivel'] = $this->transformNivel( $request->nivel );
        $data['edad'] = $this->transformEdad( $request->edad );
        
        if ($request->has('moreInfo')) {
            $data['descrExtraFile'] = $request->descrExtraFile;
        }
        $cuestionario = json_encode($data);
        
        $client = new Client(['base_uri' => Auth::API_BASE_URL]);

        $user = session('user','NULL');
        $id = (isset($user['id'])) ? $user['id'] : '0';

        session()->forget(['data']);
        $error = false;
        try{
            $headers = [
                'Authorization' => $this->makeAuthorizationToken()
            ];

            if ($request->has('moreInfo')) {
                $ruta = $request->extraFile->path();
                $file = fopen($ruta, 'r');
                $send = [
                    [
                        'name' => 'extraFile',
                        'contents' => $file
                    ],
                    [
                        'name' => 'fecha',
                        'contents' => Carbon::now()->addDays(2)->toDateString()
                    ],
                    [
                        'name' => 'cuestionario',
                        'contents' => $cuestionario
                    ]
                ];
                $c = 0;
                foreach($items as $i){
                    array_push( $send, ['name'=>'items['.$c++.']', 'contents'=>$i] );
                }
                $type = 'multipart';
            } else {
                $todo['items'] = $items;
                $todo['fecha'] = Carbon::now()->addDays(2)->toDateString();
                $todo['cuestionario'] = $cuestionario;
                $type = 'json';
                $send = $todo;
            }

            $req = $client->request('POST', 'packages/3/users/' . $id . '/tickets', [
                'headers' => $headers,
                $type => $send
            ]);

            $res = json_decode( $req->getBody(), true);
            //dd( $res );
            $data = $res['data'];
        } catch(ServerException $se){
            $res = json_decode($se->getResponse()->getBody(), true);
            $data = $se;
            $error = true;
        } catch(ClientException $ce) {
            $res = json_decode($ce->getResponse()->getBody(), true);
            $data = isset( $res['error'] ) ? $res['error'] : $res['message'];
            $error = true;
        }

        if($error){
            //dd($data);
            return back()
                ->withInput()
                ->withErrors(['error','Ha ocurrido un error. Por favor intente más tarde']);
        } else {
            return redirect()->route('customer.exito')->with([
                'data'=>$data
            ]);
        }
    }

    public function storePublicacion(Request $request){
        $rules = [
            'nombre' => 'required|string|min:6',
            'descripcion' => 'required|string',
            'recursos' => 'required|string',
            'fecha' => 'required|date',
        ];
        $this->validate($request, $rules);

        $data['nombre'] = $request->nombre;
        $data['descripcion'] = $request->descripcion;
        $data['recursos'] = $request->recursos;
        
        $file = null;
        if ($request->has('moreInfo')) {
            $data['descrExtraFile'] = $request->descrExtraFile;
            $ruta = $request->extraFile->path();
            $file = fopen($ruta, 'r');
        }

        $cuestionario = json_encode($data);

        $client = new Client(['base_uri' => Auth::API_BASE_URL]);

        $user = session('user','NULL');
        $id = (isset($user['id'])) ? $user['id'] : '0';

        session()->forget(['data']);
        $error = false;
        try{
            $headers = [
                'Authorization' => $this->makeAuthorizationToken()
            ];

            if ($file != null) {
                $send = [
                    [
                        'name' => 'extraFile',
                        'contents' => $file
                    ],
                    [
                        'name' => 'fecha',
                        'contents' => $request->fecha
                    ],
                    [
                        'name' => 'cuestionario',
                        'contents' => $cuestionario
                    ]
                ];
                $type = 'multipart';
            } else {
                $send = [
                    'fecha' => $request->fecha,
                    'cuestionario' => $cuestionario
                ];
                $type = 'form_params';
            }

            $req = $client->request('POST', 'packages/5/users/' . $id . '/tickets', [
                'headers' => $headers,
                $type => $send
            ]);
            
            $res = json_decode( $req->getBody(), true);
            //dd( $res );
            $data = $res['data'];
        } catch(ServerException $se){
            $res = json_decode($se->getResponse()->getBody(), true);
            $data = $se;
            $error = true;
        } catch(ClientException $ce) {
            $res = json_decode($ce->getResponse()->getBody(), true);
            $data = isset( $res['error'] ) ? $res['error'] : $res['message'];
            $error = true;
        }

        if($error){
            //dd($data);
            return back()
                ->withInput()
                ->withErrors(['error','Ha ocurrido un error. Por favor intente más tarde']);
        } else {
            return redirect()->route('customer.exito')->with([
                'data'=>$data
            ]);
        }
    }

    function atencion(){
        return view('public.services.atencion');
    }

    private function makeAuthorizationToken(){
        $token_array = session('token','NULL');
        $token = (isset($token_array['access_token'])) ? $token_array['access_token'] : '';
        $type = (isset($token_array['token_type'])) ? $token_array['token_type'] : '';

        return $type . ' ' . $token;
    }

    private function transformNivel($nivel){
        $ni = [];
        foreach ($nivel as $n) {
            switch($n){
                case 1: $ret ='alta'; break;
                case 2: $ret ='media_alta'; break;
                case 3: $ret ='media'; break;
                case 4: $ret ='media_baja'; break;
                default: $ret ='baja'; break;
            }
            $ni[] = $ret;
        }
        return $ni;
    }

    private function transformEdad($edad){
        $ed = [];
        foreach ($edad as $e) {
            switch($e){
                case 1: $ret ='17_o_menos'; break;
                case 2: $ret ='18_a_24'; break;
                case 3: $ret ='25_a_34'; break;
                case 4: $ret ='35_a_44'; break;
                case 5: $ret ='45_a_54'; break;
                case 6: $ret ='55_a_64'; break;
                default: $ret ='65_o_mas'; break;
            }
            $ed[] = $ret;
        }
        return $ed;
    }
    
    private function transformGenero($genero){
        switch($genero){
            case 1: $ret = 'mujeres'; break;
            case 2: $ret = 'hombres'; break;
            default: $ret = 'mujeres_y_hombres'; break;
        }
        return $ret;
    }

    private function transformMetas($meta){
        $me = [];
        foreach ($meta as $m) {
            if (mb_strtolower($m,'UTF-8')!=mb_strtolower("Otra meta",'UTF-8')) {
                $me[] = $m;
            }
        }
        return $me;
    }

    private function transformDuracion($duracion){
        switch($duracion){
            case 1: $ret ='1_a_2_horas'; break;
            case 2: $ret ='2_a_3_horas'; break;
            default: $ret ='mas_de_3_horas'; break;
        }
        return $ret;
    }

    private function transformAfirmacion($respuesta){
        return ($respuesta==1) ? 'sí' : 'no';
    }
}
