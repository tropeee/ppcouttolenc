@extends('apps.to-do')

@section('app_content')
	<div class="todo-items w-100">
		@foreach ($data as $d)
			@php
				// dd( $d->isFinished() );
			@endphp
			<div class="todo-item pr-2 py-4 ripple row no-gutters flex-wrap flex-sm-nowrap align-items-center ">

				<button type="button" class="handle btn btn-icon mr-1">
					<i class="icon icon-drag-vertical"></i>
				</button>

				<label class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" />
					<span class="custom-control-indicator"></span>
				</label>

				<div class="info col px-4">

					<div class="title">
						{{$d->nombre}} {{$d->apellido}}
					</div>

					<div class="notes mt-1">
						{{ $d->solicitud }}. {{ $d->descripcion }}
					</div>

					<div class="tags">

						<div class="tag badge mt-2 mr-1">
							<div class="row no-gutters align-items-center">
								<div class="tag-label">{{ $d->created_at->format('d-M-Y') }}</div>
							</div>
						</div>

						<div class="tag badge mt-2 mr-1">
							<div class="row no-gutters align-items-center">
								<div class="tag-color mr-2" style="background-color: #{{ $d->getColor() }}"></div>
								<div class="tag-label">{{ $d->status }}</div>
							</div>
						</div>

					</div>

				</div>
				<div class="buttons col-12 col-sm-auto d-flex align-items-center justify-content-end">
					@if ( $d->isImportant() )
						<button type="button" class="btn btn-icon">
							<i class="icon icon-alert-circle"></i>
						</button>
					@endif

					@if ( $d->isFavorite() )	
						<button type="button" class="btn btn-icon">
							<i class="icon icon-star"></i>
						</button>
					@endif

					
					<button type="button" class="btn btn-icon">
						<i class="icon icon-dots-vertical"></i>
					</button>
				</div>
			</div>
		@endforeach
	</div>
@endsection