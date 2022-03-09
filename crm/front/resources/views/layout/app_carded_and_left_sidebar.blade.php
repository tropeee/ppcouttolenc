@extends('layout.base')

@section('menu')
    @include('partials.menu')
@endsection
@auth
    @section('toolbar')
    	@include('partials.toolbar')
    @endsection
@endauth

@section('content')
	<div id="@yield('section_id')" class="page-layout carded left-sidebar">
		<div class="top-bg bg-primary"></div>
		
		<aside class="page-sidebar" data-fuse-bar="@yield('id_sidebar')" data-fuse-bar-media-step="md">
			<!-- HEADER -->
			<div class="header d-flex flex-column justify-content-between p-6 light-fg">
				<div class="logo d-flex align-items-center pt-7">
					<i class="@yield('section_icon_title') mr-4"></i>
					<span class="logo-text h4">@yield('section_title')</span>
				</div>

				<div class="account">
					<div class="title">
						@auth
							{{Auth::user()->name}}
						@endauth
						@guest
							John Doe
						@endguest
					</div>
				</div>
			</div>
			<!-- / HEADER -->

			<div class="content custom-scrollbar">
				@yield('app_sidebar')
			</div>
		</aside>

		<div class="page-content-wrapper">
			<!-- HEADER -->
			<div class="page-header d-flex flex-column justify-content-center light-fg">

				<div class="search-bar row align-items-center no-gutters bg-white text-auto">

					<button type="button" class="sidebar-toggle-button btn btn-icon d-block d-lg-none" data-fuse-bar-toggle="@yield('id_sidebar')">
						<i class="icon icon-menu"></i>
					</button>

					<i class="icon-magnify s-6 mx-4"></i>

					<input class="search-bar-input col" type="text" placeholder="@yield('section_help_searchbar')">
				</div>

			</div>
			<!-- / HEADER -->
			
			<div class="page-content-card">
				<!-- CONTENT TOOLBAR -->
				<div class="toolbar @yield('app_header_toolbar_class')">
					@yield('app_header_toolbar')
				</div>
				<!-- / CONTENT TOOLBAR -->
				<div class="page-content custom-scrollbar">
					@yield('app_content')
				</div>
			</div>
		</div>

	</div>
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('right_bar')
    @yield('right_bar_app')
@endsection