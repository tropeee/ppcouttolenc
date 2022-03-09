<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class BuyerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Buyer $buyer)
    {
        return [
            'identificador' => (int) $buyer->id,
            'nombre' => (string) $buyer->name,
            'correo' => (string) $buyer->email,
            'estaVerificado' => (int) $buyer->verified,
            'fechaCreado' => (string) $buyer->created_at,
            'fechaActualizado' => (string) $buyer->updated_at,
            'fechaEliminado' => isset($buyer->deleted_at) ? (string) $buyer->deleted_at : null
        ];
    }
}
