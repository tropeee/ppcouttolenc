<!DOCTYPE html>
<html class="disable-onload-scroll side-header-overlay-full-screen overflow-hidden">
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

        @include('meta::manager', [
            'title'         => 'Pepe Couttolenc',
            'keywords'      => 'Pepe Couttolenc, Verde, Ecologista',
            'description'   => 'Joven, activista y luchador social. Me encanta el ciclismo, la lectura y pensar diferente. Actualmente soy Legislador en el Estado de México y Secretario General del Partido Verde Estado de México.',
            'image'         =>  Request::url().'/img/B2.png',
        ])

        <title>Primer Informe | Pepe Couttolenc</title>
        <link rel="shortcut icon" href="{{ asset('img/favicon.ico') }}"/>
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{ asset('porto/vendor/bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/vendor/fontawesome-free/css/all.min.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/vendor/animate/animate.min.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/vendor/simple-line-icons/css/simple-line-icons.min.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/vendor/owl.carousel/assets/owl.carousel.min.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/vendor/owl.carousel/assets/owl.theme.default.min.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/vendor/magnific-popup/magnific-popup.min.css') }}">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{ asset('porto/css/theme.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/css/theme-elements.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/css/theme-blog.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/css/theme-shop.css') }}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/settings.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/layers.css') }}">
		<link rel="stylesheet" href="{{ asset('porto/vendor/rs-plugin/css/navigation.css') }}">
		
		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{ asset('porto/css/skins/default.css') }}""> 

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{ asset('porto/css/custom.css') }}">

		<!-- Head Libs -->
		<script src="{{ asset('porto/vendor/modernizr/modernizr.min.js') }}"></script>

	</head>
    <body class="loading-overlay-showing" data-loading-overlay data-plugin-section-scroll data-plugin-options="{'targetClass': '.section-scroll', 'dotsClass': 'section-scroll-dots-navigation-style-2 section-scroll-dots-navigation-light', 'changeHeaderLogo': true, 'headerLogoDark': 'img/logo.png', 'headerLogoLight': 'img/logo-dark.png'}">
        <!-- Google Tag Manager (noscript) -->
        <noscript>
            <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MN8M9ST"
                            height="0" width="0" style="display:none;visibility:hidden">
            </iframe>
        </noscript>
        <!-- End Google Tag Manager (noscript) -->

		<div class="loading-overlay">
			<div class="bounce-loader">
				<div class="bounce1"></div>
				<div class="bounce2"></div>
				<div class="bounce3"></div>
			</div>
		</div>

		<div class="body bg-dark">

			<div class="sticky-wrapper sticky-wrapper-transparent sticky-wrapper-border-bottom bg-transparent" data-plugin-sticky data-plugin-options="{'minWidth': 0, 'stickyStartEffectAt': 1, 'padding': {'top': 0}}">
				<div class="sticky-body">
					<div class="container-fluid">
						<div class="row align-items-center">
							<div class="col-9">
								<div class="py-4">
									<a href="{{ route('inicio') }}">
										<img alt="Porto" width="82" height="40" src="{{ asset('img/logo-dark.png') }}">
									</a>
								</div>
							</div>
							<div class="col-3 text-right">
								<button class="hamburguer-btn hamburguer-btn-light" data-set-active="false">
									<span class="hamburguer">
										<span></span>
										<span></span>
										<span></span>
									</span>
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>

			<header id="header" class="side-header-overlay-full-screen side-header-hide pt-0" data-plugin-options="{'stickyEnabled': false}">

				<button class="hamburguer-btn hamburguer-btn-light hamburguer-btn-side-header hamburguer-btn-side-header-overlay active" data-set-active="false">
					<span class="close">
						<span></span>
						<span></span>
					</span>
				</button>

				<div class="header-body d-flex h-100">
					<div class="header-column flex-row flex-lg-column justify-content-center h-100">
						<div class="header-container container d-flex h-100">
							<div class="header-row header-row-side-header flex-row h-100">
								<div class="side-header-scrollable scrollable colored-slider h-50 mt-5" data-plugin-scrollable>
									<div class="scrollable-content">
										<div class="header-nav header-nav-light-text header-nav-links header-nav-links-side-header header-nav-links-vertical header-nav-links-vertical-expand header-nav-click-to-open align-self-start">
											<div class="header-nav-main header-nav-main-square header-nav-main-dropdown-no-borders header-nav-main-effect-4 header-nav-main-sub-effect-1">
												<nav>
													<ul class="nav nav-pills" id="mainNav">
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('inicio') }}">Inicio</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('blog') }}">Blog</a>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('proyectos') }}">Proyectos</a>
                                                        </li>
                                                        <li class="dropdown">
                                                            <a class="dropdown-item dropdown-toggle" href="#">
                                                                Transparencia
                                                            </a>
                                                            <ul class="dropdown-menu">
                                                                <li>
                                                                    <a class="dropdown-item" href=" {{ route('informe1') }}">
                                                                        Primer Informe
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{ route('atencion') }}">Atención Ciudadana</a>
                                                        </li>
													</ul>
												</nav>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				<section class="section section-scroll bg-light border-0 p-0 m-0" data-section-scroll-title="HOME" data-section-scroll-header-color="light">
					<div class="position-absolute w-100 h-100 top-0 left-0 appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="0" style="background-image: url({{ asset('porto/img/portada.jpg') }}); background-size: cover; background-position: center;"></div>
					<div class="container h-100">
						<div class="row align-items-center justify-content-center h-100">
							<div class="col-lg-7 text-center">
								{{--<h1 class="font-weight-bold text-color-light text-13 line-height-2 negative-ls-2 mb-4">Hello, we are <strong class="text-color-primary font-weight-extra-bold appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="200">Porto.</strong> A Digital Agency from <strong class="text-color-primary font-weight-extra-bold appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">New York City.</strong></h1>
								<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="1000">
									<p class="font-weight-light text-color-light text-6 line-height-7 opacity-7 px-5 mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit phasellus.</p>
								</div>--}}
							</div>
						</div>
					</div>
				</section>

				<section class="section section-scroll section-background border-0 m-0" data-section-scroll-title="TRABAJO LEGISLATIVO" data-section-scroll-header-color="light" style="background-image: url({{ asset('porto/img/portada-trabajo.jpg') }}); background-size: cover; background-position: center;">
					<div class="container-fluid h-100">
						<div class="row align-items-end h-100">
							<div class="col-9 col-md-5 col-lg-3 overlay overlay-show overlay-op-9 overlay-backward py-2 appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="position-relative z-index-2 py-4">
									<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
										<span class="text-color-light text-2 line-height-3 opacity-6">TRABAJO</span>
									</div>
									<h2 class="text-color-light font-weight-bold text-5 line-height-4 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Legislativo</h2>
									<a href="{{ route('trabajos') }}" class="d-inline-flex align-items-center btn btn-with-arrow font-weight-bold text-color-light text-2 p-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
										LEER MÁS
										<span class="d-inline-flex align-items-center bg-transparent box-shadow-none ml-2"><i class="fas fa-arrow-right text-color-light text-3 top-0"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-scroll section-background border-0 m-0" data-section-scroll-title="LOGROS" data-section-scroll-header-color="light" style="background-image: url({{ asset('porto/img/portada-logros.jpg') }}); background-size: cover; background-position: center;">
					<div class="container-fluid h-100">
						<div class="row align-items-end h-100">
							<div class="col-9 col-md-5 col-lg-3 overlay overlay-show overlay-op-9 overlay-backward py-2 appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="position-relative z-index-2 py-4">
									<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
										<span class="text-color-light text-2 line-height-3 opacity-6">LEGISLATIVOS</span>
									</div>
									<h2 class="text-color-light font-weight-bold text-5 line-height-4 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Logros</h2>
									<a href="{{ route('logros') }}" class="d-inline-flex align-items-center btn btn-with-arrow font-weight-bold text-color-light text-2 p-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
										LEER MÁS
										<span class="d-inline-flex align-items-center bg-transparent box-shadow-none ml-2"><i class="fas fa-arrow-right text-color-light text-3 top-0"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<section class="section section-scroll section-background border-0 m-0" data-section-scroll-title="CERCA DE TI" data-section-scroll-header-color="light" style="background-image: url({{ asset('porto/img/portada-cerca.jpg') }}); background-size: cover; background-position: center;">
					<div class="container-fluid h-100">
						<div class="row align-items-end h-100">
							<div class="col-9 col-md-5 col-lg-3 overlay overlay-show overlay-op-9 overlay-backward py-2 appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="position-relative z-index-2 py-4">
									<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
										<span class="text-color-light text-2 line-height-3 opacity-6">SIEMPRE</span>
									</div>
									<h2 class="text-color-light font-weight-bold text-5 line-height-4 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">Cerca de ti</h2>
									<a href="{{ route('cerca') }}" class="d-inline-flex align-items-center btn btn-with-arrow font-weight-bold text-color-light text-2 p-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
										LEER MÁS
										<span class="d-inline-flex align-items-center bg-transparent box-shadow-none ml-2"><i class="fas fa-arrow-right text-color-light text-3 top-0"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>
                
                <section class="section section-scroll section-background border-0 m-0" data-section-scroll-title="FUTURO VERDE" data-section-scroll-header-color="light" style="background-image: url({{ asset('porto/img/portada-futuro.jpg') }}); background-size: cover; background-position: center;">
					<div class="container-fluid h-100">
                        <div class="row align-items-end h-100">
                            <div class="col-9 col-md-5 col-lg-3 overlay overlay-show overlay-op-9 overlay-backward py-2 appear-animation" data-appear-animation="fadeInRightShorter">
								<div class="position-relative z-index-2 py-4">
									<div class="appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500">
										<span class="text-color-light text-2 line-height-3 opacity-6">FAMILIA VERDE</span>
									</div>
									<h2 class="text-color-light font-weight-bold text-5 line-height-4 mb-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="300">El futuro es VERDE</h2>
									<a href="{{ route('futuro')}}" class="d-inline-flex align-items-center btn btn-with-arrow font-weight-bold text-color-light text-2 p-0 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="700">
										LEER MÁS
										<span class="d-inline-flex align-items-center bg-transparent box-shadow-none ml-2"><i class="fas fa-arrow-right text-color-light text-3 top-0"></i></span>
									</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				
			</div>
		</div>

		<!-- Vendor -->
		<script src="{{ asset('porto/vendor/jquery/jquery.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery.appear/jquery.appear.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery.cookie/jquery.cookie.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/popper/umd/popper.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/common/common.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery.validation/jquery.validate.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/vivus/vivus.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/nanoscroller/jquery.nanoscroller.min.js') }}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{ asset('porto/js/theme.js') }}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{ asset('porto/vendor/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>
		
		<!-- Theme Custom -->
		<script src="{{ asset('porto/js/custom.js') }}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{ asset('porto/js/theme.init.js') }}"></script>

	</body>
</html>