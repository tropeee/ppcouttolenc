@extends('layout.app_with_title')

@section('section_title')
Atención Ciudadana
@endsection

@section('app_content')
<form id="formCobertura" name="formCobertura" action="{{route('servicio.atencion.new')}}" method="POST" enctype="multipart/form-data" class="row">
    @csrf
    <div class="col-12">
        <h1 class="text-center">Nueva Solicitud</h1>
        <div class="card">
            <div class="card-body">
                <p>Por favor llene la información necesaria para su solicitud.</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="e.g. Juan" required>
                    <label for="nombre">Nombre (s) *</label>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="apellido" id="apellido" placeholder="e.g. Pérez Gómez" required>
                    <label for="apellido">Apellidos *</label>
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="e.g. ejemplo@proveedor.com" required>
                    <label for="email">Correo electrónico *</label>
                </div>
                <div class="form-group">
                    <input type="tel" class="form-control" name="tel" id="tel" placeholder="e.g. 7221234567" required>
                    <label for="tel">Teléfono *</label>
				</div>
				<div class="form-group">
					<label for="municipio">Municipio *</label>
					<select class="form-control" name="municipio" id="municipio" required>
						<option value="0">Seleccione</option>
						<option value="Acambay">Acambay</option>
						<option value="Acolman">Acolman</option>
						<option value="Aculco">Aculco</option>
						<option value="Almoloya de Alquisiras">Almoloya de Alquisiras</option>
						<option value="Almoloya de Juárez">Almoloya de Juárez</option>
						<option value="Almoloya del Río">Almoloya del Río</option>
						<option value="Amanalco">Amanalco</option>
						<option value="Amatepec">Amatepec</option>
						<option value="Amecameca">Amecameca</option>
						<option value="Apaxco">Apaxco</option>
						<option value="Atenco">Atenco</option>
						<option value="Atizapán">Atizapán</option>
						<option value="Atizapán de Zaragoza">Atizapán de Zaragoza</option>
						<option value="Atlacomulco">Atlacomulco</option>
						<option value="Atlautla">Atlautla</option>
						<option value="Axapusco">Axapusco</option>
						<option value="Ayapango">Ayapango</option>
						<option value="Calimaya">Calimaya</option>
						<option value="Capulhuac">Capulhuac</option>
						<option value="Coacalco de Berriozábal">Coacalco de Berriozábal</option>
						<option value="Coatepec Harinas">Coatepec Harinas</option>
						<option value="Cocotitlán">Cocotitlán</option>
						<option value="Coyotepec">Coyotepec</option>
						<option value="Cuautitlán">Cuautitlán</option>
						<option value="Chalco">Chalco</option>
						<option value="Chapa de Mota">Chapa de Mota</option>
						<option value="Chapultepec">Chapultepec</option>
						<option value="Chiautla">Chiautla</option>
						<option value="Chicoloapan">Chicoloapan</option>
						<option value="Chiconcuac">Chiconcuac</option>
						<option value="Chimalhuacán">Chimalhuacán</option>
						<option value="Donato Guerra">Donato Guerra</option>
						<option value="Ecatepec de Morelos">Ecatepec de Morelos</option>
						<option value="Ecatzingo">Ecatzingo</option>
						<option value="Huehuetoca">Huehuetoca</option>
						<option value="Hueypoxtla">Hueypoxtla</option>
						<option value="Huixquilucan">Huixquilucan</option>
						<option value="Isidro Fabela">Isidro Fabela</option>
						<option value="Ixtapaluca">Ixtapaluca</option>
						<option value="Ixtapan de la Sal">Ixtapan de la Sal</option>
						<option value="Ixtapan del Oro">Ixtapan del Oro</option>
						<option value="Ixtlahuaca">Ixtlahuaca</option>
						<option value="Xalatlaco">Xalatlaco</option>
						<option value="Jaltenco">Jaltenco</option>
						<option value="Jilotepec">Jilotepec</option>
						<option value="Jilotzingo">Jilotzingo</option>
						<option value="Jiquipilco">Jiquipilco</option>
						<option value="Jocotitlán">Jocotitlán</option>
						<option value="Joquicingo">Joquicingo</option>
						<option value="Juchitepec">Juchitepec</option>
						<option value="Lerma">Lerma</option>
						<option value="Malinalco">Malinalco</option>
						<option value="Melchor Ocampo">Melchor Ocampo</option>
						<option value="Metepec">Metepec</option>
						<option value="Mexicaltzingo">Mexicaltzingo</option>
						<option value="Morelos">Morelos</option>
						<option value="Naucalpan de Juárez">Naucalpan de Juárez</option>
						<option value="Nezahualcóyotl">Nezahualcóyotl</option>
						<option value="Nextlalpan">Nextlalpan</option>
						<option value="Nicolás Romero">Nicolás Romero</option>
						<option value="Nopaltepec">Nopaltepec</option>
						<option value="Ocoyoacac">Ocoyoacac</option>
						<option value="Ocuilan">Ocuilan</option>
						<option value="El Oro">El Oro</option>
						<option value="Otumba">Otumba</option>
						<option value="Otzoloapan">Otzoloapan</option>
						<option value="Otzolotepec">Otzolotepec</option>
						<option value="Ozumba">Ozumba</option>
						<option value="Papalotla">Papalotla</option>
						<option value="La Paz">La Paz</option>
						<option value="Polotitlán">Polotitlán</option>
						<option value="Rayón">Rayón</option>
						<option value="San Antonio la Isla">San Antonio la Isla</option>
						<option value="San Felipe del Progreso">San Felipe del Progreso</option>
						<option value="San Martín de las Pirámides">San Martín de las Pirámides</option>
						<option value="San Mateo Atenco">San Mateo Atenco</option>
						<option value="San Simón de Guerrero">San Simón de Guerrero</option>
						<option value="Santo Tomás">Santo Tomás</option>
						<option value="Soyaniquilpan de Juárez">Soyaniquilpan de Juárez</option>
						<option value="Sultepec">Sultepec</option>
						<option value="Tecámac">Tecámac</option>
						<option value="Tejupilco">Tejupilco</option>
						<option value="Temamatla">Temamatla</option>
						<option value="Temascalapa">Temascalapa</option>
						<option value="Temascalcingo">Temascalcingo</option>
						<option value="Temascaltepec">Temascaltepec</option>
						<option value="Temoaya">Temoaya</option>
						<option value="Tenancingo">Tenancingo</option>
						<option value="Tenango del Airet">Tenango del Aire</option>
						<option value="Tenango del Valle">Tenango del Valle</option>
						<option value="Teoloyucan">Teoloyucan</option>
						<option value="Teotihuacán">Teotihuacán</option>
						<option value="Tepetlaoxtoc">Tepetlaoxtoc</option>
						<option value="Tepetlixpa">Tepetlixpa</option>
						<option value="Tepotzotlán">Tepotzotlán</option>
						<option value="Tequixquiac">Tequixquiac</option>
						<option value="Texcaltitlán">Texcaltitlán</option>
						<option value="Texcalyacac">Texcalyacac</option>
						<option value="Texcoco">Texcoco</option>
						<option value="Tezoyuca">Tezoyuca</option>
						<option value="Tianguistenco">Tianguistenco</option>
						<option value="Timilpan">Timilpan</option>
						<option value="Tlalmanalco">Tlalmanalco</option>
						<option value="Tlalnepantla de Baz">Tlalnepantla de Baz</option>
						<option value="Tlatlaya">Tlatlaya</option>
						<option value="Toluca">Toluca</option>
						<option value="Tonatico">Tonatico</option>
						<option value="Tultepec">Tultepec</option>
						<option value="Tultitlán">Tultitlán</option>
						<option value="Valle de Bravo">Valle de Bravo</option>
						<option value="Villa de Allende">Villa de Allende</option>
						<option value="Villa del Carbón">Villa del Carbón</option>
						<option value="Villa Guerrero">Villa Guerrero</option>
						<option value="Villa Victoria">Villa Victoria</option>
						<option value="Xonacatlán">Xonacatlán</option>
						<option value="Zacazonapan">Zacazonapan</option>
						<option value="Zacualpan">Zacualpan</option>
						<option value="Zinacantepec">Zinacantepec</option>
						<option value="Zumpahuacán">Zumpahuacán</option>
						<option value="Zumpango">Zumpango</option>
						<option value="Cuautitlán Izcalli">Cuautitlán Izcalli</option>
						<option value="Valle de Chalco Solidaridad">Valle de Chalco Solidaridad</option>
						<option value="Luvianos">Luvianos</option>
						<option value="San José del Rincón">San José del Rincón</option>
						<option value="Tonanitla">Tonanitla</option>
					</select>
				</div>
				<div class="form-group">
					<textarea class="form-control" id="descripcion" name="descripcion" rows="3" aria-describedby="descripcionHelp" required></textarea>
					<label for="descripcion">Justificación de la solicitud</label>
					<small id="descripcionHelp" class="form-text text-muted">Explique brevemente el motivo de su solicitud.</small>
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