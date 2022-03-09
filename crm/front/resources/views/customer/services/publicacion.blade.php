@extends('layout.app_with_title')

@section('section_title')
Publicación Especial
@endsection

@section('app_content')
<form id="publicacionForm" name="publicacionForm" action="{{ route('servicio.publicacion.new') }}" method="POST" enctype="multipart/form-data" class="col-12">
    @csrf
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Nueva Publicación</h1>
            <div class="card">
                <div class="card-body">
                    <p>Por favor llene la información necesaria para la publicación</p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="e.g. Cartel para la feria del libro" required>
                        <label for="nombre">Nombre del evento, programa o servicio</label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" aria-describedby="descripcionHelp" required></textarea>
                        <label for="descripcion">Descripción del evento, programa o servicio</label>
                        <small id="descripcionHelp" class="form-text text-muted">Describa detalles importantes de la publicación. E.g. Lugar y fecha, quiénes participaron, promoción especial, etc.</small>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <textarea class="form-control" id="recursos" name="recursos" rows="3"></textarea>
                                <label for="recursos">Enlaces hacia los archivos que serán utilizados para la publicación</label>
                                <small id="recursosHelp" class="form-text text-muted">Copie el enlace de sus archivos en la nube y péguelos aquí. E.g. dropbox, one drive, google drive </small>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="date" value="{{\Carbon\Carbon::now()->addDays(1)->toDateString()}}" min="{{\Carbon\Carbon::now()->addDays(1)->toDateString()}}" id="fecha" name="fecha"/>
                                <label for="fecha">Publicar el día:</label>
                            </div>
                        </div>
                    </div>
                    
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
    </div>
</form>
@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div><br />
@endif

<script src="{{ asset('js/customer/publicacion.js') }}"></script>
@endsection