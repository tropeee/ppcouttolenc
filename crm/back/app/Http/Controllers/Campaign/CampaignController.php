<?php

namespace App\Http\Controllers\Campaign;

use App\Campaign;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class CampaignController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result = Campaign::all();
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

        $nuevo = Campaign::create( $campos );
        return $this->showOne($nuevo, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function show(Campaign $campaign)
    {
        return $this->showOne($campaign);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Campaign $campaign)
    {
        $campaign->fill(
            $request->only([
                'name',
                'description'
            ])
        );

        if ($campaign->isClean()) {
            return $this->errorResponse('Se debe especificar al menos un valor diferente para actualizar',422);
        }

        $campaign->save();

        return $this->showOne($campaign);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Campaign  $campaign
     * @return \Illuminate\Http\Response
     */
    public function destroy(Campaign $campaign)
    {
        $campaign->delete();
        return $this->showOne($campaign);
    }
}
