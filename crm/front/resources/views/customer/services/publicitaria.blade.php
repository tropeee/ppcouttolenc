@extends('layout.app_with_title')

@section('section_title')
Campaña Publicitaria
@endsection

@section('app_content')
<form id="campaniaForm" name="campaniaForm" action="{{ route('servicio.publicitaria.new') }}" method="POST" enctype="multipart/form-data" class="col-12">
    @csrf
    <div class="row">

        <div class="col-12">
            <h1 class="text-center">Nueva Campaña</h1>
            <div class="card">
                <div class="card-body">
                    <p>Por favor llene la información necesaria para la campaña publicitaria</p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="e.g. Ciudemos al planeta" required>
                        <label for="nombre">Nombre de la campaña</label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                        <label for="descripcion">Descripción de la campaña</label>
                    </div>
                    
                    @include('customer.services.components.segmento')
                    
                    <hr>
                    <br>
                    <p class="text-center">
                        Metas
                    </p>
                    <hr>
                    <p>¿Qué se desea lograr con la campaña?</p>
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="meta[]" placeholder="Meta" aria-label="Meta" aria-describedby="Meta" required>
                        <div class="input-group-append">
                            <button class="btn btn-secondary btn-add" type="button">Agregar</button>
                        </div>
                    </div>
                    <div class="clone d-none">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="meta[]" placeholder="Meta" aria-label="Meta" aria-describedby="Meta" value="Otra meta" required>
                            <div class="input-group-append">
                                <button class="btn btn-danger btn-remove" type="button">Quitar</button>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <br>
                    <p class="text-center">
                        Duración de la campaña
                    </p>
                    <hr>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <p>Tipo de campaña</p>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="duracion" id="duracion1" value="1" checked/>
                                    <span class="radio-icon"></span>
                                    <span>Permanente</span>
                                </label>
                            </div>
                            <div class="form-check">
                                <label class="form-check-label">
                                    <input type="radio" class="form-check-input" name="duracion" id="duracion2" value="2"/>
                                    <span class="radio-icon"></span>
                                    <span>Temporal</span>
                                </label>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="date" value="{{\Carbon\Carbon::now()->addWeeks(1)->toDateString()}}" min="{{\Carbon\Carbon::now()->addWeeks(1)->toDateString()}}" id="fechai" name="fechai"/>
                                <label for="fecha">Fecha de inicio</label>
                            </div>
                            <div class="form-group d-none fecha-fin">
                                <input class="form-control" type="date" value="{{\Carbon\Carbon::now()->addDays(8)->toDateString()}}" min="{{\Carbon\Carbon::now()->addDays(8)->toDateString()}}" id="fechaf" name="fechaf"/>
                                <label for="fecha">Fecha final</label>
                            </div>
                        </div>
                    </div>

                    @include('customer.services.components.graficos')
                    
                    @include('customer.services.components.file_adicional')

                </div>
            </div>
        </div>
        <div class="col-12">
            <br>
            <p class="text-center">
                <input id="solicitar" type="submit" class="btn btn-primary submit-button" value="Solicitar" />
            </p>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif

    </div>
</form>

<script src="{{ asset('js/customer/publicitaria.js') }}"></script>
@endsection