@extends('layout.base')

@section('menu')
    @include('partials.menu')
@endsection

@section('toolbar')
    @include('partials.toolbar')
@endsection

@section('content')
    @yield('app_content')
@endsection

@section('footer')
    @include('partials.footer')
@endsection

@section('right_bar')
    @yield('right_bar_app')
@endsection