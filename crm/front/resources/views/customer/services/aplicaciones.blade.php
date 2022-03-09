@extends('layout.app_with_title')

@section('section_title')
Aplicación Gráfica
@endsection

@section('app_content')
<div class="col-12">
    <form id="aplicacionForm" name="aplicacionForm" action="{{ route('servicio.aplicaciones.new') }}" method="POST" enctype="multipart/form-data" class="row">
        <div class="col-12">
            @csrf
            <h1 class="text-center">Nueva aplicación gráfica</h1>
            <div class="card">
                <div class="card-body">
                    <p>Por favor llene la información necesaria del evento, programa o servicio</p>
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="e.g. Cartel para la feria del libro" required>
                        <label for="nombre">Nombre del evento, programa o servicio</label>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3"></textarea>
                        <label for="descripcion">Descripción del evento, programa o servicio</label>
                    </div>
                    
                    @include('customer.services.components.segmento')
                    
                    <hr>
                    <br>
                    <p class="text-center">
                        Metas
                    </p>
                    <hr>
                    <p>¿Qué se desea lograr con el evento, programa o servicio?</p>
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
                        Aplicaciones gráficas
                    </p>
                    <p>Por favor marque aquellos elementos que sean requeridos</p>
                    <table id="aplicaciones-table" class="table dataTable">
                        <thead>
                            <tr>
                                <th>
                                    <div class="table-header">
                                        <span class="column-title">#</span>
                                    </div>
                                </th>
                                <!--th>
                                    <div class="table-header">
                                        <span class="column-title">Imagen</span>
                                    </div>
                                </th-->
                                <th>
                                    <div class="table-header">
                                        <span class="column-title">Nombre</span>
                                    </div>
                                </th>
                                <th>
                                    <div class="table-header">
                                        <span class="column-title">Tamaño</span>
                                    </div>
                                </th>
                                <th>
                                    <div class="table-header">
                                        <span class="column-title">Solicitar</span>
                                    </div>
                                </th>
                            </tr>
                        </thead>
        
                        <tbody>
                            @php
                            $cont = 1;
                            @endphp
                            @foreach ($data as $d)
                            <tr>
                                @php
                                $s = $d['item'];
                                @endphp
                                <td>
                                    {{$cont++}}
                                </td>
                                <!--td>
                                    <img class="product-image" src="{{ asset('assets/images/ecommerce/product-image-placeholder.png') }}">
                                </td-->
                                <td>
                                    <span class="title font-weight-bold">{{$s['nombre']}}</span>
                                </td>
                                <td>
                                    {{$s['base']}},{{ $s['altura']}},{{$s['unit_area'] }}
                                </td>
                                <td>
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="form-check-input input-item" name="items[]" id="item{{$d['id']}}" value="{{$d['id']}}"/>
                                        <span class="custom-control-indicator"></span>
                                    </label>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                    @include('customer.services.components.file_adicional')
                </div>
            </div>
        </div>
        <div class="col-12">
            <br>
            <p class="text-center">
                <input id="solicitar_aplicaciones" type="submit" class="btn btn-primary submit-button" value="Solicitar" />
            </p>
        </div>
    </form>
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
<script src="{{ asset('js/customer/aplicaciones.js') }}"></script>
@endsection