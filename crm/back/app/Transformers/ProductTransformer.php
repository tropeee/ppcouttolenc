<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class ProductTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Product $product)
    {
        return [
            'identificador' => (int) $product->id,
            'titulo' => (string) $product->name,
            'detalles' => (string) $product->description,
            'disponibles' => (int) $product->quantity,
            'estado' => (string) $product->status,
            'imagen' => url("img/{$product->image}"),
            'vendedor' => (int) $product->seller_id,
            'fechaCreado' => (string) $product->created_at,
            'fechaActualizado' => (string) $product->updated_at,
            'fechaEliminado' => isset($product->deleted_at) ? (string) $product->deleted_at : null
        ];
    }
}
