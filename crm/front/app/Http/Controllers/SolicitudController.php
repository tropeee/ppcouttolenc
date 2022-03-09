<?php

namespace App\Http\Controllers;

use App\Solicitud;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SolicitudController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function show(Solicitud $solicitud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitud $solicitud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitud $solicitude)
    {
        if($solicitude->user->id != Auth::user()->id){
            return $this->devolverJson( array('error'=>1, 'msg'=>'El ticket pertenece a otro usuario') );
        }
        
        if($request->has('importante')){
            if($request->importante==0 || $request->importante==1){
                $solicitude->importante = $request->importante;
            }
        }
        
        if($request->has('destacado')){
            if($request->destacado==0 || $request->destacado==1){
                $solicitude->destacado = $request->destacado;
            }
        }
        
        if ($solicitude->isClean()) {
            return $this->devolverJson( array('error'=>2, 'msg'=>'No hay nada que cambiar') );
        }

        $solicitude->save();

        return $this->devolverJson( array('error'=>0, 'msg'=>'Actualizado', 'importante'=>$solicitude->importante, 'destacado'=>$solicitude->destacado) );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Solicitud  $solicitud
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitud $solicitud)
    {
        //
    }

    private function devolverJson($data){
        return response()->json($data, 200);
    }
}
