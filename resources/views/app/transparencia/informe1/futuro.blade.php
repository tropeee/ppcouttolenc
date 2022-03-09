@extends('app.transparencia.informe1.base')
@section('contenido')
	<section class="page-header page-header-modern bg-color-light-scale-1 page-header-md  z-index-2 mb-0">
		<div class="container-fluid">
			<div class="row align-items-center">

				<div class="col">
					<a href="{{route('cerca')}}" class="portfolio-prev text-decoration-none d-block appear-animation" data-appear-animation="fadeInRightShorter">
						<div class="d-flex align-items-center line-height-1">
							<i class="fas fa-arrow-left text-dark text-4 mr-3"></i>
							<div class="d-none d-sm-block line-height-1">
								<span class="text-dark opacity-4 text-1">ANTERIOR</span>
								<h4 class="font-weight-bold text-3 mb-0">Siempre cerca de ti</h4>
							</div>
						</div>
					</a>
				</div>
				<div class="col">
					<div class="row">
						<div class="col-md-12 align-self-center p-static order-2 text-center">
							<div class="overflow-hidden pb-2">
								<h1 class="text-dark font-weight-bold text-9 appear-animation" data-appear-animation="maskUp" data-appear-animation-delay="100">El futuro es Verde</h1>
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
					&nbsp;
				</div>
			</div>
		</div>
	</section>

	<div class="z-index-1 appear-animation" data-appear-animation="fadeInDownShorter" data-appear-animation-delay="500">
		<div class="owl-carousel owl-theme full-width owl-loaded owl-drag owl-carousel-init m-0 mb-4" data-plugin-options="{'items': 1, 'loop': true, 'nav': true, 'dots': false, 'animateOut': 'fadeOut'}">
			<div>
				<img src="{{ asset('porto/img/futuro-portada.jpg')}}" class="img-fluid" alt="">
			</div>
			<div>
				<img src="{{ asset('porto/img/futuro-2.jpg')}}" class="img-fluid" alt="">
			</div>
			<div>
				<img src="{{ asset('porto/img/futuro-3.jpg')}}" class="img-fluid" alt="">
			</div>
		</div>
	</div>

	<div class="container py-4">
		<section class="timeline" id="timeline">
			<div class="timeline-body">
				<div class="timeline-date">
					<h3 class="text-primary font-weight-bold">2017</h3>
				</div>
		
				<article class="timeline-box left">
					<div class="card border-0 bg-color-grey text-center">
						<div class="card-body">
							<strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">
								<i class="icon-user-following icons "></i>
							</strong>
							<h4 class="card-title mt-2 mb-1 text-4 font-weight-bold">EN 2017</h4>
							<p class="card-text">Sólo votaban 100 mil personas por nosotros.</p>
						</div>
					</div>
				</article>

				<div class="timeline-date">
					<h3 class="text-primary font-weight-bold">2018</h3>
				</div>

				<article class="timeline-box right">
					<div class="card border-0 bg-color-grey text-center">
						<div class="card-body">
							<strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">
								<i class="fas fa-vote-yea"></i>
							</strong>
							<h4 class="card-title mt-2 mb-1 text-4 font-weight-bold">EN 2018</h4>
							<p class="card-text">Obtuvimos cerca de 400 mil votos.</p>
						</div>
					</div>
				</article>

				<div class="timeline-date">
					<h3 class="text-primary font-weight-bold">2019</h3>
				</div>

				<article class="timeline-box left">
					<div class="card border-0 bg-color-grey text-center">
						<div class="card-body">
							<strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">
								<i class="icon-user-follow icons "></i>
							</strong>
							<h4 class="card-title mt-2 mb-1 text-4 font-weight-bold">¡CRECIMOS!</h4>
							<p class="card-text">Cuadruplicamos nuestra fuerza electoral.</p>
						</div>
					</div>
				</article>

				<article class="timeline-box right">
					<div class="card border-0 bg-color-grey text-center">
						<div class="card-body">
							<strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">
								<i class="fas fa-users"></i>
							</strong>
							<h4 class="card-title mt-2 mb-1 text-4 font-weight-bold">REGIDURÍAS</h4>
							<p class="card-text">Pasamos de 7 a más de 100 regidurías.</p>
						</div>
					</div>
				</article>

				<article class="timeline-box left">
					<div class="card border-0 bg-color-grey text-center">
						<div class="card-body">
							<strong class="font-weight-extra-bold text-color-dark line-height-1 text-13 mb-3 d-inline-block">
								<i class="icon-badge icons "></i>
							</strong>
							<h4 class="card-title mt-2 mb-1 text-4 font-weight-bold">MUNICIPIOS</h4>
							<p class="card-text">Hoy somos 5 gobiernos municipales.</p>
						</div>
					</div>
				</article>

				<div class="timeline-date">
					<h3 class="text-primary font-weight-bold">Futuro</h3>
				</div>

				<article class="timeline-box right">
					<div class="portfolio-item">
						<a href="#!">
							<span class="thumb-info thumb-info-lighten thumb-info-no-borders m-0">
								<span class="thumb-info-wrapper">
									<img src="{{ asset('porto/img/futuro-logo.jpg')}}" class="img-fluid" alt="">
									<span class="thumb-info-title">
										<span class="thumb-info-inner">EL FUTURO</span>
										<span class="thumb-info-type">es Verde</span>
									</span>
									<span class="thumb-info-action">
										<span class="thumb-info-action-icon bg-dark opacity-8"><i class="fas fa-plus"></i></span>
									</span>
								</span>
							</span>
						</a>
					</div>
				</article>

			</div>
		
		</section>
	</div>

	
@endsection