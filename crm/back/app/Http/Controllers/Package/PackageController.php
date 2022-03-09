<?php

namespace App\Http\Controllers\Package;

use App\Package;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class PackageController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Package::all();
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

        $nuevo = Package::create( $campos );
        return $this->showOne($nuevo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function show(Package $package)
    {
        return $this->showOne($package);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Package $package)
    {
        $package->fill(
            $request->only([
                'name',
                'description'
            ])
        );

        if ($package->isClean()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar',422);
        }

        $package->save();

        return $this->showOne($package);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Package  $package
     * @return \Illuminate\Http\Response
     */
    public function destroy(Package $package)
    {
        $package->delete();
        return $this->showOne($package);
    }
}
