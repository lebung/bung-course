@extends('layouts.courses.main')
@section('title', 'Trang Chủ')
@section('content')
    <main>
        <!-- hero section start -->
        <div class="underlay"></div>
        <section class="hero">
            <div class="container d-lg-flex align-items-center">
                <div class="hero_content">
                    <h1 class="hero_content-header" data-aos="fade-up">Large educational programs</h1>
                    <div class="hero_content-rating d-flex flex-column flex-sm-row align-items-center">
                        <p class="text" data-aos="fade-left">Our course is rated excellent by over 42,000 people</p>
                        <div class="wrapper" data-aos="fade-left" data-aos-delay="50">
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
                    <p class="hero_content-text" data-aos="fade-up" data-aos-delay="50">
                        Today, more than 48,000 people have already studied at our university in various fields:
                        programming,
                        photography, marketing and management
                    </p>
                    <div class="hero_content-action d-flex flex-wrap">
                        <a class="btn btn--gradient" href="#" data-aos="fade-left">
                            <span class="text">Try for Free</span>
                        </a>
                        <a class="btn btn--highlight" href="pricing.html" data-aos="fade-left" data-aos-delay="50">
                            <span class="text">See Pricing Plans</span>
                        </a>
                    </div>
                </div>
                <div class="hero_media col-lg-6">
                    <lottie-player src="{{ asset('course/lottie/hero.json') }}" background="transparent" speed="1"
                        style="width: 100%; height: 100%" loop autoplay></lottie-player>
                </div>
            </div>
        </section>
        <!-- hero section end -->
        <!-- features section start -->
        <div class="features">
            <div class="container">
                <ul class="features_list d-md-flex flex-wrap">
                    <li class="features_list-item col-md-4" data-order="1" data-aos="fade-up">
                        <div class="card">
                            <div class="content">
                                <div class="card_media">
                                    <i class="icon-user-graduate-solid icon"></i>
                                </div>
                                <div class="card_main">
                                    <h5 class="card_main-title">Get a certificate</h5>
                                    <p class="card_main-text">
                                        Sed a eros sodales diam sagittis faucibus. Cras id erat nisl. Lorem tempus rhoncus
                                        sit tortor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="features_list-item col-md-4" data-order="2" data-aos="fade-up">
                        <div class="card">
                            <div class="content">
                                <div class="card_media">
                                    <i class="icon-globe-solid icon"></i>
                                </div>
                                <div class="card_main">
                                    <h5 class="card_main-title">All over the globe</h5>
                                    <p class="card_main-text">
                                        Donec urna massa, cursus venenatis ipsum et, tempus rhoncus tortor. Lorem ipsum
                                        dolor.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="features_list-item col-md-4" data-order="3" data-aos="fade-up">
                        <div class="card">
                            <div class="content">
                                <div class="card_media">
                                    <i class="icon-headset-solid icon"></i>
                                </div>
                                <div class="card_main">
                                    <h5 class="card_main-title">Live online lectures</h5>
                                    <p class="card_main-text">
                                        Sed a eros sodales diam sagittis faucibus. Cras id erat nisl. Lorem ipsum dolor sit
                                        lorem amet.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <!-- features section end -->
        <!-- promo section start -->
        <section class="promo">
            <div class="container d-flex flex-column-reverse flex-lg-row justify-content-lg-end">
                <div class="promo_media">
                    <lottie-player src="{{ asset('course/lottie/scene.json') }}" background="transparent" speed="1"
                        style="width: 100%; height: 100%" loop autoplay></lottie-player>
                </div>
                <div class="promo_content">
                    <h2 class="promo_content-header" data-aos="fade-left">Learn and get a profession online</h2>
                    <p class="promo_content-text" data-aos="fade-up" data-aos-delay="50">
                        Morbi tempor eleifend condimentum. Etiam mollis urna et massa tempus vulputate. Nunc sed nisl est.
                        Donec non
                        consectetur elit. Praesent accumsan elit urna, eget mattis turpis aliquam a. In sagittis bibendum
                        consequat.
                        Quisque porta volutpat ligula sit amet varius
                    </p>
                    <a class="promo_content-btn btn btn--gradient" href="#" data-aos="fade-up" data-aos-delay="100">
                        <span class="text">Try for Free</span>
                    </a>
                </div>
            </div>
        </section>
        <!-- promo section end -->
        <!-- about section start -->
        <section class="about">
            <div class="container">
                <div class="about_deco">
                    <lottie-player src="{{ asset('course/lottie/wave.json') }}" background="transparent" speed="1"
                        style="width: 100%; height: 100%" loop autoplay></lottie-player>
                </div>
                <div class="about_main">
                    <div class="content">
                        <h2 class="about_main-header" data-aos="fade-in">How does it work?</h2>
                        <ul class="about_main-list">
                            <li class="about_main-list_item" data-aos="fade-up">
                                <i class="icon-check icon"></i>
                                <div class="content">
                                    <h5 class="title">4 on-line lectures with a teacher</h5>
                                    <p class="text">Quisque eget porta mauris. Praesent eu tincidunt nulla, suscipit
                                        lobortis est.</p>
                                </div>
                            </li>
                            <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="50">
                                <i class="icon-check icon"></i>
                                <div class="content">
                                    <h5 class="title">Subscription gives access to education materials and videos</h5>
                                    <p class="text">Quisque eget porta mauris. Praesent eu tincidunt nulla, suscipit
                                        lobortis est.</p>
                                </div>
                            </li>
                            <li class="about_main-list_item" data-aos="fade-up" data-aos-delay="100">
                                <i class="icon-check icon"></i>
                                <div class="content">
                                    <h5 class="title">
                                        After completing the course and completing the tasks, you will receive a certificate
                                    </h5>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="about_review" data-aos="zoom-in">
                    <div class="about_review-wrapper">
                        <div class="media">
                            <picture>
                                <source data-srcset="{{ asset('course/img/placeholder.jpg') }}"
                                    srcset="{{ asset('course/img/placeholder.jpg') }}" />
                                <img class="lazy" data-src="{{ asset('course/img/placeholder.jpg') }}"
                                    src="{{ asset('course/img/placeholder.jpg') }}" alt="media" />
                            </picture>
                        </div>
                        <div class="main">
                            <h5 class="main_name">Diana Gloster</h5>
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
                            <q class="main_review quote">
                                “Mauris tellus lorem, tempus sed nibh at, varius convallis mi. sed scelerisque odio neque a
                                lacus. Ut
                                consectetur ligula. ed rhoncus sapien eget feugiat.”
                            </q>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about section end -->
        <!-- popular courses section start -->
        <section class="popular">
            <div class="container">
                <div class="popular_header">
                    <h2 class="popular_header-title" data-aos="fade-up">Popular courses</h2>
                    <p class="popular_header-text" data-aos="fade-down">
                        Sed a eros sodales diam sagittis faucibus. Cras id erat nisl. Fusce faucibus nulla sed finibus
                        egestas.
                        Vestibulum purus magna.
                    </p>
                </div>
                <ul class="popular_tags courses-tags d-flex flex-wrap align-items-center justify-content-center">
                    <li class="list-item" data-aos="fade-left">
                        <a class="tag" href="#">programming</a>
                    </li>
                    <li class="list-item" data-aos="fade-left" data-aos-delay="50">
                        <a class="tag" href="#">management</a>
                    </li>
                    <li class="list-item" data-aos="fade-left" data-aos-delay="100">
                        <a class="tag" href="#">art</a>
                    </li>
                    <li class="list-item" data-aos="fade-left" data-aos-delay="150">
                        <a class="tag" href="#">digital marketing</a>
                    </li>
                    <li class="list-item" data-aos="fade-left" data-aos-delay="200">
                        <a class="tag" href="#">game development</a>
                    </li>
                    <li class="list-item" data-aos="fade-left" data-aos-delay="250">
                        <a class="tag" href="#">smm</a>
                    </li>
                </ul>
                <ul class="popular_list d-md-flex flex-wrap">
                    <li class="popular_list-card course-card col-12 col-md-6 col-lg-4" data-aos="fade-up">
                        <div class="course-card_wrapper">
                            <div class="top d-flex align-items-start">
                                <span class="top_icon top_icon--blue">
                                    <i class="icon-code-solid icon"></i>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    <h5 class="top_title">Computer Programming Basic</h5>
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
                                <ul class="bottom_list">
                                    <li class="bottom_list-item d-flex align-items-start">
                                        <i class="bottom_list-item_marker icon-circle"></i>
                                        <p class="bottom_list-item_text">
                                            Mauris tellus lorem, tempus sed nibh at, varius convallis mi
                                        </p>
                                    </li>
                                    <li class="bottom_list-item d-flex align-items-start">
                                        <i class="bottom_list-item_marker icon-circle"></i>
                                        <p class="bottom_list-item_text">
                                            Aenean tristique sodales enim, et consequat velit. Morbi sit amet lorem sapien
                                        </p>
                                    </li>
                                </ul>
                                <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                    sign up for a course <i class="icon-arrow-right-solid icon"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="popular_list-card course-card col-12 col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-delay="50">
                        <div class="course-card_wrapper">
                            <div class="top d-flex align-items-start">
                                <span class="top_icon top_icon--orange">
                                    <i class="icon-css3 icon"></i>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    <h5 class="top_title">Computer CSS3 Programming</h5>
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
                                <ul class="bottom_list">
                                    <li class="bottom_list-item d-flex align-items-start">
                                        <i class="bottom_list-item_marker icon-circle"></i>
                                        <p class="bottom_list-item_text">
                                            Mauris tellus lorem, tempus sed nibh at, varius convallis mi
                                        </p>
                                    </li>
                                    <li class="bottom_list-item d-flex align-items-start">
                                        <i class="bottom_list-item_marker icon-circle"></i>
                                        <p class="bottom_list-item_text">
                                            Aenean tristique sodales enim, et consequat velit. Morbi sit amet lorem sapien
                                        </p>
                                    </li>
                                </ul>
                                <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                    sign up for a course <i class="icon-arrow-right-solid icon"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="popular_list-card course-card col-12 col-md-6 col-lg-4" data-aos="fade-up"
                        data-aos-delay="100">
                        <div class="course-card_wrapper">
                            <div class="top d-flex align-items-start">
                                <span class="top_icon top_icon--sky">
                                    <i class="icon-sitemap-solid icon"></i>
                                </span>
                                <div class="wrapper d-flex flex-column">
                                    <h5 class="top_title">Web-site Development Pro</h5>
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
                                <ul class="bottom_list">
                                    <li class="bottom_list-item d-flex align-items-start">
                                        <i class="bottom_list-item_marker icon-circle"></i>
                                        <p class="bottom_list-item_text">
                                            Mauris tellus lorem, tempus sed nibh at, varius convallis mi
                                        </p>
                                    </li>
                                    <li class="bottom_list-item d-flex align-items-start">
                                        <i class="bottom_list-item_marker icon-circle"></i>
                                        <p class="bottom_list-item_text">
                                            Aenean tristique sodales enim, et consequat velit. Morbi sit amet lorem sapien
                                        </p>
                                    </li>
                                </ul>
                                <a class="bottom_btn btn btn--bordered btn--arrow" href="course.html">
                                    sign up for a course <i class="icon-arrow-right-solid icon"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
                <a class="popular_btn btn btn--gradient" href="courses.html">
                    <span class="text">Learn more</span>
                </a>
            </div>
        </section>
        <!-- popular courses section end -->
        <!-- banner section start -->
        <div class="banner">
            <div class="underlay"></div>
            <div class="container d-lg-flex align-items-center">
                <div class="banner_content">
                    <h4 class="banner_content-title" data-aos="fade-up">
                        Unlimited access to educational materials and lectures for subscribers
                    </h4>
                    <div class="wrapper" data-aos="fade-up" data-aos-delay="50">
                        <a class="banner_content-btn btn btn--yellow" href="pricing.html">See pricing plans</a>
                    </div>
                </div>
                <div class="banner_media">
                    <picture>
                        <source data-srcset="{{ asset('course/img/placeholder.jpg') }}"
                            srcset="{{ asset('course/img/placeholder.jpg') }}" />
                        <img class="lazy" data-src="{{ asset('course/img/placeholder.jpg') }}"
                            src="{{ asset('course/img/placeholder.jpg') }}" alt="media" />
                    </picture>
                </div>
            </div>
        </div>
        <!-- banner section end -->
    </main>
@endsection
@section('css-custom')

    <link rel="stylesheet" href="{{ asset('course/css/index.min.css') }}" />
@endsection
@section('js-custom')
    <script src="{{ asset('course/js/common.min.js') }}"></script>
@endsection
