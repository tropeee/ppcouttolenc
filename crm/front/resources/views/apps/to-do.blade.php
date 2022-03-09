@extends('layout.app_carded_and_left_sidebar')

@section('section_id','todo')

@section('id_sidebar','todo-sidebar')

@section('section_icon_title','icon-checkbox-marked')

@section('section_title')
To-Do
@endsection

@section('section_help_searchbar','Buscar tarea')

@section('app_sidebar')
	<div class="p-6">
		<button type="button" class="btn btn-secondary btn-block">ADD TASK</button>
	</div>

	<ul class="nav flex-column">

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-view-headline"></i>
				<span>All Tasks</span>
			</a>
		</li>

		<li class="divider"></li>

		<li class="subheader">
			Filters
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-star"></i>
				<span>Starred</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-alert-circle"></i>
				<span>Priority</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-clock"></i>
				<span>Scheduled</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-calendar-today"></i>
				<span>Today</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-check"></i>
				<span>Done</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-delete"></i>
				<span>Deleted</span>
			</a>
		</li>

		<li class="divider"></li>

		<li class="subheader">
			Tags
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-label" style="color:#388E3C"></i>
				<span>Frontend</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-label" style="color:#F44336"></i>
				<span>Backend</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-label" style="color:#FF9800"></i>
				<span>API</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-label" style="color:#0091EA"></i>
				<span>Issue</span>
			</a>
		</li>

		<li class="nav-item">
			<a class="nav-link ripple" href="#">
				<i class="icon s-4 icon-label" style="color:#9C27B0"></i>
				<span>Mobile</span>
			</a>
		</li>

	</ul>
@endsection

@section('app_header_toolbar_class','d-flex align-items-center justify-content-between p-4 p-sm-6')

@section('app_header_toolbar')
	<select class="custom-select mb-2 mr-sm-2 mb-sm-0" placeholder="Due Date">
		<option value="Next 3 days">Next 3 days</option>
		<option value="Next 7 days">Next 7 days</option>
		<option value="Next 2 weeks">Next 2 weeks</option>
		<option value="Next month">Next month</option>
	</select>

	<div>
		<select class="custom-select mb-2 mr-sm-2 mb-sm-0" placeholder="Order">
			<option value="Start Date">Start Date</option>
			<option value="Due Date">Due Date</option>
			<option value="Manual">Manual</option>
			<option value="Title">Title</option>
		</select>

		<button type="button" class="btn btn-icon">
			<i class="icon icon-sort-ascending"></i>
		</button>
	</div>
@endsection

{{--
	@section('app_content')
		Contenido
	@endsection
--}}