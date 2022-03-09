@extends('layout.app')
@section('content')
    <section class="switchable ">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-md-5">
                    <img alt="Image" class="border--round box-shadow-wide" src="{{ asset('img/pdog.jpg') }}">
                </div>
                <div class="col-md-6" style="margin-left: 20px;">
                    <div class="row mx-0 switchable__text flex-column">
                        <p class="lead">

                            <a href="#">pepecouttolenc@partidoverdeedomex.org</a>
                            {{--<br> P: +613 4827 2294--}}
                        </p>
                        <p class="lead">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid animi asperiores debitis distinctio dolorum ea, earum eius eum illo incidunt non ratione saepe sint ut vero? Eligendi labore libero ut.
                        </p>
                        <hr class="short">
                        <form class="form-email row" data-success="Thanks for your enquiry, we'll be in touch shortly." data-error="Please fill in all fields correctly." data-recaptcha-sitekey="6LewhCIUAAAAACSwFvBDhgtTbw6EnW6e9dip8o2u" data-recaptcha-theme="light" novalidate="true">
                            <div class="col-md-6">
                                <label>Nombre completo:</label>
                                <input type="text" name="name" class="validate-required">
                            </div>
                            <div class="col-md-6">
                                <label>Correo electrónico:</label>
                                <input type="email" name="email" class="validate-required validate-email">
                            </div>
                            <div class="col-md-12">
                                <label>Mensaje:</label>
                                <textarea rows="4" name="Message" class="validate-required"></textarea>
                            </div>
                            <div class="col-12"><div class="recaptcha"><div style="width: 304px; height: 78px;"><div><iframe src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LewhCIUAAAAACSwFvBDhgtTbw6EnW6e9dip8o2u&amp;co=aHR0cDovL3RyeXN0YWNrLm1lZGl1bXJhLnJlOjgw&amp;hl=es&amp;v=v1549298964057&amp;theme=light&amp;size=normal&amp;cb=57shm0jae8a6" width="304" height="78" role="presentation" name="a-l9j4i4nrsefr" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div></div></div><div class="col-md-5 col-lg-4">
                                <button type="submit" class="btn btn--primary type--uppercase">Contactar</button>
                            </div>
                        </form>
                    </div>
                    <!--end of row-->
                </div>
            </div>
            <!--end of row-->
        </div>
        <!--end of container-->
    </section>
@endsection