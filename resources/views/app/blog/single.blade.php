@extends('layout.app')
@section('seotags')
    @include('meta::manager', [
           'title'         => $post->seo_title,
           'description'   => $post->meta_description,
           'image'         => Voyager::image($post->image),
       ])
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-8">
                    <article>
                        <div class="article__title text-center">
                            <h1 class="h2">{{ $post->title }}</h1>
                            @php
                                $inicio = strftime("%d de %B del %Y", strtotime($post->created_at));
                            @endphp
                            <span>{{ ucfirst($inicio) }} en </span>
                            <span>
                                <a href="#">{{ $post->category->name }}</a>
                            </span>
                        </div>
                        <!--end article title-->
                        <div class="article__body">
                            <img  src="{{ Voyager::image( $post->image ) }}">
                            <p>
                                {!! $post->body !!}
                            </p>
                        </div>
                        <div class="article__share text-center">
                            <div id="disqus_thread"></div>
                            <script>

                                /**
                                 *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                                 *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/

                                var disqus_config = function () {
                                this.page.url = '{{ Request::url() }}';  // Replace PAGE_URL with your page's canonical URL variable
                                this.page.identifier = '{{ $post->id }}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                                };

                                (function() { // DON'T EDIT BELOW THIS LINE
                                    var d = document, s = d.createElement('script');
                                    s.src = 'https://pepecouttolenc-org.disqus.com/embed.js';
                                    s.setAttribute('data-timestamp', +new Date());
                                    (d.head || d.body).appendChild(s);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                        </div>
                    </article>
                    <!--end item-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection