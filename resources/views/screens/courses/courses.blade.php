@extends('layouts.courses.main')
@section('title','Courses')
@section('content')
<main>
    <!-- courses list section start -->
    <section class="list">
        <div class="container">
            <ul class="list_tags courses-tags d-flex flex-wrap align-items-center justify-content-center">
                <li class="list-item" data-aos="fade-left">
                    <a data-target="all" class="list_tags-tag tag current" href="#">all</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="50">
                    <a data-target="programming" class="list_tags-tag tag" href="#">programming</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="100">
                    <a data-target="management" class="list_tags-tag tag" href="#">management</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="150">
                    <a data-target="art" class="list_tags-tag tag" href="#">art</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="200">
                    <a data-target="marketing" class="list_tags-tag tag" href="#">digital marketing</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="250">
                    <a data-target="gamedev" class="list_tags-tag tag" href="#">game development</a>
                </li>
                <li class="list-item" data-aos="fade-left" data-aos-delay="300">
                    <a data-target="smm" class="list_tags-tag tag" href="#">smm</a>
                </li>
            </ul>
            <ul class="list_courses d-md-flex flex-wrap">
                <li class="list_courses-card course-card col-12 col-md-6 col-xl-4" data-groups='["gamedev", "programming"]'>
                    <div class="course-card_wrapper">
                        <div class="top d-flex align-items-start">
                            <span class="top_icon top_icon--blue">
                                <i class="icon-code-solid icon"></i>
                            </span>
                            <div class="wrapper d-flex flex-column">
                                <h5 class="top_title">Software Engineering Fundamentals</h5>
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
                                <span class="top_author">by Adrian Dawson school</span>
                                <span class="top_details">48 lectures ( 280 Hours)</span>
                            </div>
                        </div>
                        <div class="pricing">
                            <span class="pricing_price h5">$120 all course / $20 per month</span>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                sign up for a course <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="list_courses-card course-card col-12 col-md-6 col-xl-4" data-groups='["programming"]'>
                    <div class="course-card_wrapper">
                        <div class="top d-flex align-items-start">
                            <span class="top_icon top_icon--orange">
                                <i class="icon-project-diagram-solid icon"></i>
                            </span>
                            <div class="wrapper d-flex flex-column">
                                <h5 class="top_title">Introduction to Java as a Second Language</h5>
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
                                <span class="top_author">by Adrian Dawson school</span>
                                <span class="top_details">48 lectures ( 280 Hours)</span>
                            </div>
                        </div>
                        <div class="pricing">
                            <span class="pricing_price h5">$120 all course / $20 per month</span>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                sign up for a course <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="list_courses-card course-card col-12 col-md-6 col-xl-4" data-groups='["art", "programming"]'>
                    <div class="course-card_wrapper">
                        <div class="top d-flex align-items-start">
                            <span class="top_icon top_icon--sky">
                                <i class="icon-window-restore-solid icon"></i>
                            </span>
                            <div class="wrapper d-flex flex-column">
                                <h5 class="top_title">Object Oriented Programming in Java. First step</h5>
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
                                <span class="top_author">by Adrian Dawson school</span>
                                <span class="top_details">48 lectures ( 280 Hours)</span>
                            </div>
                        </div>
                        <div class="pricing">
                            <span class="pricing_price h5">$120 all course / $20 per month</span>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                sign up for a course <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="list_courses-card course-card col-12 col-md-6 col-xl-4" data-groups='["art", "gamedev", "marketing"]'>
                    <div class="course-card_wrapper">
                        <div class="top d-flex align-items-start">
                            <span class="top_icon top_icon--pink">
                                <i class="icon-laptop-code-solid icon"></i>
                            </span>
                            <div class="wrapper d-flex flex-column">
                                <h5 class="top_title">HTML, CSS, and Javascript for Web Developers</h5>
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
                                <span class="top_author">by Adrian Dawson school</span>
                                <span class="top_details">48 lectures ( 280 Hours)</span>
                            </div>
                        </div>
                        <div class="pricing">
                            <span class="pricing_price h5">$120 all course / $20 per month</span>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                sign up for a course <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="list_courses-card course-card col-12 col-md-6 col-xl-4" data-groups='["art", "gamedev", "marketing"]'>
                    <div class="course-card_wrapper">
                        <div class="top d-flex align-items-start">
                            <span class="top_icon top_icon--blue">
                                <i class="icon-chart-line-solid icon"></i>
                            </span>
                            <div class="wrapper d-flex flex-column">
                                <h5 class="top_title">Software Testing and Automation Course for Professionals</h5>
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
                                <span class="top_author">by Adrian Dawson school</span>
                                <span class="top_details">48 lectures ( 280 Hours)</span>
                            </div>
                        </div>
                        <div class="pricing">
                            <span class="pricing_price h5">$120 all course / $20 per month</span>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                sign up for a course <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="list_courses-card course-card col-12 col-md-6 col-xl-4" data-groups='["programming", "management"]'>
                    <div class="course-card_wrapper">
                        <div class="top d-flex align-items-start">
                            <span class="top_icon top_icon--orange">
                                <i class="icon-code-branch-solid icon"></i>
                            </span>
                            <div class="wrapper d-flex flex-column">
                                <h5 class="top_title">Introduction to Programming with Python</h5>
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
                                <span class="top_author">by Adrian Dawson school</span>
                                <span class="top_details">48 lectures ( 280 Hours)</span>
                            </div>
                        </div>
                        <div class="pricing">
                            <span class="pricing_price h5">$120 all course / $20 per month</span>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                sign up for a course <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="list_courses-card course-card col-12 col-md-6 col-xl-4" data-groups='["art", "management", "smm"]'>
                    <div class="course-card_wrapper">
                        <div class="top d-flex align-items-start">
                            <span class="top_icon top_icon--blue">
                                <i class="icon-gem-solid icon"></i>
                            </span>
                            <div class="wrapper d-flex flex-column">
                                <h5 class="top_title">Advanced Statistics for Data Science and Programming</h5>
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
                                <span class="top_author">by Adrian Dawson school</span>
                                <span class="top_details">48 lectures ( 280 Hours)</span>
                            </div>
                        </div>
                        <div class="pricing">
                            <span class="pricing_price h5">$120 all course / $20 per month</span>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                sign up for a course <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="list_courses-card course-card col-12 col-md-6 col-xl-4" data-groups='["marketing", "management", "smm"]'>
                    <div class="course-card_wrapper">
                        <div class="top d-flex align-items-start">
                            <span class="top_icon top_icon--pink">
                                <i class="icon-coins-solid icon"></i>
                            </span>
                            <div class="wrapper d-flex flex-column">
                                <h5 class="top_title">Fundamental blockchain technology</h5>
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
                                <span class="top_author">by Adrian Dawson school</span>
                                <span class="top_details">48 lectures ( 280 Hours)</span>
                            </div>
                        </div>
                        <div class="pricing">
                            <span class="pricing_price h5">$120 all course / $20 per month</span>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                sign up for a course <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
                <li class="list_courses-card course-card col-12 col-md-6 col-xl-4" data-groups='["marketing", "management", "smm"]'>
                    <div class="course-card_wrapper">
                        <div class="top d-flex align-items-start">
                            <span class="top_icon top_icon--sky">
                                <i class="icon-code-branch-solid icon"></i>
                            </span>
                            <div class="wrapper d-flex flex-column">
                                <h5 class="top_title">Responsive Website : Code with HTML, CSS, JS</h5>
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
                                <span class="top_author">by Adrian Dawson school</span>
                                <span class="top_details">48 lectures ( 280 Hours)</span>
                            </div>
                        </div>
                        <div class="pricing">
                            <span class="pricing_price h5">$120 all course / $20 per month</span>
                        </div>
                        <div class="bottom">
                            <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                sign up for a course <i class="icon-arrow-right-solid icon"></i>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- courses list section end -->
    <!-- sale section start -->
    <section class="sale">
        <div class="sale_deco">
            <picture>
                <source data-srcset="img/placeholder.jpg" srcset="img/placeholder.jpg" />
                <img class="lazy" data-src="img/placeholder.jpg" src="img/placeholder.jpg" alt="media" />
            </picture>
        </div>
        <div class="container">
            <div class="sale_content">
                <div class="content d-flex flex-column flex-sm-row align-items-center align-items-sm-start">
                    <span class="content_percent">50%</span>
                    <div class="content_text d-flex flex-column align-items-center align-items-sm-start">
                        <h3 class="title"><span class="percent">50%</span> Season sale</h3>
                        <p class="text">Unlimited access to educational materials and lectures</p>
                    </div>
                </div>
                <form class="form d-flex flex-column flex-sm-row" action="#" method="post" data-type="subscription">
                    <input class="field required" type="text" placeholder="Subscribe by e-mail" />
                    <button class="btn btn--gradient" type="submit">
                        <span class="text">Get Started Now</span>
                    </button>
                </form>
            </div>
        </div>
    </section>
    <!-- sale section end -->
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
</main>
    
@endsection

@section('css-custom')
<link rel="stylesheet preload" as="style" href="{{asset('course/css/preload.min.css')}}" />
<link rel="stylesheet preload" as="style" href="{{asset('course/css/libs.min.css')}}" />
<link rel="stylesheet" href="{{asset('course/css/courses.min.css')}}" />
@endsection
@section('js-custom')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="{{asset('course/js/common.min.js')}}"></script>
<script src="{{asset('course/js/reviews.min.js')}}"></script>
<script src="{{asset('course/js/courses.min.js')}}"></script>
@endsection