@component('mail::message')
# Hola {{$user->name}}

Has cambiado tu cuenta de correo electrónico
Por favor verifica la nueva dirección usando el siguiente botón:

@component('mail::button', ['url' => route('verify', $user->verification_token)])
Confirmar
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
