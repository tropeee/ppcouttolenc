@extends('app.transparencia.informe1.base')
@section('contenido')
	<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md  z-index-2 mb-0">
		<div class="container-fluid">
			<div class="row align-items-center">

				<div class="col">
					&nbsp;
				</div>
				<div class="col">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<div class="overflow-hidden pb-2">
								<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Trabajo Legislativo</h1>
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
					<a href="{{route('logros')}}" class="portfolio-next text-decoration-none d-block float-right appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="d-flex align-items-center text-right line-height-1">
							<div class="d-none d-sm-block line-height-1">
								<span class="text-dark opacity-4 text-1">SIGUIENTE</span>
								<h4 class="font-weight-bold text-3 mb-0">Logros Legislativos</h4>
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
				<img src="{{ asset('porto/img/trabajo-portada.jpg')}}" class="img-fluid" alt="">
			</div>
			<div>
				<img src="{{ asset('porto/img/trabajo-2.jpg')}}" class="img-fluid" alt="">
			</div>
			<div>
				<img src="{{ asset('porto/img/trabajo-3.jpg')}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>

	<div class="container py-4">
		<div class="row pb-5 pt-2">
			<div class="col-12 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-plugin-options="{'accY': -150}">

				<h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">Trabajo</strong> Legislativo</h2>

				<p style="text-align: justify;" >
					??Rompimos r??cord! Somos el grupo parlamentario m??s productivo y perseverante de toda la C??mara. Hasta el momento llevamos m??s de 60 asuntos presentados, entre iniciativas de ley y puntos de acuerdo.  
				</p>

				<p style="text-align: justify;" >
					Propusimos
				</p>

				<ul style="text-align: justify;">
					<li>Mejorar y ampliar los sistemas de monitoreo de calidad del aire.</li>
					<li>Implementar un aprovechamiento forestal sostenible.</li>
					<li>Gestionar eficientemente los residuos.</li>
					<li>Eliminar todo tipo de espect??culos en los que se maltrate o sacrifique animales.</li>
					<li>Impulsar el uso eficiente del agua en el???Estado de M??xico.</li>
					<li>Generar programas permanentes en las escuelas para incentivar la educaci??n ambiental.</li>
					<li>Promover y procurar la construcci??n y el desarrollo de programas de operaci??n de viveros en los municipios mexiquenses.</li>
					<li>Recuperar y sanear el r??o Lerma.</li>
					<li>Eliminar los pl??sticos de un solo uso como bolsas y popotes.</li>
					<li>Otorgar incentivos fiscales a los contribuyentes del impuesto predial que conviertan sus techos en azoteas verdes.</li>
					<li>Establecer la obligaci??n de que las compras p??blicas consideren productos que no deterioren el medio ambiente.</li>
					<li>Entre otros.</li>
				</ul>

				<p style="text-align: justify;">
					Porque nuestra lucha es justa, la presentaci??n de estas iniciativas y puntos de acuerdo, representan la columna vertebral del desarrollo sostenible y el cuidado del medio ambiente en el Estado. 
				</p>

				<p style="text-align: justify;">
					Porque ayudamos sin distinci??n alguna, nuestras propuestas legislativas tambi??n consideran pol??ticas transversales e integrales; en este sentido, hemos presentado iniciativas orientadas a:
				</p>

				<ul style="text-align: justify;">
					<li>Incluir personas con discapacidad y adultos mayores al ??mbito laboral.</li>
					<li>Mejorar la calidad de vida de personas con autismo y s??ndrome de down.</li>
					<li>Crear conciencia respecto a la salud intima del hombre.</li>
					<li>Erradicar la violencia por razones de g??nero.</li>
					<li>Proteger la integridad y dignidad personal a la que se exponen los usuarios de internet (Pornovenganza)</li>
				</ul>

				<p style="text-align: justify;">
					Nos sentimos orgullosos de nuestras iniciativas aprobadas en comisi??n. Gracias a todo el apoyo de la ciudadan??a, otros grupos parlamentarios y, sobre todo, a nuestra Familia Verde. 
				</p>

				<hr class="solid my-5">

			</div>
		</div>
	</div>

	<div class="container py-5">

		<div class="row ">
			<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800">
				<div class="feature-box feature-box-style-2">
					<div class="feature-box-icon">
						<i class="far fa-file"></i>
					</div>
					<div class="feature-box-info">
						<h4 class="mb-2">??Rompimos r??cord!</h4>
						<p>60 asuntos presentados</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1000">
				<div class="feature-box feature-box-style-2">
					<div class="feature-box-icon">
						<i class="fas fa-bullseye"></i>
					</div>
					<div class="feature-box-info">
						<h4 class="mb-2">Legislaciones</h4>
						<p>Iiniciativas y puntos de acuerdo para el desarrollo sostenible y el cuidado del medio ambiente</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200">
				<div class="feature-box feature-box-style-2">
					<div class="feature-box-icon">
						<i class="far fa-star"></i>
					</div>
					<div class="feature-box-info">
						<h4 class="mb-2">Propuestas</h4>
						<p>Propuestas legislativas en pol??ticas transversales e integrales</p>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection