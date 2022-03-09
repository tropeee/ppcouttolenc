@extends('layout.app_carded_and_left_sidebar')

@section('section_id','mail')

@section('id_sidebar','mail-sidebar')

@section('section_icon_title','icon-checkbox-marked')

@section('section_title')
Solicitudes
@endsection

@section('section_help_searchbar','Buscar tarea')

@section('app_sidebar')
	{{--<div class="p-6">
		<button type="button" class="btn btn-secondary btn-block">ADD TASK</button>
	</div>--}}

	<ul class="nav flex-column">

		<li class="subheader">
			Filtros
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="{{url('home')}}?filter=all">
				<i class="icon s-4 icon-view-headline"></i>
				<span>Pendientes</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="{{url('home')}}?filter=finished">
				<i class="icon s-4 icon-check"></i>
				<span>Terminadas</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="{{url('home')}}?filter=favorite">
				<i class="icon s-4 icon-star"></i>
				<span>Favoritos</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="{{url('home')}}?filter=important">
				<i class="icon s-4 icon-alert-circle"></i>
				<span>Importantes</span>
			</a>
		</li>

		<li class="divider"></li>

		<li class="subheader">
			Etiquetas
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="{{url('home')}}?tag={{App\Solicitud::STATUS_RECIBIDO}}">
				<i class='icon s-4 icon-label' style='color:#{{App\Solicitud::COLOR_STATUS_RECIBIDO}};'></i><span>{{ ucwords(App\Solicitud::STATUS_RECIBIDO)}}</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link ripple" href="{{url('home')}}?tag={{App\Solicitud::STATUS_ATENDIDO}}">
				<i class='icon s-4 icon-label' style='color:#{{App\Solicitud::COLOR_STATUS_ATENDIDO}};'></i><span>{{ ucwords(App\Solicitud::STATUS_ATENDIDO)}}</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link ripple" href="{{url('home')}}?tag={{App\Solicitud::STATUS_RESPONDIDO}}">
				<i class='icon s-4 icon-label' style='color:#{{App\Solicitud::COLOR_STATUS_RESPONDIDO}};'></i><span>{{ ucwords(App\Solicitud::STATUS_RESPONDIDO)}}</span>
			</a>
		</li>
		<li class="nav-item">
			<a class="nav-link ripple" href="{{url('home')}}?tag={{App\Solicitud::STATUS_RESUELTO}}">
				<i class='icon s-4 icon-label' style='color:#{{App\Solicitud::COLOR_STATUS_RESUELTO}};'></i><span>{{ ucwords(App\Solicitud::STATUS_RESUELTO)}}</span>
			</a>
		</li>

	</ul>
@endsection

@section('app_header_toolbar_class','row no-gutters align-items-center px-4 px-sm-6')

@section('app_header_toolbar')
	<div class="col">

		<div class="row no-gutters align-items-center">

			<div class="col-auto">

				<label class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" />
					<span class="custom-control-indicator"></span>
				</label>

			</div>

			<div class="action-buttons col">

				<div class="row no-gutters align-items-center flex-nowrap d-none d-xl-flex">

					<div class="divider-vertical"></div>

					<button type="button" class="btn btn-icon" aria-label="archive">
						<i class="icon icon-archive"></i>
					</button>

					<button type="button" class="btn btn-icon" aria-label="spam">
						<i class="icon icon-alert-octagon"></i>
					</button>

					<button type="button" class="btn btn-icon" aria-label="delete">
						<i class="icon icon-delete"></i>
					</button>

					<div class="divider-vertical"></div>

					<button type="button" class="btn btn-icon" aria-label="move to">
						<i class="icon icon-folder"></i>
					</button>

					<button type="button" class="btn btn-icon" aria-label="labels">
						<i class="icon icon-label"></i>
					</button>

					<button type="button" class="btn btn-icon" aria-label="move to">
						<i class="icon icon-folder"></i>
					</button>

					<div class="divider-vertical"></div>

					<button type="button" class="btn btn-icon" aria-label="more">
						<i class="icon icon-dots-vertical"></i>
					</button>

				</div>
			</div>
		</div>
	</div>

	<div class="col-auto">

		<div class="row no-gutters align-items-center">

			<span class="page-info px-2 d-none d-sm-block">1 - 100 of 980</span>

			<button type="button" class="btn btn-icon">
				<i class="icon icon-chevron-left"></i>
			</button>

			<button type="button" class="btn btn-icon">
				<i class="icon icon-chevron-right"></i>
			</button>

			<button type="button" class="btn btn-icon">
				<i class="icon icon-settings"></i>
			</button>

		</div>
	</div>
@endsection

{{--
	@section('app_content')
		Contenido
	@endsection
--}}