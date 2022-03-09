@extends('layout.app')
@section('content')
    <section class="switchable ">
        <div class="container">
            <h1 class="type--uppercase text-center">Sistema de Atención Ciudadana</h1>
            <p class="lead">
                Escríbenos. Estamos para escucharte
            </p>
            <hr class="short">
            <div class="tabs-container">
                <ul class="tabs">
                    <li class="active">
                        <div class="tab__title text-center">
                            <i class="icon icon--sm block icon-Add-File"></i>
                            <span class="h5">Nueva</span>
                        </div>
                        <div class="tab__content">
                            @component('_form')
                                @slot('tipo_form')
                                    atencion
                                @endslot
                                @slot('mensaje')
                                    Por favor llena la información necesaria para tu solicitud.
                                @endslot
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <p>Por favor selecciona el municipio:</p>
                                        <div class="input-select">
                                            <select name="municipio" id="municipio" required>
                                                <option value="0">Municipio *</option>
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
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <p>Por favor selecciona el tipo de solicitud:</p>
                                        <div class="input-select">
                                            <select name="solicitud" id="solicitud" required>
                                                <option value='0'>Tipo de Solicitud *</option>
                                                <option value='1'>Presentación de proyectos</option>
                                                <option value='2'>Solicitud de apoyo</option>
                                                <option value='3'>Envío de CV</option>
                                                <option value='4'>Invitación a eventos</option>
                                                <option value='5'>Agendar cita</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-8">
                                        <div class="form-group">
                                            <label for="descripcion">Justificación de la solicitud *</label>
                                            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" aria-describedby="descripcionHelp" required></textarea>
                                            <small id="descripcionHelp" class="form-text text-muted">Explica brevemente el motivo de tu solicitud.</small>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <p>En caso de ser necesario, adjunta un archivo</p>
                                        <div class="form-group d-none">
                                            <input type="file" id="archivo" name="archivo" class="form-control-file" style="display: block; width: 100%; overflow: visible;">
                                            <label for="archivo">Seleccione el archivo</label>
                                        </div>
                                        <a class="btn btn--primary btn--icon" href="#!" id="clickMe">
                                            <span class="btn__text"><i class="icon-Add-File"></i>Adjuntar</span>
                                        </a>
                                        <div id="alertMe" class="alert d-none">
                                            <div class="alert__body">
                                                <span id="alertText"></span>
                                            </div>
                                            <div id="alertClose" class="right float-right">
                                                ×
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                
                            @endcomponent
                        </div>
                    </li>
                    <li class="">
                        <div class="tab__title text-center">
                            <i class="icon icon--sm block icon-Spell-Check"></i>
                            <span class="h5">Seguimiento</span>
                        </div>
                        <div class="tab__content">
                            <form id="searchSolicitud" name="searchSolicitud" action="#!" method="GET">
                                @csrf
                                <p>Por favor ingresa los datos de la solicitud a buscar.</p>
                                <div class="row">
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="email">Correo electrónico *</label>
                                            <input type="email" class="form-control" name="email" id="email" placeholder="e.g. ejemplo@proveedor.com" required>
                                        </div>
                                    </div>
                                    <div class="col-12 col-md-6">
                                        <div class="form-group">
                                            <label for="ticket">Ticket *</label>
                                            <input type="text" class="form-control" name="ticket" id="ticket" placeholder="e.g. ATN-19940101-1" required>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <button id="sendFormSearch" type="submit" class="btn btn--primary">Buscar</button>
                                    </div>
                                </div>
                            </form>
                            <div id="resultados"></div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!--end of container-->
    </section>
    <div id="notify" class="notification promo-notification pos-right pos-top col-sm-6 col-md-4" data-animation="from-bottom" data-notification-link="trigger">
        <div class="boxed boxed--border bg--primary border--round">
            <p id="notifyMessage"></p>
        </div>
    </div>         
@endsection
@section('myScripts')
<script type="text/javascript">

    $('#sacForm').submit(function(e){
        if($('#municipio').val()==undefined || !isNaN($('#municipio').val())){
            $('#municipio').trigger('focus');
            return false;
        }
        if( $('#solicitud').val()==undefined || isNaN($('#solicitud').val()) || $('#solicitud').val()<=0 ){
            $('#solicitud').trigger('focus');
            return false;
        }
    });

    $('#clickMe').click(function(e) {
        e.preventDefault();
        $('#archivo').trigger('click');
    });

    $('#archivo').change(function(e) {
        var val = $(this).prop("files")[0];
        if(val!=undefined){
            $('#alertText').html( val.name );
            $('#alertMe').removeClass('d-none');
        }
    });

    $('#alertClose').click(function(e){
        $('#alertMe').addClass('d-none');
        $('#alertText').html( '' );
        $('#archivo').val(null);
    });

    $(document).on('submit','#searchSolicitud',function(e){
        e.preventDefault();
        loadCommnets();
    });

    function notify(success,text){
        $('#notifyMessage').text( text );
        if(success==true){
            $('#notify .boxed').addClass('bg--primary');
            $('#notify .boxed').removeClass('bg--dark');
        } else {
            $('#notify .boxed').removeClass('bg--primary');
            $('#notify .boxed').addClass('bg--dark');
        }
        $('#notify').removeClass('notification--dismissed');
        mr.notifications.showNotification($('#notify'));
    }

    function loadCommnets(withNotification = true){
        $.post("{{route('atencion.buscar')}}",$('#searchSolicitud').serialize(), function(data){
            console.log( data );
            var ok = false;
            if(data.error==0){
                ok = true;
                $('#resultados').html( data.html );
            } else {
                clearBody();
            }
            if(withNotification){
                notify( ok, data.msg );
            }
        })
        .fail( function( jqXHR, textStatus, errorThrown){
            console.log( errorThrown );
            console.log( textStatus );
            console.log( jqXHR );
            if(jqXHR.status==422){
                clearBody();
                if(withNotification){
                    notify( false, jqXHR.responseJSON.message );
                }
            }
        } );
    }

    function clearBody() {
        $('#resultados').html('');
    }

    $(document).on('click','#sendComment',function(e){
        e.preventDefault();
        $.post("{{route('respuestas.store')}}",{
            _token: $('#formComment input[name="_token"]').val(),
            email: $('#searchSolicitud #email').val(),
            ticket: $('#searchSolicitud #ticket').val(),
            solicitud: $('#formComment input[name="numberSol"]').val(),
            mensaje: $('#formComment #mensaje').val()
        }, function(data){
            var ok = false;
            console.log(data);
            if(data.error == 0){
                ok = true;
                loadCommnets(false);
            }
            notify( ok, data.msg );
        })
        .fail( function( jqXHR, textStatus, errorThrown){
            console.log( errorThrown );
            console.log( textStatus );
            console.log( jqXHR );
            if(jqXHR.status==422){
                notify( false, jqXHR.responseJSON.message );
            } else {
                notify( false, "Ha ocurrido un problema" );
            }
        } );
    });
    
</script>

@endsection