<!doctype html>
<html lang="es">
<head>
    @include('partials.header')
    @yield('seotags')
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MN8M9ST"
                  height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
    <a id="start"></a>
    @include('partials.sidebar')
    <div class="main-container">
    @yield('content')
        @include('partials.footer')
    </div>
    @include('partials.scripts')
    @yield('myScripts')
</body>
</html>