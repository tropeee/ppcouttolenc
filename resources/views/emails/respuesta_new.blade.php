@component('mail::message')
# Nueva respuesta a su solicitud

@php
if ($respuesta->por_usuario==1) {
	$nombre = $respuesta->solicitud->user->name;
	$usuario = $respuesta->solicitud->nombre . ' ' . $respuesta->solicitud->apellido;
	$url = 'https://atencion.pepecouttolenc.org/detail/' . $respuesta->solicitud->id;
	$quien = 'el ciudadano';
} else{
	$usuario = $respuesta->solicitud->user->name;
	$nombre = $respuesta->solicitud->nombre . ' ' . $respuesta->solicitud->apellido;
	$url = 'https://pepecouttolenc.org/atencion';
	$quien = 'nuestro colaborador';
}
@endphp

<p><strong>Estimado(a) {{$nombre}}</strong>: {{$quien}} <em>{{$usuario}}</em> ha enviado una respuesta a la solicitud <strong>TK-{{ str_pad($respuesta->solicitud->id,6,'0',STR_PAD_LEFT) }}</strong>.</p>
<p>El mensaje recibido es el siguiente:</p>
<pre style="background-color: #eeeeee;">"{{$respuesta->respuesta}}"</pre>

@component('mail::button', ['url' => $url])
Ver Respuesta
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
