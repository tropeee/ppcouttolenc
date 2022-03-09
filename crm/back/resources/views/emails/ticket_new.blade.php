@component('mail::message')
# Nueva solicitud

<p><em>{{$usuario->name}}</em> ha solicitado el servicio de <em>{{ $paquete->nombre }}</em> para entregar el día {{substr($ticket->fecha,0,10)}}.</p><br>
<p>Información adicional:</p>
@php
	$detalles = json_decode($ticket->cuestionario);
@endphp
<ul>
	@foreach ($detalles as $k => $v)
	@php
		if( is_array($v) ){
			$data = '';
			foreach ($v as $w) {
				$data .= $w . ', ';
			}
			$data = substr($data,0,-2);
		} else {
			$data = $v;
		}
	@endphp
	<li><em>{{$k}}</em>: {{ $data }}</li>
	@endforeach
</ul>
@component('mail::button', ['url' => 'http://atencion.bitgob.com/plataforma'])
Ver solicitudes
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
