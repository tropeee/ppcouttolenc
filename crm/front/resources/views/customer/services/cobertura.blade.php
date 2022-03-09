@extends('layout.app_with_title')

@section('section_title')
Cobertura Especial
@endsection

@section('app_content')
<form id="formCobertura" name="formCobertura" action="{{route('servicio.cobertura.new')}}" method="POST" enctype="multipart/form-data" class="row">
    @csrf
    <div class="col-12">
        <h1 class="text-center">Nueva Cobertura</h1>
        <div class="card">
            <div class="card-body">
                <p>Por favor llene la información necesaria para la cobertura especial.</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="e.g. Informe de resultados" required>
                    <label for="nombre">Nombre del evento</label>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="objetivo" name="objetivo" rows="3"></textarea>
                    <label for="objetivo">Objetivo del evento</label>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="date" value="{{\Carbon\Carbon::now()->addDays(2)->toDateString()}}" min="{{\Carbon\Carbon::now()->addDays(2)->toDateString()}}" id="fecha" name="fecha"/>
                            <label for="fecha">Día del evento</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            <input class="form-control" type="time" aria-describedby="horaHelp" value="09:00:00" id="hora" name="hora"/>
                            <label for="hora">Hora de inicio</label>
                            <small id="horaHelp" class="form-text text-muted">Formato de 24hrs.</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6 text-center">
                        <p>Duración del evento</p>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="duracion" id="duracion1" value="1" checked/>
                                <span class="radio-icon"></span>
                                <span>De 1 a 2 horas</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="duracion" id="duracion2" value="2"/>
                                <span class="radio-icon"></span>
                                <span>De 2 a 3 horas</span>
                            </label>
                        </div>
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="duracion" id="duracion3" value="3"/>
                                <span class="radio-icon"></span>
                                <span>Más de 3 horas</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 text-center">
                        <div class="form-group">
                            <textarea class="form-control" id="direccion" name="direccion" rows="3" aria-describedby="direccionHelp" required></textarea>
                            <label for="direccion">¿Dónde será el evento?</label>
                            <small id="direccionHelp" class="form-text text-muted">Dirección del lugar</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-6">
                        <br>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="foto" id="foto" required>
                            <label class="custom-file-label" for="foto">Fotografía del lugar</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <br>
                        <div class="form-group">
                            <input type="url" class="form-control" name="maps" id="maps" aria-describedby="mapsHelp" placeholder="e.g. https://goo.gl/maps/PeEYrWMrf41DvQ6P9" required>
                            <label for="maps">Ubicación en Google Maps</label>
                            <small id="mapsHelp" class="form-text text-muted">Pegue el vínculo obtenido desde Google Maps</small>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6 col-md-3 text-center">
                        <p>¿Es necesario hacer pre-gira?</p>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pregira" id="pregira1" value="1"/>
                                <span class="radio-icon"></span>
                                <span>Sí</span>
                            </label>
                        </div>
                        &nbsp;&nbsp;&nbsp;
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="pregira" id="pregira2" value="2" checked/>
                                <span class="radio-icon"></span>
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <p>Iluminación</p>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="espacio" id="espacio1" value="1"/>
                                <span class="radio-icon"></span>
                                <span>Lugar cerrado</span>
                            </label>
                        </div>
                        &nbsp;&nbsp;&nbsp;
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="espacio" id="espacio2" value="2" checked/>
                                <span class="radio-icon"></span>
                                <span>Lugar abierto</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <p>¿Habrá estacionamiento?</p>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="estacionamiento" id="estacionamiento1" value="1"/>
                                <span class="radio-icon"></span>
                                <span>Sí</span>
                            </label>
                        </div>
                        &nbsp;&nbsp;&nbsp;
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="estacionamiento" id="estacionamiento2" value="2" checked/>
                                <span class="radio-icon"></span>
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                    <div class="col-6 col-md-3 text-center">
                        <p>¿Es necesario llevar identificación?</p>
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="identificacion" id="identificacion1" value="1"/>
                                <span class="radio-icon"></span>
                                <span>Sí</span>
                            </label>
                        </div>
                        &nbsp;&nbsp;&nbsp;
                        <div class="form-check form-check-inline">
                            <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="identificacion" id="identificacion2" value="2" checked/>
                                <span class="radio-icon"></span>
                                <span>No</span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="encabeza" id="encabeza" placeholder="e.g. Lic. Alfredo del Mazo Maza" required>
                    <label for="encabeza">¿Quién encabeza el evento?</label>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="asistentes" name="asistentes" rows="3"></textarea>
                    <label for="asistentes">Lista de asistentes</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="coorganizador" id="coorganizador" placeholder="e.g. Ayuntamiento de Toluca">
                    <label for="coorganizador">¿Quién es co-organizador del evento?</label>
                </div>
                <br>
                <hr>
                <br>
                <p class="text-center">Contacto</p>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="contacto" id="contacto" placeholder="e.g. Juan Pérez" required>
                            <label for="contacto">¿Quién será nuestro enlace?</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            <input class="form-control" type="tel" value="7221234567" name="telefono" id="telefono"/>
                            <label for="telefono">Teléfono</label>
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
</form>

<script src="{{ asset('js/customer/cobertura.js') }}"></script>
@endsection