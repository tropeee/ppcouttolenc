@extends('layout.app')
@section('seotags')
    @include('meta::manager', [
           'title'         => 'Pepe Couttolenc',
           'keywords'      => 'Pepe Couttolenc, Verde, Ecologista',
           'description'   => 'Joven, activista y luchador social. Me encanta el ciclismo, la lectura y pensar diferente. Actualmente soy Legislador en el Estado de México y Secretario General del Partido Verde Estado de México.',
           'image'         =>  Request::url().'/img/B2.png',
       ])
    @endsection
@section('content')
    <section class="cover height-150 imagebg text-center" data-overlay="2" id="home">
            <div class="background-image-holder">
				{{--<img alt="background" src="{{ asset('img/B2.png') }}" />--}}
				<img alt="background" src="{{asset('img/decalogo-banner.jpg')}}" />
            </div>
            <div class="container pos-vertical-center">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="h1--large type--uppercase">
                            <em>
                                <strong>Pepe Couttolenc</strong>
                            </em>
                        </h1>
						{{--<p class="lead">Escuchar para legislar.</p>--}}
						<p class="lead"><a href="{{route('decalogo')}}">Decálogo COVID-19</a></p>
                    </div>
                </div>
            </div>
        </section>
        <section class="text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <h1 class="type--upprcase">
                            <em>
                                <b>"El desarrollo se mide de acuerdo con el nivel de libertad del cual gozan los individuos en una sociedad. Aspirar a tener más libertad es una tarea de todos"</b>
                                    {{--<br class="hidden-sm hidden-xs" /> Tired Excuses.--}}
                            </em>
                        </h1>
                        <p class="lead">
                            {{--We're about holistic and enduring fitness &mdash; Improving health and wellbeing not through worn out slogans, but considered physical and dietary training. Our goal is your betterment, what's yours?--}}
                        </p>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="cover height-150 imagebg">
            <div class="background-image-holder">
				{{--<img alt="background" src="{{ asset('img/B1.png') }}"/>--}}
				<img alt="background" src="{{ asset('img/B2.png') }}" />
            </div>
        </section>
        <section class="text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-6">
                        <h1 class="type--uppercase">
                            <em>
                                <strong>Blog
                                    {{--<br class="hidden-sm hidden-xs" /></strong>--}}
                            </em>
                        </h1>
                        <p class="lead">
                            Un espacio de opinión y libre discusión de las ideas.
                        </p>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section>
            <div class="container">
                <div class="row justify-content-center">
                    @php
                        $cont = 1;
                        $limite = 4;
                    @endphp
                    @foreach($posts as $p)
                    <div class="col-md-6 col-lg-5">
                        <div class="feature feature-1">
                            <img src="{{ Voyager::image( $p->image) }}" class="pimg"/>
                            <div class="feature__body boxed boxed--lg boxed--border">
                                <h3 class="type--uppercase">
                                    <em>
                                        <strong>{{ $p->title }}</strong>
                                    </em>
                                </h3>
                                <p class="lead" style="font-size: 1.2em;">
                                    {{ $p->excerpt }}
                                </p>
                                <a href="/blog/{{ $p->slug }}" style="font-size: 16px;" id="4kbut">
                                    Leer más
                                </a>
                            </div>
                        </div>
                        <!--end feature-->
                    </div>
                    @php
                        if($cont++ >= $limite){
                            break;
                        }
                    @endphp
                    @endforeach
                    <div class="col-12">
                        <p class="text-center">
                            <a class="btn btn--primary type--uppercase" href="{{ route('blog') }}">
                                <span class="btn__text">
                                    Ver todos
                                </span>
                            </a>
                        </p>
                    </div>

                    {{--<div class="col-md-6 col-lg-5">--}}
                        {{--<div class="feature feature-1">--}}
                            {{--<img alt="Image" src="img/fitness-4.jpg" />--}}
                            {{--<div class="feature__body boxed boxed--lg boxed--border">--}}
                                {{--<h3 class="type--uppercase">--}}
                                    {{--<em>--}}
                                        {{--<strong>Agility</strong>--}}
                                    {{--</em>--}}
                                {{--</h3>--}}
                                {{--<p class="lead">--}}
                                    {{--Our team of trained atheletes know what it takes to achieve enduring fitness outcomes for folks of all shapes and sizes.--}}
                                {{--</p>--}}
                                {{--<a href="#">--}}
                                    {{--Learn More--}}
                                {{--</a>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--end feature-->--}}
                    {{--</div>--}}
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="text-center imagebg bgs" data-gradient-bg="#4876BD,#5448BD,#8F48BD,#BD48B1">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-6">
                        <div class="cta">
                            <h2 class="h1 type--uppercase">
                                <em>
                                    <strong>INICIATIVAS Y PROYECTOS EMPRENDIDOS:
                                        </strong>
                                </em>
                            </h2>

                            <a class="btn btn--primary type--uppercase" href="/proyectos">
                                    <span class="btn__text">
                                        Ver más
                                    </span>
                            </a>
                        </div>
                    </div>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>
        <section class="cover height-150 imagebg vbg">
            <div class="background-image-holder">
                <img alt="background" src="{{ asset('img/soy-verde.jpg') }}" />
                {{--<img alt="background" src="{{ asset('img/port1.jpg') }}" />--}}
            </div>
        </section>
        <section class="text-center">
            <div class="container">
                <div class="row justify-content-center">
                    <h2 class="type--uppercase">
                        <em>
                            <strong>Subscríbete para más actualizaciones</strong>
                        </em>
                    </h2>
                    <form class="row justify-content-center" action="//mrare.us8.list-manage.com/subscribe/post?u=77142ece814d3cff52058a51f&amp;id=f300c9cce8" data-success="Thanks for signing up.  Please check your inbox for a confirmation email." data-error="Por favor proporcione su dirección de correo electrónico y acepte los términos y condiciones.">
                        <div class="col-lg-6 col-md-8">
                            <input class="validate-required validate-email" type="text" name="EMAIL" placeholder="Ingresa tu email para el boletín mensual" />
                        </div>
                        <div class="col-lg-3 col-md-4">
                            <button type="submit" class="btn btn--primary">Suscribirme ahora</button>
                        </div>
                        <div class="col-md-12 text-center">
                            <input class="validate-required" type="checkbox" name="group[13737][1]" />
                            <span>He leído y estoy de acuerdo con
                                    <a href="#">términos y condiciones</a>
                                </span>
                        </div>
                        <div style="position: absolute; left: -5000px;" aria-hidden="true">
                            <input type="text" name="b_77142ece814d3cff52058a51f_f300c9cce8" tabindex="-1" value="">
                        </div>
                    </form>
                </div>
                <!--end of row-->
            </div>
            <!--end of container-->
        </section>

@endsection
