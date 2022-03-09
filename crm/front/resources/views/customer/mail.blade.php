@extends('apps.mail')

@section('app_content')
	<div class="thread-list w-100">
		@foreach ($data as $d)
			<div class="thread ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center py-2 px-3 py-sm-4 px-sm-6 unread">

				<label class="col-auto custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" />
					<span class="custom-control-indicator"></span>
				</label>

				<div class="info col px-4 clickable" data-task="{{$d->id}}">

					<div class="name row no-gutters align-items-center">

						<img class="avatar mr-2" alt="{{$d->nombre}} {{$d->apellido}}" src="../assets/images/avatars/alice.jpg" />

						<span class="">{{$d->nombre}} {{$d->apellido}}</span>
						
						@if ($d->files->count() != 0)
							<i class="icon-paperclip has-attachment s-4"></i>	
						@endif

					</div>

					<div class="subject">
						{{ $d->solicitud }}
					</div>

					<div class="message">

						{{ $d->descripcion }}
						<div class="labels">

							<div class="label badge badge-default text-white" style='background-color: #{{ $d->getColor() }};'>
								{{ $d->status }}
							</div>
							
							<div class="label badge badge-default text-white" style='background-color: #424242; color: #000;'>
								{{ $d->ticket }}
							</div>

						</div>

					</div>
				</div>

				<div class="col-12 col-sm-auto d-flex flex-sm-column justify-content-center align-items-center">

					<div class="time mb-2">{{ $d->created_at->format('d M Y') }}</div>

					<div class="actions row no-gutters">

						<button type="button" class="btn btn-icon btn-toggle-favorite" data-task="{{$d->id}}" data-favorite="{{$d->isFavorite()}}" data-toggle="tooltip" data-placement="top" title="Favorito">
							@if ( $d->isFavorite() )
								<i class="icon-star" style="color: yellow;"></i>
							@else
								<i class="icon-star-outline"></i>
							@endif
						</button>

						<button type="button" class="btn btn-icon btn-toggle-important" data-task="{{$d->id}}" data-important="{{$d->isImportant()}}" data-toggle="tooltip" data-placement="top" title="Importante">
							@if ( $d->isImportant() )
								<i class="icon-alert-circle" style="color: red;"></i>
							@else
								<i class="icon-alert-circle-outline"></i>
							@endif
						</button>
					</div>
				</div>
			</div>

		@endforeach
	</div>
@endsection
@section('scripts')
<script type="text/javascript">
	$('.info.clickable').click(function(e){
		id = $(this).attr('data-task');
		seeDetails(id);
	});
	
	function seeDetails(id){
		$(location).attr("href","{{ url('detail') }}/" + id);
	}
	
	@include('customer.scripts.script-mail')
	
</script>
@endsection