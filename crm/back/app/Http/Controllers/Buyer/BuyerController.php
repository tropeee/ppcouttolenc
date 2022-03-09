<?php

namespace App\Http\Controllers\Buyer;

use App\Buyer;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class BuyerController extends ApiController
{
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buyeres = Buyer::has('transactions')->get();  // Obtener los usuarios que se encuentren en la tabla transacciones
                                                            // 'has' debe hacer referencia a una relación en el modelo
        //return response()->json(["data"=>$buyeres], 200);
        return $this->showAll($buyeres);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    public function show(Buyer $buyer)
    {
        // $buyer = Buyer::has('transactions')->findOrFail($id);
        //return response()->json(["data"=>$buyer], 200);
        return $this->showOne($buyer);
    }
}
