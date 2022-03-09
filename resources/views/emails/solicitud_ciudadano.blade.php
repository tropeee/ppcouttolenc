@component('mail::message')
# Nueva Solicitud

<p>Estimado(a) <em>{{$solicitud->nombre}} {{$solicitud->apellido}}</em> hemos recibido su solicitud de <em>{{ $solicitud->solicitud }}</em>.</p><br>

<p>El mensaje que nos ha enviado es el siguiente:</p>
<pre style="background-color: #eeeeee;">"{{$solicitud->descripcion}}"</pre>

<p>Informaci&oacute;n adicional:</p>
<p><strong>Nombre</strong>:{{$solicitud->nombre}} {{$solicitud->apellido}}</p>
<p><strong>Correo</strong>:{{$solicitud->email}}</p>
<p><strong>Tel&eacute;fono</strong>:{{$solicitud->tel}}</p>
<p><strong>Municipio</strong>:{{$solicitud->municipio}}</p><br>

@component('mail::button', ['url' => 'https://pepecouttolenc.org/atencion/'])
Seguimiento
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
