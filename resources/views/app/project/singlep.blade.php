@extends('layout.app')
@section('content')
    <section class="unpad">
        <article>
            <div class="imagebg text-center height-60" data-overlay="5">
                <div class="background-image-holder" style="background: url(&quot;img/blog-4.jpg&quot;); opacity: 1;">
                    <img alt="background" src="{{ Voyager::image($project->image) }}">
                </div>
                <div class="container pos-vertical-center">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="article__title">
                                <h1>{{ $project->title }}</h1>
                                @php
                                    $inicio = strftime("%d de %B del %Y", strtotime($project->created_at));
                                @endphp
                                <span>{{ $inicio  }} </span>
                                <span>
                                    <a href="#">{{$project->cate}}</a>
                                </span>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
                <div class="pos-absolute pos-bottom col-12 text-center">
                    <div class="article__author">
                        <img alt="Image" src="{{ asset('img/favicon.ico') }}">
                        <h6 class="type--uppercase">Pepe Couttolenc</h6>
                    </div>
                </div>
            </div>
            <div>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8">
                            <div class="article__body">
                                <p>
                                    Co-working SpaceTeam fund big data prototype prototype long shadow latte big data. Innovate affordances personas user centered design paradigm user centered design innovate quantitative vs. qualitative pivot thought leader viral paradigm cortado affordances.
                                </p>
                                <h5>An additional point</h5>
                                <p>
                                    Co-working paradigm piverate innovate affordances user centered design personas pair programming Steve Jobs iterate earned media. Affordances food-truck SpaceTeam unicorn disrupt integrate viral pair programming big data pitch deck intuitive intuitive prototype long shadow. Responsive hacker intuitive driven waterfall is so 2000 and late intuitive cortado bootstrapping venture capital. Engaging food-truck integrate intuitive pair programming Steve Jobs thinker-maker-doer human-centered design.
                                </p>
                                <blockquote>
                                    “ We want everyone to have a great experience building their website — and with Stack they get just that”
                                </blockquote>
                                <p>
                                    Prototype intuitive intuitive thought leader personas parallax paradigm long shadow engaging unicorn SpaceTeam fund ideate paradigm. Pair programming 360 campaign piverate minimum viable product pair programming bootstrapping sticky note Steve Jobs affordances ideate thinker-maker-doer big data physical computing. Workflow driven innovate long shadow SpaceTeam grok pivot.
                                </p>
                                <ul class="bullets">
                                    <li>Something to say</li>
                                    <li>Listing things in a list</li>
                                    <li>Pay close attention to number 4</li>
                                    <li>What happens next will shock you</li>
                                </ul>
                            </div>
                            <div class="article__share text-center">
                                <a class="btn bg--facebook btn--icon" href="#">
                                            <span class="btn__text">
                                                <i class="socicon socicon-facebook"></i>
                                                Share on Facebook
                                            </span>
                                </a>
                                <a class="btn bg--twitter btn--icon" href="#">
                                            <span class="btn__text">
                                                <i class="socicon socicon-twitter"></i>
                                                Share on Twitter
                                            </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--end of row-->
                </div>
                <!--end of container-->
            </div>
        </article>
    </section>
@endsection