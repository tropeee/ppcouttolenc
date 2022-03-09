<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;

class CategoryTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Category $category)
    {
        return [
            'identificador' => (int) $category->id,
            'titulo' => (string) $category->name,
            'detalles' => (string) $category->description,
            
            'fechaCreado' => (string) $category->created_at,
            'fechaActualizado' => (string) $category->updated_at,
            'fechaEliminado' => isset($category->deleted_at) ? (string) $category->deleted_at : null
        ];
    }
}
