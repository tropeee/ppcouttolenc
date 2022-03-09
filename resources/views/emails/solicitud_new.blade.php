@component('mail::message')
# Nueva Solicitud

<p>El(La) ciudadano(a) <em>{{$solicitud->nombre}} {{$solicitud->apellido}}</em> se ha comunicado con el asunto: <em>{{ $solicitud->solicitud }}</em>.</p><br>

<p>El mensaje recibido es el siguiente:</p>
<pre style="background-color: #eeeeee;">"{{$solicitud->descripcion}}"</pre>

<p>Informaci&oacute;n adicional:</p>
<p><strong>Nombre</strong>:{{$solicitud->nombre}} {{$solicitud->apellido}}</p>
<p><strong>Correo</strong>:{{$solicitud->email}}</p>
<p><strong>Tel&eacute;fono</strong>:{{$solicitud->tel}}</p>
<p><strong>Municipio</strong>:{{$solicitud->municipio}}</p><br>

@component('mail::button', ['url' => 'https://atencion.pepecouttolenc.org/detail/' . $solicitud->id])
Ver Solicitud
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
