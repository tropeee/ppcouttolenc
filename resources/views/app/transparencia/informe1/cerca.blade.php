@extends('app.transparencia.informe1.base')
@section('contenido')
	<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md  z-index-2 mb-0">
		<div class="container-fluid">
			<div class="row align-items-center">

				<div class="col">
					<a href="{{route('logros')}}" class="portfolio-prev text-decoration-none d-block appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="d-flex align-items-center line-height-1">
							<i class="fas fa-arrow-left text-dark text-4 mr-3"></i>
							<div class="d-none d-sm-block line-height-1">
								<span class="text-dark opacity-4 text-1">ANTERIOR</span>
								<h4 class="font-weight-bold text-3 mb-0">Logros Legislativos</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<div class="overflow-hidden pb-2">
								<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Siempre cerca de ti</h1>
							</div>
						</div>
						<div class="col-md-12 align-self-center order-1">
							<ul class="breadcrumb d-block text-center appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="300">
								<li><a href="#">Transparencia</a></li>
								<li><a href="{{route('informe1')}}">Primer Informe</a></li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col">
					<a href="{{route('futuro')}}" class="portfolio-next text-decoration-none d-block float-right appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="d-flex align-items-center text-right line-height-1">
							<div class="d-none d-sm-block line-height-1">
								<span class="text-dark opacity-4 text-1">SIGUIENTE</span>
								<h4 class="font-weight-bold text-3 mb-0">El futuro es Verde</h4>
							</div>
							<i class="fas fa-arrow-right text-dark text-4 ml-3"></i>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<div class="z-index-1 appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="500">
		<div class="owl-carousel owl-theme full-width owl-loaded owl-drag owl-carousel-init m-0 mb-4" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false, 'animateOut': 'fadeOut'}">
			<div>
				<img src="{{ asset('porto/img/cerca-portada.jpg')}}" class="img-fluid" alt="">
			</div>
			<div>
				<img src="{{ asset('porto/img/cerca-2.jpg')}}" class="img-fluid" alt="">
			</div>
			<div>
				<img src="{{ asset('porto/img/cerca-3.jpg')}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>

	<div class="container py-4">
		<div class="row pt-2">
			<div class="col-12 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-plugin-options="{'accY': -150}">

				<h2 class="text-color-dark font-weight-normal text-5 mb-2">Siempre <strong class="font-weight-extra-bold">cerca de ti</strong></h2>

				<p style="text-align: justify;">
					Porque tratamos de ser agradecidos con la población que nos dio su confianza. Además del trabajo legislativo, iniciativas y puntos de acuerdo que presentamos, nuestra necesidad de dar más nos llevó a realizar “Brigadas médicas”, en diferentes municipios del Estado, con las cuales beneficiamos a más de 7 mil mexiquenses. A través de ultrasonidos, exámenes biométricos, visuales, audiométricos y salud bucal.
				</p>

				<p style="text-align: justify;">
					Gestionamos con CONAFOR y PROBOSQUE más de 250 mil árboles y encabezamos campañas de reforestación y limpieza de espacios públicos en diferentes municipios de la entidad. Tan solo el año pasado sembramos cerca de 100 mil arbolitos y este año vamos por más de medio millón. 
				</p>

				<p style="text-align: justify;">
					Creemos firmemente en la colaboración interinstitucional. Por ello, firmamos un convenio de colaboración entre nuestro Grupo Parlamentario y la UAEMéx, para actualizar, fortalecer y enriquecer nuestras propuestas legislativas en el sector ambiental. Este convenio nos permite realizar investigación y programas formativos conjuntos. 
				</p>

				<p style="text-align: justify;">
					Hemos estrechado lazos con más de 29 Asociaciones Civiles y se siguen sumando asociaciones profesionales, empresariales y sindicatos.  
				</p>

				<p style="text-align: justify;">
					En combate contra el cambio climático, creamos una campaña para concientizar a nuestras niñas y niños de escuelas primarias, respecto a la importancia del medio ambiente y las acciones que se pueden hacer, desde casa, para frenar el calentamiento global. 
				</p>

				<hr class="solid my-5">

			</div>
		</div>

		<div class="row counters counters-sm py-4">
			<div class="col-sm-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter" data-appear-animation-delay="250">
				<div class="counter">
					<i class="fas fa-user-md text-color-dark"></i>
					<strong class="text-color-primary font-weight-extra-bold" data-to="7000" data-append="+">0</strong>
					<label class="text-4 mt-1">Mexiquenses beneficiados</label>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 mb-5 mb-lg-0 appear-animation" data-appear-animation="fadeInLeftShorter">
				<div class="counter">
					<i class="fas fa-tree text-color-dark"></i>
					<strong class="text-color-primary font-weight-extra-bold" data-to="100000" data-append="+">0</strong>
					<label class="text-4 mt-1">Árboles sembrados</label>
				</div>
			</div>
			<div class="col-sm-6 col-lg-4 mb-5 mb-sm-0 appear-animation" data-appear-animation="fadeInRightShorter">
				<div class="counter">
					<i class="far fa-building text-color-dark"></i>
					<strong class="text-color-primary font-weight-extra-bold" data-to="29">0</strong>
					<label class="text-4 mt-1">Lazos con asociaciones civiles</label>
				</div>
			</div>
		</div>
	</div>
@endsection