<!DOCTYPE html>
<html>
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
	<body>
		<div class="body">
			<header id="header" class="header-effect-shrink" data-plugin-options="{'stickyEnabled': true, 'stickyEffect': 'shrink', 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyChangeLogo': true, 'stickyStartAt': 120, 'stickyHeaderContainerHeight': 70}">
				<div class="header-body border-top-0">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-row">
									<div class="header-logo">
										<a href="{{ route('inicio') }}">
											<img alt="Pepe" width="100" height="48" data-sticky-width="82" data-sticky-height="40" src="{{ asset('porto/img/logo-dark.png')}}">
										</a>
									</div>
								</div>
							</div>
							<div class="header-column justify-content-end">
								<div class="header-row">
									<div class="header-nav header-nav-line header-nav-top-line header-nav-top-line-with-border order-2 order-lg-1">
										<div class="header-nav-main header-nav-main-square header-nav-main-effect-2 header-nav-main-sub-effect-1">
											<nav class="collapse">
												<ul class="nav nav-pills" id="mainNav">
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="{{ route('inicio') }}">
															Inicio
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="{{ route('blog') }}">
															Blog
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="{{ route('proyectos') }}">
															Proyectos
														</a>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="#">
															Transparencia
														</a>
														<ul class="dropdown-menu">
															<li>
																<a class="dropdown-item" href="{{ route('informe1') }}">
																	Primer Informe
																</a>
															</li>
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-item dropdown-toggle" href="{{ route('atencion') }}">
															Atención Ciudadana
														</a>
													</li>
												</ul>
											</nav>
										</div>
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
											<i class="fas fa-bars"></i>
										</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

			<div role="main" class="main">
				@yield('contenido')
			</div>

			<footer id="footer">
				<div class="footer-copyright">
					<div class="container py-2">
						<div class="row py-4">
							<div class="col-lg-1 d-flex align-items-center justify-content-center justify-content-lg-start mb-2 mb-lg-0">
								<a href="{{ route('inicio') }}" class="logo pr-0 pr-lg-3">
									<img alt="Pepe Couttolenc" src="{{ asset('img/logo-dark.png') }}" class="opacity-5" height="33">
								</a>
							</div>
							<div class="col-lg-7 d-flex align-items-center justify-content-center justify-content-lg-start mb-4 mb-lg-0">
								<p>&copy; {{date('Y')}} Pepe Couttolenc | Todos los derechos reservados</p>
							</div>
							<div class="col-lg-4 d-flex align-items-center justify-content-center justify-content-lg-end">
								<ul class="social-icons">
									<li class="social-icons-twitter"><a href="https://twitter.com/pepecouttolenc" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
									<li class="social-icons-facebook"><a href="https://www.facebook.com/PepeCouttolenc/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
									<li class="social-icons-instagram"><a href="https://www.instagram.com/pepecouttolenc/" target="_blank" title="Instagram"><i class="fab fa-instagram"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</footer>
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
		<script src="{{ asset('porto/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery.gmap/jquery.gmap.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/jquery.lazyload/jquery.lazyload.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/isotope/jquery.isotope.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/vide/jquery.vide.min.js') }}"></script>
		<script src="{{ asset('porto/vendor/vivus/vivus.min.js') }}"></script>
		
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