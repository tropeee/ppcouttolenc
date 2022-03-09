@extends('layout.app')
@section('content')
    <section class="text-center space--even">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="typed-headline">
                        <span class="h2 inline-block">Pepe Couttolenc mi única alianza es</span>
                        <span class="h2 inline-block typed-text typed-text--cursor color--primary" data-typed-strings="contigo, con la ciudadanía, con mi estado, y mi país">target customers</span>
                    </div>
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="masonry">
                        <div class="masonry-filter-container text-center row justify-content-center align-items-center">
                            <span>Categoría:</span>
                            <div class="masonry-filter-holder masonry-filters--horizontal">
                                <div class="masonry__filters" data-filter-all-text="All Categories">
                                    <ul>
                                        <li class="active" data-masonry-filter="*">Todos</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="masonry__container row masonry--active" style="position: relative; height: 1404.33px;margin-left: 1px;"  >
                            @foreach($projects as $p)
                            <div class="masonry__item col-md-6 text-center filter-{{ $p->cate }}" data-masonry-filter="{{ $p->cate }}" style="position: absolute; left: 0px; top: 0px;">
                                <div class="project-thumb">
                                    <a href="{{ route('proyecto.item', $p->slug) }}">
                                        <img alt="Image" class="border--round" src="{{ Voyager::image($p->image) }}">
                                    </a>
                                    <h4>{{ $p->title }}</h4>
                                    <span>{{ $p->cate }}</span>
                                </div>
                            </div>
                            @endforeach
                            <!--end item-->

                        </div>
                    </div>
                    <!--end masonry-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection