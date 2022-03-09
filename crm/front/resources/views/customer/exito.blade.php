@extends('layout.app_with_title')

@section('section_title')
Solicitud creada
@endsection

@section('app_content')
<div id="error-500" class="d-flex flex-column align-items-center justify-content-center">
    <?php $data = Session::get('data'); ?>
    <div class="content">
        @if (isset($data['id']))
        <div class="error-code display-1 text-center">TK-{{ str_pad($data['id'],6,'0',STR_PAD_LEFT) }}</div>
        @endif
        <div class="message h4 text-center text-muted">¡Hemos recibido su solicitud!</div>
        <div class="sub-message h6 mt-4 mb-12 text-center text-muted">
            Conserve el número de ticket para cualquier duda o aclaración.
        </div>

        <a class="report-link d-block text-center text-primary" href="{{route('home')}}">Volver al inicio</a>
    </div>
</div>
    
@endsection