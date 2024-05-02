@extends('layouts.courses.main')
@section('title','Package')
@section('content')
<main>
    <div class="underlay"></div>
    <section class="hero">
        <div class="container d-lg-flex flex-row-reverse align-items-center">
            <div class="hero_main col-lg-6">
                <h1 class="hero_main-title" data-aos="fade-left">Choose The Plan That's Right For You</h1>
                <p class="hero_main-text" data-aos="fade-left" data-aos-delay="50">
                    Sed a eros sodales diam sagittis faucibus. Cras id erat nisl. Fusce faucibus nulla sed finibus egestas.
                    Vestibulum purus magna, auctor consectetur sem nec, consectetur porta purus. Duis eget nisi eleifend, laoreet
                    lacus
                </p>
            </div>
            <div class="hero_media">
                <lottie-player
                    src="{{asset('course/lottie/scene.json')}}"
                    background="transparent"
                    speed="1"
                    style="width: 100%; height: 100%"
                    loop
                    autoplay
                ></lottie-player>
            </div>
        </div>
    </section>
    <!-- pricing plans section start -->
    <section class="pricing">
        <div class="container">
            <div class="pricing_header">
                <h2 class="pricing_header-title">Pricing plans for subscribers</h2>
            </div>
            <ul class="pricing_nav d-flex align-items-center justify-content-center nav nav-tabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link active"
                        id="daily-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#daily"
                        type="button"
                        role="tab"
                        aria-controls="daily"
                        aria-selected="true"
                    >
                        <span class="nav-link_text">One day</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="monthly-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#monthly"
                        type="button"
                        role="tab"
                        aria-controls="monthly"
                        aria-selected="false"
                    >
                        <span class="nav-link_text">Monthly</span>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button
                        class="nav-link"
                        id="annual-tab"
                        data-bs-toggle="tab"
                        data-bs-target="#annual"
                        type="button"
                        role="tab"
                        aria-controls="annual"
                        aria-selected="false"
                    >
                        <span class="nav-link_text">Annual</span>
                    </button>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="daily" role="tabpanel" aria-labelledby="daily-tab">
                    <ul class="pricing_list d-md-flex flex-wrap">
                        <li class="pricing_list-card col-md-6 col-lg-4" data-order="1" data-aos="fade-up">
                            <div class="card-wrapper">
                                <div class="top top--basic">
                                    <h5 class="top_title">Basic</h5>
                                    <div class="top_price d-flex align-items-center">
                                        <span class="top_price-price h4">$ 1.99</span>
                                        <p class="top_price-text d-flex flex-column">
                                            <span>one</span>
                                            <span>day</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="main">
                                    <ul class="main_list">
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">5 Morbi quis orci nec mauris auctor</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">27 faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex exclude">
                                            <i class="icon-check icon"></i>
                                            <p class="text">10 Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex exclude">
                                            <i class="icon-check icon"></i>
                                            <p class="text">3Gb Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                    </ul>
                                    <a class="main_btn btn btn--gradient" href="#">
                                        <span class="text">Get This Plan</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="pricing_list-card col-md-6 col-lg-4" data-order="2" data-aos="fade-up" data-aos-delay="50">
                            <div class="card-wrapper">
                                <div class="top top--advanced">
                                    <h5 class="top_title">Advanced</h5>
                                    <div class="top_price d-flex align-items-center">
                                        <span class="top_price-price h4">$ 12.99</span>
                                        <p class="top_price-text d-flex flex-column">
                                            <span>one</span>
                                            <span>day</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="main">
                                    <ul class="main_list">
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">5 Morbi quis orci nec mauris auctor</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">27 faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">10 Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex exclude">
                                            <i class="icon-check icon"></i>
                                            <p class="text">3Gb Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                    </ul>
                                    <a class="main_btn btn btn--gradient" href="#">
                                        <span class="text">Get This Plan</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="pricing_list-card col-md-6 col-lg-4" data-order="3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-wrapper">
                                <div class="top top--corporate">
                                    <h5 class="top_title">Corporate</h5>
                                    <div class="top_price d-flex align-items-center">
                                        <span class="top_price-price h4">$ 120</span>
                                        <p class="top_price-text d-flex flex-column">
                                            <span>one</span>
                                            <span>day</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="main">
                                    <ul class="main_list">
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">5 Morbi quis orci nec mauris auctor</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">27 faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">10 Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">3Gb Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                    </ul>
                                    <a class="main_btn btn btn--gradient" href="#">
                                        <span class="text">Get This Plan</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                    <ul class="pricing_list d-md-flex flex-wrap">
                        <li class="pricing_list-card col-md-6 col-lg-4" data-order="1" data-aos="fade-up">
                            <div class="card-wrapper">
                                <div class="top top--basic">
                                    <h5 class="top_title">Basic</h5>
                                    <div class="top_price d-flex align-items-center">
                                        <span class="top_price-price h4">$ 99.99</span>
                                        <p class="top_price-text d-flex flex-column">
                                            <span>one</span>
                                            <span>month</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="main">
                                    <ul class="main_list">
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">5 Morbi quis orci nec mauris auctor</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">27 faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex exclude">
                                            <i class="icon-check icon"></i>
                                            <p class="text">10 Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex exclude">
                                            <i class="icon-check icon"></i>
                                            <p class="text">3Gb Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                    </ul>
                                    <a class="main_btn btn btn--gradient" href="#">
                                        <span class="text">Get This Plan</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="pricing_list-card col-md-6 col-lg-4" data-order="2" data-aos="fade-up" data-aos-delay="50">
                            <div class="card-wrapper">
                                <div class="top top--advanced">
                                    <h5 class="top_title">Advanced</h5>
                                    <div class="top_price d-flex align-items-center">
                                        <span class="top_price-price h4">$ 120.99</span>
                                        <p class="top_price-text d-flex flex-column">
                                            <span>one</span>
                                            <span>month</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="main">
                                    <ul class="main_list">
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">5 Morbi quis orci nec mauris auctor</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">27 faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">10 Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex exclude">
                                            <i class="icon-check icon"></i>
                                            <p class="text">3Gb Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                    </ul>
                                    <a class="main_btn btn btn--gradient" href="#">
                                        <span class="text">Get This Plan</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="pricing_list-card col-md-6 col-lg-4" data-order="3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-wrapper">
                                <div class="top top--corporate">
                                    <h5 class="top_title">Corporate</h5>
                                    <div class="top_price d-flex align-items-center">
                                        <span class="top_price-price h4">$ 1920</span>
                                        <p class="top_price-text d-flex flex-column">
                                            <span>one</span>
                                            <span>month</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="main">
                                    <ul class="main_list">
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">5 Morbi quis orci nec mauris auctor</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">27 faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">10 Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">3Gb Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                    </ul>
                                    <a class="main_btn btn btn--gradient" href="#">
                                        <span class="text">Get This Plan</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="tab-pane fade" id="annual" role="tabpanel" aria-labelledby="annual-tab">
                    <ul class="pricing_list d-md-flex flex-wrap">
                        <li class="pricing_list-card col-md-6 col-lg-4" data-order="1" data-aos="fade-up">
                            <div class="card-wrapper">
                                <div class="top top--basic">
                                    <h5 class="top_title">Basic</h5>
                                    <div class="top_price d-flex align-items-center">
                                        <span class="top_price-price h4">$ 349.99</span>
                                        <p class="top_price-text d-flex flex-column">
                                            <span>one</span>
                                            <span>year</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="main">
                                    <ul class="main_list">
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">5 Morbi quis orci nec mauris auctor</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">27 faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex exclude">
                                            <i class="icon-check icon"></i>
                                            <p class="text">10 Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex exclude">
                                            <i class="icon-check icon"></i>
                                            <p class="text">3Gb Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                    </ul>
                                    <a class="main_btn btn btn--gradient" href="#">
                                        <span class="text">Get This Plan</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="pricing_list-card col-md-6 col-lg-4" data-order="2" data-aos="fade-up" data-aos-delay="50">
                            <div class="card-wrapper">
                                <div class="top top--advanced">
                                    <h5 class="top_title">Advanced</h5>
                                    <div class="top_price d-flex align-items-center">
                                        <span class="top_price-price h4">$ 499.99</span>
                                        <p class="top_price-text d-flex flex-column">
                                            <span>one</span>
                                            <span>year</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="main">
                                    <ul class="main_list">
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">5 Morbi quis orci nec mauris auctor</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">27 faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">10 Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex exclude">
                                            <i class="icon-check icon"></i>
                                            <p class="text">3Gb Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                    </ul>
                                    <a class="main_btn btn btn--gradient" href="#">
                                        <span class="text">Get This Plan</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                        <li class="pricing_list-card col-md-6 col-lg-4" data-order="3" data-aos="fade-up" data-aos-delay="100">
                            <div class="card-wrapper">
                                <div class="top top--corporate">
                                    <h5 class="top_title">Corporate</h5>
                                    <div class="top_price d-flex align-items-center">
                                        <span class="top_price-price h4">$ 5000</span>
                                        <p class="top_price-text d-flex flex-column">
                                            <span>one</span>
                                            <span>year</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="main">
                                    <ul class="main_list">
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">5 Morbi quis orci nec mauris auctor</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">27 faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">10 Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                        <li class="main_list-item d-flex">
                                            <i class="icon-check icon"></i>
                                            <p class="text">3Gb Nunc faucibus eros nec hendrerit viverra</p>
                                        </li>
                                    </ul>
                                    <a class="main_btn btn btn--gradient" href="#">
                                        <span class="text">Get This Plan</span>
                                    </a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <p class="pricing_text">
                Uisque vehicula tellus ex, pulvinar varius massa pulvinar quis. Phasellus varius leo sit amet nisl auctor iaculis.
                Aliquam sem odio, vulputate et nisi at, dapibus cursus libero. Donec rhoncus tristique
            </p>
        </div>
    </section>
    <!-- pricing plans section end -->
    <!-- FAQ section start -->
    <section class="faq">
        <div class="phone">
            <lottie-player
                src="{{asset('course/lottie/phone.json')}}"
                background="transparent"
                speed="1"
                style="width: 100%; height: 100%"
                loop
                autoplay
            ></lottie-player>
        </div>
        <div class="sphere">
            <lottie-player
                src="{{asset('course/lottie/sphere.json')}}"
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

    <!-- FAQ section end -->
</main>
@endsection
@section('css-custom')

<link rel="stylesheet" href="{{asset('course/css/pricing.min.css')}}" />
@endsection
@section('js-custom')
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="{{asset('course/js/common.min.js')}}"></script>
@endsection