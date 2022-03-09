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
                            ¡Gracias por enviarnos su solicitud!
						</p>
                        <hr class="short">
                        <p>
                            Conserve este número de ticket para dar seguimiento <br>
							<strong>{{ $id }}</strong>
						</p>
                        <hr class="short">
                        <p>
                            Pronto nos comunicaremos
                        </p>
					</div>
					
					
                    <!--end of row-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection