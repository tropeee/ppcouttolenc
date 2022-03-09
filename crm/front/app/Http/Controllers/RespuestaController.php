<?php

namespace App\Http\Controllers;

use App\Respuesta;
use App\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'solicitud' => 'required|exists:solicitudes,id',
            'respuesta' => 'required|string',
        ];

        $this->validate($request, $rules);
        
        $solicitud = Solicitud::find($request->solicitud);
        
        if(Auth::id() == $solicitud->user_id){
            $data['solicitud_id'] = $request->solicitud;
            $data['respuesta'] = $request->respuesta;
            $data['por_usuario'] = false;
            $respuesta = Respuesta::create( $data );
            
            $solicitud->status = $request->has('resuelto') ? Solicitud::STATUS_RESUELTO : Solicitud::STATUS_ATENDIDO;
            $solicitud->save();
        }
        return redirect()->back();
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
