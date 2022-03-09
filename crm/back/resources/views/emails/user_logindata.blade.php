@component('mail::message')
# Datos de acceso a BITGOB PLATFORM

Estimado(a): {{$user['name']}}<br><br>
Con el gusto de saludarle, le informamos que estos son sus datos de acceso a nuestra plataforma:<br>
<strong>Correo:</strong> {{$user['email']}}<br>
<strong>Contraseña:</strong> {{$user['contra']}}<br>

@component('mail::button', ['url' => 'http://atencion.bitgob.com/login'])
Entrar
@endcomponent

Saludos,<br>
{{ config('app.name') }}
@endcomponent
