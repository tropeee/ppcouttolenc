@extends('layout.app_with_title')

@section('section_title')
	<button class="btn btn-icon mr-4 btn-back">
		<i class="icon icon-arrow-left"></i>
	</button>
	Detalle de Solicitud
@endsection

@section('app_content')

	<div class="col-12">
			
		@component('customer.mail-detail-card')
			@slot('card_status_color')
				{{$data->getColor()}}
			@endslot
			@slot('card_status_name')
				{{ucwords($data->status)}}
			@endslot
			@slot('card_img_profile')
				../assets/images/avatars/profile.jpg
			@endslot
			@slot('card_user_name')
				{{$data->nombre}} {{$data->apellido}}
			@endslot
			@slot('card_tipo_solicitud')
				{{$data->solicitud}}
			@endslot
			@slot('card_fecha')
				{{ $data->created_at->format('d M Y') }}
			@endslot
			@slot('card_action_buttons')
				<button type="button" class="btn btn-icon btn-toggle-favorite" data-task="{{$data->id}}" data-favorite="{{$data->isFavorite()}}" data-toggle="tooltip" data-placement="top" title="Favorito">
					@if ( $data->isFavorite() )
						<i class="icon-star" style="color: yellow;"></i>
					@else
						<i class="icon-star-outline"></i>
					@endif
				</button>
	
				<button type="button" class="btn btn-icon btn-toggle-important" data-task="{{$data->id}}" data-important="{{$data->isImportant()}}" data-toggle="tooltip" data-placement="top" title="Importante">
					@if ( $data->isImportant() )
						<i class="icon-alert-circle" style="color: red;"></i>
					@else
						<i class="icon-alert-circle-outline"></i>
					@endif
				</button>

				<button type="button" class="btn btn-icon btn-go-comment" data-toggle="tooltip" data-placement="top" title="Responder">
					<i class="icon icon-reply"></i>
				</button>

				<!-- button type="button" class="btn btn-icon" data-toggle="tooltip" data-placement="top" title="Opciones">
					<i class="icon icon-dots-vertical"></i>
				</button -->
			@endslot
			@slot('card_content')
				<div class="message py-2 px-2">
					@if ($data->files->count() != 0)
						<a href="{{"https://pepecouttolenc.org/archivos/" . md5($data->files[0]->id) . "/" . $data->files[0]->nombre}}" target="_blank">
							<i class="icon-paperclip has-attachment s-4"></i> {{$data->files[0]->nombre}}
						</a><br>
					@endif
					@php
						$datos = str_replace("\n\r","<br>",$data->descripcion);
					@endphp
					{!! $datos !!}
				</div>
			@endslot
			@slot('card_comments_count')
				{{($data->respuestas!=null) ? count($data->respuestas) : 0}}
			@endslot
			
			<!-- Comentarios -->
			@foreach ($data->respuestas as $res)
				@php
					$img = ($res->por_usuario==1) ? 'profile' : 'garry';
					$nombre = ($res->por_usuario==1) ? $data->nombre . ' ' . $data->apellido .' - Ciudadano': 'Yo - ' . Auth::user()->name;
				@endphp
				@component('customer.mail-detail-card-comment')
					@slot('comment_img')
						../assets/images/avatars/{{$img}}.jpg
					@endslot
					@slot('comment_nombre')
						{{$nombre}}
					@endslot
					@slot('comment_fecha')
						{{$res->created_at->diffForHumans()}}
					@endslot
					
					{!! str_replace("\n\r","<br>",$res->respuesta) !!}
				@endcomponent
			@endforeach
			@slot('card_solicitud_id')
				{{$data->id}}
			@endslot
		@endcomponent
	</div>
	
@endsection

@section('scripts')
<script type="text/javascript">
	$('.btn-back').click(function(e){
		window.history.back();
	});

	$('.btn-go-comment').click(function(e){
		$('#respuesta').trigger('focus');
	});

	@include('customer.scripts.script-mail')
</script>
@endsection