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
    <div class="doc cards-doc page-layout simple full-width">
        <!-- HEADER -->
        <div class="page-header bg-primary text-auto p-6 row no-gutters align-items-center justify-content-between">
            <h1 class="doc-title h4" id="content">@yield('section_title')</h1>
        </div>
        <!-- / HEADER -->
        <!-- CONTENT -->
        <div class="page-content p-6">
            <div class="content container">
                <div class="row">
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