<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class SellerTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Seller $seller)
    {
        return [
            'identificador' => (int) $seller->id,
            'nombre' => (string) $seller->name,
            'correo' => (string) $seller->email,
            'estaVerificado' => (int) $seller->verified,
            'fechaCreado' => (string) $seller->created_at,
            'fechaActualizado' => (string) $seller->updated_at,
            'fechaEliminado' => isset($seller->deleted_at) ? (string) $seller->deleted_at : null
        ];
    }
}
