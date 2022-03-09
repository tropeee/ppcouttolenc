<?php

namespace App\Http\Controllers\Product;

use App\User;
use App\Product;
use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\ApiController;

class ProductBuyerTransactionController extends ApiController
{
    public function __construct(){
        parent::__construct();
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product, User $buyer)
    {
        //
        $rules = [
            'quantity' => 'required|integer|min:1'
        ];

        $this->validate($request, $rules);

        if ($product->seller_id == $buyer->id) {
            return $this->errorResponse("El comprador no debe ser el mismo vendedor",409);
        }

        if (!$buyer->isVerified()) {
            return $this->errorResponse("El comprador debe ser un usuario verificado",409);
        }

        if (!$product->seller->isVerified()) {
            return $this->errorResponse("El vendedor del producto no es un usuario verificado",409);
        }
        
        if (!$product->isAvailable()) {
            return $this->errorResponse("El producto indicado no está disponible",409);
        }

        if ($product->quantity < $request->quantity) {
            return $this->errorResponse("El producto no tiene la cantidad de stock solicitado en esta transacción",409);
        }

        return DB::transaction(function () use ($request, $product, $buyer){
            $product->quantity -= $request->quantity;
            $product->save();

            $transaction = Transaction::create([
                'quantity' => $request->quantity,
                'buyer_id' => $buyer->id,
                'product_id' => $product->id
            ]);

            return $this->showOne($transaction,201);
            
        });
    }
}
