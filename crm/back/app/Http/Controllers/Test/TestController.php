<?php

namespace App\Http\Controllers\Test;

use App\Test;
use GuzzleHttp\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class TestController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Test::all();
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

        $nuevo = Test::create( $campos );
        return $this->showOne($nuevo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function show(Test $test)
    {
        return $this->showOne($test);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Test $test)
    {
        $test->fill(
            $request->only([
                'name',
                'description'
            ])
        );

        if ($test->isClean()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar',422);
        }

        $test->save();

        return $this->showOne($test);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Test  $test
     * @return \Illuminate\Http\Response
     */
    public function destroy(Test $test)
    {
        $test->delete();
        return $this->showOne($test);
    }
}
