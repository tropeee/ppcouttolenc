<?php

namespace App\Http\Controllers\Area;

use App\Area;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class AreaController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Area::all();
        return $this->showAll($result);
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
            'name' => 'required',
            'image' => 'image'
        ];

        $this->validate($request, $rules);

        $campos = $request->all();

        $nuevo = Area::create( $campos );
        return $this->showOne($nuevo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function show(Area $area)
    {
        return $this->showOne($area);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Area $area)
    {
        $area->fill(
            $request->only([
                'name',
                'description'
            ])
        );

        if ($area->isClean()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar',422);
        }

        $area->save();

        return $this->showOne($area);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Area  $area
     * @return \Illuminate\Http\Response
     */
    public function destroy(Area $area)
    {
        $area->delete();
        return $this->showOne($area);
    }
}
