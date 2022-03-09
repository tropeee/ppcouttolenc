@extends('layout.app')
@section('content')
    <section class="switchable ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <img alt="Image" class="border--round box-shadow-wide" src="{{ asset('img/pdog.jpg') }}">
                </div>
                <div class="col-md-6" style="margin-left: 20px;">
                    <div class="row mx-0 switchable__text flex-column">
                        <p class="lead">

                            <a href="#">hola@pepecouttolenc.org</a>
                            {{--<br> P: +613 4827 2294--}}
                        </p>
                        <p class="lead">
                            ¡Únete al Verde!
                        </p>
                        <hr class="short">
                        
                        @component('_form')
                            @slot('tipo_form')
                                afiliacion
							@endslot
							@slot('mensaje')
								Por favor coloca tus datos en el formato de afiliación.
                            @endslot
                        @endcomponent
                    </div>
                    <!--end of row-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection