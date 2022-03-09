<?php

namespace App\Transformers;

use App\Transaction;
use League\Fractal\TransformerAbstract;

class TransactionTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Transaction $transaction)
    {
        return [
            'identificador' => (int) $transaction->id,
            'cantidad' => (int) $transaction->quantity,
            'comprador' => (int) $transaction->buyer_id,
            'producto' => (int) $transaction->product_id,
            
            'fechaCreado' => (string) $transaction->created_at,
            'fechaActualizado' => (string) $transaction->updated_at,
            'fechaEliminado' => isset($transaction->deleted_at) ? (string) $user->deleted_at : null
        ];
    }
}
