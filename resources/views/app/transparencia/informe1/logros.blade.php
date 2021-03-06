@extends('app.transparencia.informe1.base')
@section('contenido')
	{{--<section class="page-header page-header-modern page-header-background page-header-background-md py-0 overlay overlay-color-primary overlay-show overlay-op-8" style="background-image: url({{ asset('porto/img/logro-portada.jpg')}}.jpg);">
		<div class="container">
			<div class="row">
				<div class="col-md-5 align-self-center text-center text-md-left p-static mt-5 mt-md-0">
					<div class="overflow-hidden">
						<ul class="breadcrumb breadcrumb-light d-block appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="100">
							<li><a href="#">Transparencia</a></li>
							<li><a href="{{route('informe1')}}">Primer Informe</a></li>
						</ul>
					</div>
					<div class="overflow-hidden pb-2">
						<h1 class="text-10 appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="300"><strong>Porto</strong> Branding</h1>
					</div>
					<div class="appear-animation" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
						<span class="sub-title text-4 mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur pellentesque neque eget diam posuere.</span>
					</div>
					<div class="appear-animation d-inline-block" data-appear-animation="fadeInUpShorter" data-appear-animation-delay="400">
						<a href="#" class="btn btn-modern btn-dark mt-4">Live Preview</a>
					</div>
				</div>
				<div class="col-md-7 align-items-end justify-content-center justify-content-md-end d-flex pt-5">
					<div style="min-height: 350px;" class="overflow-hidden">
						<img  alt="" src="img/custom-header.png" class="img-fluid appear-animation" data-appear-animation="slideInUp" data-appear-animation-delay="600" data-appear-animation-duration="1s">
					</div>
				</div>
			</div>
		</div>
	</section>--}}

	<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md  z-index-2 mb-0">
		<div class="container-fluid">
			<div class="row align-items-center">

				<div class="col">
					<a href="{{ route('trabajos')}}" class="portfolio-prev text-decoration-none d-block appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="d-flex align-items-center line-height-1">
							<i class="fas fa-arrow-left text-dark text-4 mr-3"></i>
							<div class="d-none d-sm-block line-height-1">
								<span class="text-dark opacity-4 text-1">ANTERIOR</span>
								<h4 class="font-weight-bold text-3 mb-0">Trabajo Legislativo</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<div class="overflow-hidden pb-2">
								<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">Logros Legislativos</h1>
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
					<a href="{{route('cerca')}}" class="portfolio-next text-decoration-none d-block float-right appear-animation" data-appear-animation="fadeInLeftShorter">
						<div class="d-flex align-items-center text-right line-height-1">
							<div class="d-none d-sm-block line-height-1">
								<span class="text-dark opacity-4 text-1">SIGUIENTE</span>
								<h4 class="font-weight-bold text-3 mb-0">Siempre cerca de ti</h4>
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
				<img src="{{ asset('porto/img/logro-portada.jpg')}}" class="img-fluid" alt="">
			</div>
			<div>
				<img src="{{ asset('porto/img/logro-banco.jpg')}}" class="img-fluid" alt="">
			</div>
			<div>
				<img src="{{ asset('porto/img/logro-seres.jpg')}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>

	<div class="container py-4">
		<div class="row pb-5 pt-2">
			<div class="col-12 mb-4 mb-md-0 appear-animation" data-appear-animation="fadeInRightShorter" data-plugin-options="{'accY': -150}">

				<h2 class="text-color-dark font-weight-normal text-5 mb-2"><strong class="font-weight-extra-bold">Logros</strong> Legislativos</h2>

				<p style="text-align: justify;" >
					Estamos convencidos que una democracia sustentable es necesaria si queremos sobrevivir como especies. Por ello, conscientes de que la vocaci??n de servicio es 24/7 los 365 d??as del a??o,  impulsamos acciones legislativas para lograr una vida mejor para todas y todos. En esa tesitura, tuvimos la fortuna de innovar las siguientes legislaciones: 
				</p>

				<ol style="text-align: justify;" >
					<li>
						Ley para la Recuperaci??n y Aprovechamiento de Alimentos del???Estado de M??xico: ??Contaremos con Bancos de alimentos en todos los municipios del Estado de M??xico! Con esta legislaci??n buscamos atender las necesidades de alimentaci??n de la poblaci??n y dar un mejor destino a los alimentos, antes de que se conviertan en desechos.
					</li>
					<li>
						Los estacionamientos ser??n otorgados de manera gratuita para personas con discapacidad y aquellos que sean sorprendidos en esos lugares, ser??n multados.
					</li>
					<li>
						Hoy en el Estado de M??xico los animales ser??n considerados como seres sintientes, y???deber??n???recibir un trato digno. Castigaremos el maltrato animal. 
					</li>
					<li>
						La ley para colocar alarmas s??smicas en lugares de alto riesgo: hospitales y escuelas, ser?? una medida preventiva para evitar da??os a enfermos y ni??os. 
					</li>
				</ol>
				<p style="text-align: justify;" >
					Somos el ??nico partido pol??tico que ha generado una nueva propuesta integral para el medio ambiente, a trav??s del: ???C??digo para la Protecci??n Ambiental y el Desarrollo Sostenible del Estado de M??xico. 
				</p>

				<p style="text-align: justify;" >
					En este nuevo C??digo buscamos hacer obligatorias las verificaciones a autom??viles, sancionar a quienes no lo hagan, generar zonas metropolitanas donde se aplique el hoy no circula, regularizar el uso de suelo de acuerdo a su vocaci??n natural, incentivar los eco deportes.
				</p>

				<p style="text-align: justify;" >
					Por medio de nuestra legislaci??n, buscamos generar una econom??a circular y de responsabilidad solidaria y extendida en temas ambientales al sector productivo, as?? como la obligaci??n del Estado a fomentar el uso de veh??culos h??bridos y el??ctricos en su flotilla y en el transporte p??blico, de igual forma se proh??be la quema a cielo abierto de residuos. 
				</p>

				<p style="text-align: justify;" >
					Estos logros reafirman nuestra vocaci??n de servicio y nuestro amor por el medio ambiente. Tenemos claro que la norma sin una aplicaci??n social es letra muerta. Por ello, implementamos diversos foros acad??micos para la discusi??n de nuestras propuestas entre la sociedad civil. Entre los que destacan:  
				</p>

				<ol style="text-align: justify;" >
					<li>Foro ???Manejo de residuos y calidad del aire en el Estado de M??xico???. </li>
					<li>Foro ???Agua: soluciones conjuntas???. </li>
					<li>Foro ???Marihuana: un caso de ??xito???, contando con la destacada participaci??n de la embajadora de los Pa??ses Bajos en M??xico, Margriet???Leemhuis. </li>
				</ol>

				<p style="text-align: justify;" >
					El trabajo de un legislador estar??a incompleto si el dise??o legal no se acompa??a de campa??as formativas y de concientizaci??n. En este sentido, organizamos el Concurso Estatal de Dibujo "El agua y yo; cuid??mosla" y  el concurso de fotograf??a "Mexiquense, muestra la contaminaci??n de tu estado" todos ellos, con la finalidad de generar una ni??ez y juventud responsables con su medio ambiente. 
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
						<h4 class="mb-2">Foros</h4>
						<p>Realizamos 3 foros acad??micos</p>
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
						<p>4 legislaciones aprobadas</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1200">
				<div class="feature-box feature-box-style-2">
					<div class="feature-box-icon">
						<i class="far fa-star"></i>
					</div>
					<div class="feature-box-info">
						<h4 class="mb-2">Concursos</h4>
						<p>Organizamos 2 concursos relacionados al medio ambiente</p>
					</div>
				</div>
			</div>
		</div>

	</div>
@endsection