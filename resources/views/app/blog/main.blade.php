{{--{{ dd($posts) }}--}}
@extends('layout.app')
@section('content')
    <section class="space--sm">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <div class="masonry masonry-blog-list">
                        <div class="masonry-filter-container text-center d-flex justify-content-center align-items-center">
                            <span>Categoría:</span>
                            <div class="masonry-filter-holder">
                                <div class="masonry__filters" data-filter-all-text="All Categories">
                                    <ul>
                                        {{--<li class="active" data-masonry-filter="*">All Categories</li>--}}

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="masonry__container masonry--active" style="position: relative; height: 3107.38px;">
                            @foreach($posts as $p)
                            <article class="masonry__item" data-masonry-filter="{{ $p->category->name }}" style="position: absolute; left: 0px; top: 0px;">
                                <div class="article__title text-center">
                                    <a href="#">
                                        <h2>{{ $p->title }}</h2>
                                    </a>
                                    @php
                                        $inicio1 = strftime("%d de %B del %Y", strtotime($p->created_at));
                                    @endphp
                                    <span>{{ $inicio1 }} en </span>
                                    <span>
                                        <a href="#">{{ $p->category->name }}</a>
                                    </span>
                                </div>
                                <!--end article title-->
                                <div class="article__body">
                                    <a href="#">
                                        <img alt="Image" src="{{ Voyager::image( $p->image ) }}">
                                    </a>
                                    <p>
                                        {{ $p->excerpt }}
                                    </p>
                                    <a href="{{ route('blog.item',$p->slug) }}">Continuar leyendo »</a>
                                </div>
                            </article>
                            @endforeach
                            <!--end item-->

                        </div>
                        <!--end of masonry container-->

                    <!--end masonry-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection