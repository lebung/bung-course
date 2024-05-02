@extends('layouts.courses.main')
@section('title','About')
@section('content')
<main>
    <!-- features section start -->
    <div class="features">
        <div class="container">
            <ul class="features_list d-md-flex flex-wrap">
                <li class="features_list-item col-md-6 col-xl-4" data-order="1" data-aos="fade-up">
                    <div class="card">
                        <div class="content">
                            <div class="card_media">
                                <i class="icon-user-graduate-solid icon"></i>
                            </div>
                            <div class="card_main">
                                <h5 class="card_main-title">Get a certificate</h5>
                                <p class="card_main-text">
                                    Sed a eros sodales diam sagittis faucibus. Cras id erat nisl. Fusce faucibus nulla sed finibus.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="features_list-item col-md-6 col-xl-4" data-order="2" data-aos="fade-up">
                    <div class="card">
                        <div class="content">
                            <div class="card_media">
                                <i class="icon-globe-solid icon"></i>
                            </div>
                            <div class="card_main">
                                <h5 class="card_main-title">All over the globe</h5>
                                <p class="card_main-text">
                                    Donec urna massa, cursus venenatis ipsum et, tempus rhoncus tortor. Mauris nunc nisl, pharetra
                                    eu.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="features_list-item col-md-6 col-xl-4" data-order="3" data-aos="fade-up">
                    <div class="card">
                        <div class="content">
                            <div class="card_media">
                                <i class="icon-headset-solid icon"></i>
                            </div>
                            <div class="card_main">
                                <h5 class="card_main-title">Live online lectures</h5>
                                <p class="card_main-text">
                                    Sed a eros sodales diam sagittis faucibus. Cras id erat nisl. Fusce faucibus nulla sed finibus.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="features_list-item col-md-6 col-xl-4" data-order="4" data-aos="fade-up">
                    <div class="card">
                        <div class="content">
                            <div class="card_media">
                                <i class="icon-book-solid icon"></i>
                            </div>
                            <div class="card_main">
                                <h5 class="card_main-title">Educational materials</h5>
                                <p class="card_main-text">
                                    Vivamus odio tellus, tincidunt rutrum ligula ut, ornare gravida urna. Nullam vel dolor eu erat.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="features_list-item col-md-6 col-xl-4" data-order="5" data-aos="fade-up">
                    <div class="card">
                        <div class="content">
                            <div class="card_media">
                                <i class="icon-gem-solid icon"></i>
                            </div>
                            <div class="card_main">
                                <h5 class="card_main-title">Professional teachers</h5>
                                <p class="card_main-text">
                                    Sed a eros sodales diam sagittis faucibus. Cras id erat nisl. Fusce faucibus nulla sed finibus.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="features_list-item col-md-6 col-xl-4" data-order="6" data-aos="fade-up">
                    <div class="card">
                        <div class="content">
                            <div class="card_media">
                                <i class="icon-universal-access-solid icon"></i>
                            </div>
                            <div class="card_main">
                                <h5 class="card_main-title">Accessibility programs</h5>
                                <p class="card_main-text">
                                    Morbi sit amet tortor vel nibh fringilla lobortis vel vel felis. Praesent turpis enim, fringilla
                                    vitae ligula vitae.
                                </p>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- features section end -->
    <!-- info blocks section start -->
    <section class="infoblock d-flex flex-column flex-lg-row flex-md-wrap">
        <div class="infoblock_block col-lg-6 d-flex flex-column justify-content-center align-items-center" data-order="1">
            <div class="content">
                <h2 class="infoblock_block-header h1">Education – Your Door To The Future</h2>
                <p class="infoblock_block-text">
                    The best educational programs and opportunities for fast and effective learning. New professions, new
                    opportunities and ways of working. You can learn more
                </p>
            </div>
        </div>
        <div class="infoblock_block col-lg-6" data-order="2">
            <div class="cover">
                <div class="cover_media">
                    <picture>
                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                        <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                    </picture>
                </div>
                <a class="cover_play" href="#">
                    <lottie-player
                        src="lottie/play.json"
                        background="transparent"
                        speed=".5"
                        style="width: 100%; height: 100%"
                        loop
                        autoplay
                    ></lottie-player>
                </a>
                <span class="cover_duration">20:00</span>
            </div>
            <iframe
                src="https://www.youtube.com/embed/XHOmBV4js_E?controls=0"
                title="YouTube video player"
                allowfullscreen
            ></iframe>
        </div>
        <div class="infoblock_block col-lg-6" data-order="3">
            <div class="parallax">
                <div class="img">
                    <picture>
                        <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                        <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                    </picture>
                </div>
            </div>
        </div>
        <div
            class="infoblock_block col-lg-6 infoblock_block--sale d-flex flex-column justify-content-center align-items-center"
            data-order="4"
        >
            <div class="content d-flex flex-column flex-sm-row align-items-center align-items-sm-start">
                <span class="content_percent">50%</span>
                <div class="content_text d-flex flex-column align-items-center align-items-xl-start">
                    <h3 class="title"><span class="percent">50%</span> Season sale</h3>
                    <p class="text">Unlimited access to educational materials<span class="text_cut">and lectures</span></p>
                </div>
            </div>
            <form class="form d-flex flex-column flex-sm-row" action="#" method="post" data-type="subscription">
                <input class="field required" type="text" data-type="email" placeholder="Subscribe by e-mail" />
                <button class="btn btn--gradient" type="submit">
                    <span class="text">Get Started Now</span>
                </button>
            </form>
        </div>
    </section>
    <!-- info blocks section end -->
    <!-- reviews section start -->
    <section class="reviews" id="reviews">
        <div class="container">
            <h2 class="reviews_header">What our students say</h2>

            <div class="reviews_slider">
                <div class="swiper-wrapper">
                    <div class="reviews_slider-slide swiper-slide">
                        <q class="quote">
                            “Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et placerat. Aenean ut aliquam erat.
                            Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus euismod sapien non ornare sagittis.
                            Donec molestie eros dolor. Curabitur laoreet neque at magna pulvinar cursus. Nulla euismod orci in
                            varius mollis”
                        </q>
                        <div class="author d-flex flex-column align-items-center">
                            <span class="avatar">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </span>
                            <span class="name h5"> Milagros Bueno </span>
                            <ul class="rating d-flex align-items-center">
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="reviews_slider-slide swiper-slide">
                        <q class="quote">
                            “Donec molestie eros dolor. Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et placerat.
                            Aenean ut aliquam erat. Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus euismod
                            sapien non ornare sagittis. Curabitur laoreet neque at magna pulvinar cursus. Nulla euismod orci in
                            varius mollis”
                        </q>
                        <div class="author d-flex flex-column align-items-center">
                            <span class="avatar">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </span>
                            <span class="name h5"> Lisa Smith </span>
                            <ul class="rating d-flex align-items-center">
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="reviews_slider-slide swiper-slide">
                        <q class="quote">
                            “Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et placerat. Aenean ut aliquam erat.
                            Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus euismod sapien non ornare sagittis.
                            Donec molestie eros dolor. Curabitur laoreet neque at magna pulvinar cursus. Nulla euismod orci in
                            varius mollis”
                        </q>
                        <div class="author d-flex flex-column align-items-center">
                            <span class="avatar">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </span>
                            <span class="name h5"> Alice Miller </span>
                            <ul class="rating d-flex align-items-center">
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="reviews_slider-slide swiper-slide">
                        <q class="quote">
                            “Curabitur laoreet neque at magna pulvinar cursus. Nulla sed suscipit lectus. Phasellus rhoncus
                            vulputate odio et placerat. Aenean ut aliquam erat. Integer rutrum eleifend ante, a bibendum leo
                            tristique id. Phasellus euismod sapien non ornare sagittis. Donec molestie eros dolor. Nulla euismod
                            orci in varius mollis”
                        </q>
                        <div class="author d-flex flex-column align-items-center">
                            <span class="avatar">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </span>
                            <span class="name h5"> Amanda Rendall </span>
                            <ul class="rating d-flex align-items-center">
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="reviews_slider-slide swiper-slide">
                        <q class="quote">
                            “Nulla sed suscipit lectus. Phasellus rhoncus vulputate odio et placerat. Aenean ut aliquam erat.
                            Integer rutrum eleifend ante, a bibendum leo tristique id. Phasellus euismod sapien non ornare sagittis.
                            Donec molestie eros dolor. Curabitur laoreet neque at magna pulvinar cursus. Nulla euismod orci in
                            varius mollis”
                        </q>
                        <div class="author d-flex flex-column align-items-center">
                            <span class="avatar">
                                <picture>
                                    <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                                    <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
                                </picture>
                            </span>
                            <span class="name h5"> Luke Grimes </span>
                            <ul class="rating d-flex align-items-center">
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                                <li class="rating_star">
                                    <i class="icon-star icon"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="reviews_slider-controls d-flex align-items-center justify-content-between">
                    <a class="swiper-button-prev" href="#">
                        <i class="icon-angle-left icon"></i>
                    </a>
                    <a class="swiper-button-next" href="#">
                        <i class="icon-angle-right icon"></i>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- reviews section end -->
    <!-- faq section start -->
    <section class="faq">
        <div class="phone">
            <lottie-player
                src="lottie/phone.json"
                background="transparent"
                speed="1"
                style="width: 100%; height: 100%"
                loop
                autoplay
            ></lottie-player>
        </div>
        <div class="sphere">
            <lottie-player
                src="lottie/sphere.json"
                background="transparent"
                speed="1.5"
                style="width: 100%; height: 100%"
                loop
                autoplay
            ></lottie-player>
        </div>
        <div class="container d-flex flex-column align-items-center">
            <div class="faq_header">
                <h2 class="faq_header-title" data-aos="fade-down">Answering your common questions</h2>
                <p class="faq_header-text" data-aos="fade-up">
                    Sed a eros sodales diam sagittis faucibus. Cras id erat nisl. Fusce faucibus nulla sed finibus egestas.
                    Vestibulum purus magna, auctor consectetur sem nec, consectetur porta purus.
                </p>
            </div>
            <div class="faq_accordion" id="faq_accordion">
                <!-- item 1 -->
                <div class="faq_accordion-item">
                    <div class="item-wrapper">
                        <h4
                            class="faq_accordion-item_header d-flex justify-content-between align-items-center collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#item-1"
                            aria-expanded="true"
                        >
                            <span class="text"> What ante quis tincidunt porta, neque metus dapibus velit? </span>
                            <span class="icon transform"></span>
                        </h4>
                        <div id="item-1" class="accordion-collapse collapse show">
                            <div class="faq_accordion-item_body">
                                Nam quis facilisis magna, sit amet posuere tellus. Donec imperdiet tortor vitae pharetra congue.
                                Aliquam nunc est, iaculis in erat lobortis, convallis varius mi. Orci varius natoque penatibus et
                                magnis dis parturient montes, nascetur ridiculus mus. Aliquam vel suscipit nisi, et imperdiet nulla.
                                Praesent condimentum metus aliquet venenatis feugiat. Nunc at iaculis nisl. Donec ultrices placerat
                                euismod
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item 2 -->
                <div class="faq_accordion-item">
                    <div class="item-wrapper">
                        <h4
                            class="faq_accordion-item_header d-flex justify-content-between align-items-center collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#item-2"
                            aria-expanded="false"
                        >
                            <span class="text"> What ante quis tincidunt porta, neque metus dapibus velit? </span>
                            <span class="icon"></span>
                        </h4>
                        <div id="item-2" class="accordion-collapse collapse">
                            <div class="faq_accordion-item_body">
                                Nam quis facilisis magna, sit amet posuere tellus. Donec imperdiet tortor vitae pharetra congue.
                                Aliquam nunc est, iaculis in erat lobortis, convallis varius mi. Orci varius natoque penatibus et
                                magnis dis parturient montes, nascetur ridiculus mus. Aliquam vel suscipit nisi, et imperdiet nulla.
                                Praesent condimentum metus aliquet venenatis feugiat. Nunc at iaculis nisl. Donec ultrices placerat
                                euismod
                            </div>
                        </div>
                    </div>
                </div>
                <!-- item 3 -->
                <div class="faq_accordion-item">
                    <div class="item-wrapper">
                        <h4
                            class="faq_accordion-item_header d-flex justify-content-between align-items-center collapsed"
                            data-bs-toggle="collapse"
                            data-bs-target="#item-3"
                            aria-expanded="false"
                        >
                            <span class="text"> What ante quis tincidunt porta, neque metus dapibus velit? </span>
                            <span class="icon"></span>
                        </h4>
                        <div id="item-3" class="accordion-collapse collapse">
                            <div class="faq_accordion-item_body">
                                Nam quis facilisis magna, sit amet posuere tellus. Donec imperdiet tortor vitae pharetra congue.
                                Aliquam nunc est, iaculis in erat lobortis, convallis varius mi. Orci varius natoque penatibus et
                                magnis dis parturient montes, nascetur ridiculus mus. Aliquam vel suscipit nisi, et imperdiet nulla.
                                Praesent condimentum metus aliquet venenatis feugiat. Nunc at iaculis nisl. Donec ultrices placerat
                                euismod
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <a class="faq_btn btn--arrow" href="faq.html">View all<i class="icon-arrow-right-solid icon"></i></a>
        </div>
    </section>

    <!-- faq section end -->
</main>
@endsection
@section('css-custom')

<link rel="stylesheet" href="{{asset('course/css/about.min.css')}}" />
@endsection
@section('js-custom')
<script src="{{asset('course/js/common.min.js')}}"></script>
<script src="{{asset('course/js/reviews.min.js')}}"></script>
@endsection