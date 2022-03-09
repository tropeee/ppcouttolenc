<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Atención Ciudadana | Pepe Couttolenc</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('imagenes/favicon.ico') }}"/>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700italic,700,900,900italic" rel="stylesheet">

    <!-- STYLESHEETS -->
    <style type="text/css">
        [fuse-cloak],
        .fuse-cloak {
            display: none !important;
        }
    </style>

    <!-- Icons.css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/icons/fuse-icon-font/style.css') }}">
    <!-- Animate.css -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/node_modules/animate.css/animate.min.css') }}">
    <!-- PNotify -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/node_modules/pnotify/dist/PNotifyBrightTheme.css') }}">
    <!-- Nvd3 - D3 Charts -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/node_modules/nvd3/build/nv.d3.min.css') }}"/>
    <!-- Perfect Scrollbar -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/node_modules/perfect-scrollbar/css/perfect-scrollbar.css') }}"/>
    <!-- Fuse Html -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/fuse-html/fuse-html.min.css') }}"/>
    <!-- Main CSS -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
    <!-- / STYLESHEETS -->

    <!-- JAVASCRIPT -->
    <!-- jQuery -->
    <script type="text/javascript" src="{{ asset('assets/node_modules/jquery/dist/jquery.min.js') }}"></script>
    <!-- Mobile Detect -->
    <script type="text/javascript" src="{{ asset('assets/node_modules/mobile-detect/mobile-detect.min.js') }}"></script>
    <!-- Perfect Scrollbar -->
    <script type="text/javascript" src="{{ asset('assets/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js') }}"></script>
    <!-- Popper.js -->
    <script type="text/javascript" src="{{ asset('assets/node_modules/popper.js/dist/umd/popper.min.js') }}"></script>
    <!-- Bootstrap -->
    <script type="text/javascript" src="{{ asset('assets/node_modules/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <!-- Nvd3 - D3 Charts -->
    <script type="text/javascript" src="{{ asset('assets/node_modules/d3/d3.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/nvd3/build/nv.d3.min.js') }}"></script>
    <!-- Data tables -->
    <script type="text/javascript" src="{{ asset('assets/node_modules/datatables.net/js/jquery.dataTables.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/datatables-responsive/js/dataTables.responsive.js') }}"></script>
    <!-- PNotify -->
    <script type="text/javascript" src="{{ asset('assets/node_modules/pnotify/dist/iife/PNotify.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/pnotify/dist/iife/PNotifyStyleMaterial.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/pnotify/dist/iife/PNotifyButtons.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/pnotify/dist/iife/PNotifyCallbacks.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/pnotify/dist/iife/PNotifyMobile.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/pnotify/dist/iife/PNotifyHistory.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/pnotify/dist/iife/PNotifyDesktop.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/pnotify/dist/iife/PNotifyConfirm.js') }}"></script>
    <script type="text/javascript" src="{{ asset('assets/node_modules/pnotify/dist/iife/PNotifyReference.js') }}"></script>
    <!-- Fuse Html -->
    <script type="text/javascript" src="{{ asset('assets/fuse-html/fuse-html.min.js') }}"></script>
    <!-- Main JS -->
    <script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>
    <!-- / JAVASCRIPT -->
</head>
<body class="layout layout-vertical layout-left-navigation layout-below-toolbar layout-below-footer">
    <main>
        <div id="wrapper">
			@yield('menu')
            <div class="content-wrapper">
				@yield('toolbar')
                <div class="content custom-scrollbar">
                    @yield('content')
				</div>
				@yield('footer')
            </div>
            <div class="quick-panel-sidebar custom-scrollbar" fuse-cloak data-fuse-bar="quick-panel-sidebar" data-fuse-bar-position="right">
                @yield('right_bar')
            </div>
        </div>
    </main>
    @yield('scripts')
</body>
</html>