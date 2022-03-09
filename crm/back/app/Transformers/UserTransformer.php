<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'identificador' => (int) $user->id,
            'nombre' => (string) $user->name,
            'correo' => (string) $user->email,
            'estaVerificado' => (int) $user->verified,
            'esAdministrador' => ($user->admin === 'true'),
            'fechaCreado' => (string) $user->created_at,
            'fechaActualizado' => (string) $user->updated_at,
            'fechaEliminado' => isset($user->deleted_at) ? (string) $user->deleted_at : null
        ];
    }
}
