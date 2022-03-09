<?php

namespace App\Http\Controllers\Seller;

use App\Seller;
use Illuminate\Http\Request;
use App\Http\Controllers\ApiController;

class SellerController extends ApiController
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
        $sellers = Seller::has('products')->get();  // Obtener los usuarios que se encuentren en la tabla transacciones
                                                            // 'has' debe hacer referencia a una relación en el modelo
        //return response()->json(["data"=>$sellers], 200);
        return $this->showAll($sellers);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //public function show($id)
    public function show(Seller $seller)
    {
        //
        //$seller = Seller::has('products')->findOrFail($id);
        //return response()->json(["data"=>$seller], 200);
        return $this->showOne($seller);
    }
}
