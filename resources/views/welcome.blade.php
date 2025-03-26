@extends('layout.app')
@section('content')

<!-- start section -->
<section class="section-dark p-0 bg-dark-gray">
    <div class="swiper lg-no-parallax magic-cursor  full-screen md-h-600px sm-h-500px ipad-top-space-margin swiper-light-pagination" data-slider-options='{ "slidesPerView": 1, "loop": true, "parallax": true, "speed": 2000, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background overlay-relative position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('assets/images/new/hero1.jpeg');">
                    <div class="bg-gradient-sherpa-blue-black overlay-absolute"></div>

                    <div class="container h-100 hero-content" data-swiper-parallax="-500">
                        <div class="row align-items-center justify-content-center h-100">
                            <div class="col-xl-10 col-lg-10 col-md-10 position-relative text-white text-center text-md-center" data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div>
                                    <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Best solutions for your business</span>
                                </div>
                                <h1 class="heading-text alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">Agency for your <span class="">great business.</span></h1>
                                <a href="#" style="text-align: center;" target="_blank" class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Get Consultation<span class="bg-white text-base-color"><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide overflow-hidden">
                <div class="overlay-relative cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('assets/images/new/hero3.jpeg');">
                    <div class="overlay-absolute bg-gradient-sherpa-blue-black"></div>
                    <div class="container hero-content h-100" data-swiper-parallax="-500">
                        <div class="row align-items-center justify-content-center h-100">
                            <div class="col-xl-10 col-lg-10 col-md-10 position-relative text-white text-center text-md-center" data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div>
                                    <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Delivering beautiful digital products</span>
                                </div>
                                <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">Shape the future of<span class=""> marketing.</span></h1>
                                <a href="" class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Get started now<span class="bg-white text-base-color"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
            <div class="swiper-slide overflow-hidden">
                <div class="overlay-relative cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('assets/images/new/hero4.jpeg');">
                    <div class="overlay-absolute bg-gradient-sherpa-blue-black"></div>
                    <div class="container hero-content h-100" data-swiper-parallax="-500">
                        <div class="row align-items-center justify-content-center h-100">
                            <div class="col-xl-10 col-lg-10 col-md-10 position-relative text-white text-center text-md-center" data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div>
                                    <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Business strategies and top ideas</span>
                                </div>
                                <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">Provide solutions to <span class="">small business.</span></h1>
                                <a href="" target="_blank" class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Contact Us<span class="bg-white text-base-color"><i class="fa-solid fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
        <!-- end slider pagination -->
        <!-- start slider navigation -->
        <div class="slider-one-slide-prev-1 icon-extra-large text-white swiper-button-prev slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutLeft"></i></div>
        <div class="slider-one-slide-next-1 icon-extra-large text-white swiper-button-next slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutRight"></i></div>
        <!-- end slider navigation -->
    </div>
</section>
<!-- end section -->

<div class="box-layout">

    <!-- start section -->
    <section class="p-0 border-bottom border-color-extra-medium-gray">
        <div class="container-fluid">
            <div class="row row-cols-1 row-cols-md-3 row-cols-sm-2 justify-content-center"
                data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 500, "easing": "easeOutQuad" }'>
                <!-- start content box item -->
                <div
                    class="col pt-35px pb-35px md-pb-0 text-dark-gray border-end border-color-extra-medium-gray sm-border-end-0">
                    <div
                        class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                        <div class="flex-shrink-0 me-15px md-me-0">
                            <h2 class="mb-0 fw-800">99<sup class="fs-24">%</sup></h2>
                        </div>
                        <div>
                            <span class="lh-24 fw-600 d-block">Track and analyze <br />business reports.</span>
                        </div>
                    </div>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div
                    class="col pt-35px pb-35px md-pb-0 text-dark-gray border-end border-color-extra-medium-gray sm-border-end-0">
                    <div
                        class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                        <div class="flex-shrink-0 me-15px md-me-0">
                            <h2 class="mb-0 fw-800 ls-minus-3px">4.98</h2>
                        </div>
                        <div>
                            <div class="review-star-icon fs-20 d-inline-block text-gradient-orange-sky-blue">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <span class="lh-24 fw-600 d-block">Best rated agency</span>
                        </div>
                    </div>
                </div>
                <!-- end content box item -->
                <!-- start content box item -->
                <div class="col pt-35px pb-35px text-dark-gray">
                    <div
                        class="d-flex flex-column flex-lg-row align-items-center justify-content-center text-center text-lg-start">
                        <div class="flex-shrink-0 me-15px md-me-0">
                            <h2 class="mb-0 fw-800">98<sup class="fs-24">%</sup></h2>
                        </div>
                        <div>
                            <span class="lh-24 fw-600 d-block">Genuine repeated <br />happy customers.</span>
                        </div>
                    </div>
                </div>
                <!-- end content box item -->
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- WHO WE ARE  -->
    <!-- start section -->
    <section class="pb-8 md-pb-17 xs-pb-28">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 col-md-9 md-mb-50px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">About Us</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px mb-20px sm-w-85 xs-w-100 mx-auto">Who We Are.</h3>
                    <p>Spruce Consulting is a premier media agency based in Nigeria, dedicated to helping brands, individuals, and organizations harness the power of digital media and out-of-home (OOH) advertising. We are passionate about driving meaningful connections between brands and their audiences, creating campaigns that inspire, inform, and engage.</p>

                    <a href="/about" class="btn btn-large btn-dark-gray btn-hover-animation-switch btn-box-shadow btn-rounded me-25px xs-me-0">
                        <span>
                            <span class="btn-text">Read More</span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                            <span class="btn-icon"><i class="feather icon-feather-arrow-right"></i></span>
                        </span>
                    </a>
                    <span class="text-dark-gray fw-700 ls-minus-05px d-block d-sm-inline-block sm-mt-15px"><a href="tel:08137322869"><i class="feather icon-feather-phone-call me-10px"></i>08137322869</a></span>
                </div>
                <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative">
                    <div class="text-end w-80 md-w-75 ms-auto" data-animation-delay="500" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                        <img src="{{ asset('assets/images/new/who-we-are1.jpg') }}" alt="" class="border-radius-5px">
                    </div>
                    <div class="w-60 md-w-50 xs-w-55 overflow-hidden position-absolute left-15px bottom-minus-50px" data-shadow-animation="true" data-animation-delay="500" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
                        <img src="{{ asset('assets/images/new/who-we-are2.jpg') }}" alt="" class="border-radius-5px box-shadow-quadruple-large">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->



    <!-- OUR MISSION AND VISION  -->
    <!-- start section -->
    <section class="bg-solitude-blue">
        <div class="container">
            <div class="row justify-content-center mb-4">
                <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Mission and Vision</h3>
                </div>
            </div>
            <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-xl-3 col-lg-4 col-md-12 tab-style-05 md-mb-30px sm-mb-20px">
                    <!-- start tab navigation -->
                    <ul class="nav nav-tabs justify-content-center border-0 text-left fw-500 fs-18 alt-font">
                        <li class="nav-item">
                            <a data-bs-toggle="tab" href="#tab_four1" class="nav-link d-flex align-items-center active">
                                <i class="feather icon-feather-briefcase icon-extra-medium text-dark-gray"></i>
                                <span>Our Mission</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_four2">
                                <i class="feather icon-feather-globe icon-extra-medium text-dark-gray"></i>
                                <span>Our Vision</span>
                            </a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" data-bs-toggle="tab" href="#tab_four3">
                                <i class="feather icon-feather-compass icon-extra-medium text-dark-gray"></i>
                                <span>Our Core Values</span>
                            </a>
                        </li>
                    </ul>
                    <!-- end tab navigation -->
                </div>
                <div class="col-xl-9 col-lg-8 col-md-12">
                    <div class="tab-content">
                        <!-- start tab content -->
                        <div class="tab-pane fade in active show" id="tab_four1">
                            <div class="row align-items-center">
                                <div class="col-md-5 offset-xl-1 sm-mb-30px">
                                    <img src="{{ asset('assets/images/new/mission.jpg') }}" alt="" class="border-radius-6px  mission-img">
                                </div>
                                <div class="col-xl-5 col-md-7 offset-xl-1 text-center text-md-start">
                                    <span class="fs-18 fw-600 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"><span class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-white box-shadow-medium-bottom align-middle me-15px flex-shrink-0"><i class="feather icon-feather-briefcase fs-22"></i></span>Our Mission</span>
                                    <p>To be the go-to media partner for transforming brands into trusted household names through innovative communication strategies.</p>
                                    <a href="/contact" class="btn btn-large btn-box-shadow btn-rounded btn-base-color mt-10px">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_four2">
                            <div class="row align-items-center">
                                <div class="col-md-5 offset-xl-1 sm-mb-30px">
                                    <img src="{{ asset('assets/images/new/vision.jpg') }}" alt="" class="border-radius-6px w-100">
                                </div>
                                <div class="col-xl-5 col-md-7 offset-xl-1 text-center text-md-start">
                                    <span class="fs-18 fw-600 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"><span class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-white box-shadow-medium-bottom align-middle me-15px flex-shrink-0"><i class="feather icon-feather-globe fs-22"></i></span>Our Vision</span>

                                    <p>We are committed to integrity, creativity, and excellence in delivering impactful media solutions that drive long-term success for our clients.</p>
                                    <a href="/contact" class="btn btn-large btn-box-shadow btn-rounded btn-base-color mt-10px">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->

                        <!-- start tab content -->
                        <div class="tab-pane fade in" id="tab_four3">
                            <div class="row align-items-center">
                                <div class="col-md-5 offset-xl-1 sm-mb-30px">
                                    <img src="{{ asset('assets/images/new/core-values.jpg') }}" alt="" class="border-radius-6px w-100">
                                </div>
                                <div class="col-xl-5 col-md-7 offset-xl-1 text-center text-md-start">
                                    <span class="fs-18 fw-600 text-base-color mb-25px d-flex align-items-center justify-content-center justify-content-md-start"><span class="text-center w-60px h-60px d-flex justify-content-center align-items-center rounded-circle bg-white box-shadow-medium-bottom align-middle me-15px flex-shrink-0"><i class="feather icon-feather-compass fs-22"></i></span>Our Core Values</span>
                                    <p>We always want our client grow with the product we have delivered and maintaining strong long-term good relationship.</p>
                                    <a href="/contact" class="btn btn-large btn-box-shadow btn-rounded btn-base-color mt-10px">Contact Us</a>
                                </div>
                            </div>
                        </div>
                        <!-- end tab content -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->

    <!-- WHY CHOOSE US  -->
    <!-- start section -->
    <section class="pb-0">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-center">
                <div class="col-xl-5 col-lg-6 md-mb-50px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">Why Us</span>
                    <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px">Why Choose Spruce Consulting?.</h3>
                    <p>At Spruce Consulting, we go beyond conventional advertising—we create impactful connections between brands and their audiences. Our approach blends creativity, data-driven insights, and deep industry expertise to ensure your message resonates where it matters most.</p>
                    <a href="#" target="_blank" class="btn btn-large btn-box-shadow btn-rounded btn-dark-gray mt-10px">Book Consultation</a>
                </div>
                <div class="col-xl-5 col-lg-6 offset-xl-2 position-relative">
                    <div class="accordion pricing-table-style-04" id="accordion-style-01" data-active-icon="fa-angle-up" data-inactive-icon="fa-angle-down" data-anime='{"el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start accordion item -->
                        <div class="accordion-item bg-white active-accordion box-shadow-quadruple-large mb-20px">
                            <div class="accordion-header">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-01-01" aria-expanded="true" data-bs-parent="#accordion-style-01">
                                    <div class="accordion-title position-relative d-flex align-items-center pe-20px text-dark-gray fw-500 mb-0 alt-font">Expertise Across Industries<span class="icon-round bg-dark-gray text-white w-25px h-25px"><i class="fa-solid fa-angle-up"></i></span></div>
                                </a>
                            </div>
                            <div id="accordion-style-01-01" class="accordion-collapse collapse show" data-bs-parent="#accordion-style-01">
                                <div class="accordion-body last-paragraph-no-margin">
                                    <p class="opacity-6 w-90 fw-300">From MSMEs to FINTECH, we have experience working with diverse sectors.</p>

                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item bg-white box-shadow-quadruple-large mb-20px">
                            <div class="accordion-header">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-01-02" aria-expanded="false" data-bs-parent="#accordion-style-01">
                                    <div class="accordion-title position-relative d-flex align-items-center pe-20px text-dark-gray fw-500 mb-0 alt-font">Innovative Campaigns<span class="icon-round bg-dark-gray text-white w-25px h-25px"><i class="fa-solid fa-angle-down"></i></span></div>
                                </a>
                            </div>
                            <div id="accordion-style-01-02" class="accordion-collapse collapse" data-bs-parent="#accordion-style-01">
                                <div class="accordion-body last-paragraph-no-margin">
                                    <p class="opacity-6 w-90 fw-300">We combine creativity and data to design campaigns that stand out.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item bg-white box-shadow-quadruple-large mb-20px">
                            <div class="accordion-header">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-01-03" aria-expanded="false" data-bs-parent="#accordion-style-01">
                                    <div class="accordion-title position-relative d-flex align-items-center pe-20px text-dark-gray fw-500 mb-0 alt-font">Local Expertise<span class="icon-round bg-dark-gray text-white w-25px h-25px"><i class="fa-solid fa-angle-down"></i></span></div>
                                </a>
                            </div>
                            <div id="accordion-style-01-03" class="accordion-collapse collapse" data-bs-parent="#accordion-style-01">
                                <div class="accordion-body last-paragraph-no-margin">
                                    <p class="opacity-6 w-90 fw-300"> Deep understanding of Nigeria's cultural and business landscape.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->

                        <!-- start accordion item -->
                        <div class="accordion-item bg-white box-shadow-quadruple-large mb-20px">
                            <div class="accordion-header">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-01-04" aria-expanded="false" data-bs-parent="#accordion-style-01">
                                    <div class="accordion-title position-relative d-flex align-items-center pe-20px text-dark-gray fw-500 mb-0 alt-font">
                                        Results-Driven
                                        <span class="icon-round bg-dark-gray text-white w-25px h-25px"><i class="fa-solid fa-angle-down"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-01-04" class="accordion-collapse collapse" data-bs-parent="#accordion-style-01">
                                <div class="accordion-body last-paragraph-no-margin">
                                    <p class="opacity-6 w-90 fw-300">Our focus is on delivering measurable impact and ROI for our clients.</p>
                                </div>
                            </div>
                        </div>

                        <!-- end accordion item -->
                        <!-- start accordion item -->
                        <div class="accordion-item bg-white box-shadow-quadruple-large">
                            <div class="accordion-header">
                                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-style-01-05" aria-expanded="false" data-bs-parent="#accordion-style-01">
                                    <div class="accordion-title position-relative d-flex align-items-center pe-20px text-dark-gray fw-500 mb-0 alt-font">
                                        Integrated Approach
                                        <span class="icon-round bg-dark-gray text-white w-25px h-25px"><i class="fa-solid fa-angle-down"></i></span>
                                    </div>
                                </a>
                            </div>
                            <div id="accordion-style-01-05" class="accordion-collapse collapse" data-bs-parent="#accordion-style-01">
                                <div class="accordion-body last-paragraph-no-margin">
                                    <p class="opacity-6 w-90 fw-300">We merge traditional and digital media for a cohesive communication strategy.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end accordion item -->

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- SERVICES  -->
    <!-- start section -->
    <section class="overflow-hidden">
        <div class="container-fluid">
            <section class="overflow-hidden bg-regal-blue position-relative border-radius-6px lg-border-radius-0px z-index-0">
                <img src="{{ asset('assets/images/demo-corporate-bg-01.png') }}" class="position-absolute top-minus-150px left-minus-30px z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-20deg) translateY(0)" alt="" />
                <div class="container">
                    <div class="row align-items-center mb-6 sm-mb-9 text-center text-lg-start">
                        <div class="col-lg-5 md-mb-20px">
                            <span class="ps-25px pe-25px mb-10px text-uppercase text-white fs-13 lh-42px fw-600 border-radius-100px bg-gradient-blue-whale-transparent d-inline-block">Services</span>
                            <h3 class="text-white fw-700 mb-0 ls-minus-1px">Core Services</h3>
                        </div>
                        <div class="col-lg-5 last-paragraph-no-margin md-mb-20px">
                            <p class="w-85 md-w-100"> We craft strategic communications, marketing, and branding solutions to elevate businesses, influencers, and political entities.</p>
                        </div>
                        <div class="col-lg-2 d-flex justify-content-center justify-content-lg-end">
                            <!-- start slider navigation -->
                            <div class="slider-one-slide-prev-1 icon-extra-medium text-white swiper-button-prev slider-navigation-style-04 border border-1 border-color-transparent-white-light">
                                <i class="feather icon-feather-chevron-left"></i>
                            </div>
                            <div class="slider-one-slide-next-1 icon-extra-medium text-white swiper-button-next slider-navigation-style-04 border border-1 border-color-transparent-white-light">
                                <i class="feather icon-feather-chevron-right"></i>
                            </div>
                            <!-- end slider navigation -->
                        </div>
                    </div>
                    <div class="row align-items-center mb-6">
                        <div class="col-12">
                            <div class="outside-box-right-25 sm-outside-box-right-0">
                                <div class="swiper magic-cursor slider-one-slide" data-slider-options='{ "slidesPerView": 1, "spaceBetween": 30, "loop": true, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 5000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "992": { "slidesPerView": 3 }, "768": { "slidesPerView": 2 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                                    <div class="swiper-wrapper">
                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <!-- start interactive banner item -->
                                            <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                                <img src="{{ asset('assets/images/new/brand-management.jpg') }}" alt="Brand Management" />
                                                <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                                <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">

                                                    <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                        <span class="text-white fw-600 fs-20">Brand Management</span>
                                                        <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Explore Services</span>
                                                        <a href="/services" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore services</a>
                                                        <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                                    </div>
                                                    <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                                    </div>
                                                    <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                                    <a href="/services" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                                </div>
                                            </div>
                                            <!-- end interactive banner item -->
                                        </div>
                                        <!-- end slider item -->

                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <!-- start interactive banner item -->
                                            <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                                <img src="{{ asset('assets/images/new/corporate-communication.jpg') }}" alt="Corporate Communications" />
                                                <div class="opacity-very-light bg-slate-blue"></div>
                                                <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">

                                                    <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                        <span class="text-white fw-600 fs-20">
                                                            Corporate Communications
                                                        </span>
                                                        <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Explore Services</span>
                                                        <a href="services" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore services</a>
                                                        <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                                    </div>
                                                    <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                                    </div>
                                                    <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                                    <a href="/services" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                                </div>
                                            </div>
                                            <!-- end interactive banner item -->
                                        </div>
                                        <!-- end slider item -->

                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <!-- start interactive banner item -->
                                            <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                                <img src="{{ asset('assets/images/new/influencer-marketing.jpg') }}" alt="Influencer Marketing" />
                                                <div class="opacity-very-light bg-slate-blue"></div>
                                                <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">

                                                    <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                        <span class="text-white fw-600 fs-20">Influencer Marketing</span>
                                                        <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Explore Services</span>
                                                        <a href="/services" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore Services</a>
                                                        <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                                    </div>
                                                    <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                                    <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                                    <a href="/services" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                                </div>
                                            </div>
                                            <!-- end interactive banner item -->
                                        </div>
                                        <!-- end slider item -->

                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <!-- start interactive banner item -->
                                            <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                                <img src="{{ asset('assets/images/new/fintech.jpg') }}" alt="FINTECH Solutions" />
                                                <div class="opacity-very-light bg-slate-blue"></div>
                                                <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">

                                                    <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                        <span class="text-white fw-600 fs-20">MSMEs and FINTECH Solutions</span>
                                                        <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Explore Services</span>
                                                        <a href="/services" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore Services</a>
                                                        <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                                    </div>
                                                    <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9"></div>
                                                    <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                                    <a href="/services" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                                </div>
                                            </div>
                                            <!-- end interactive banner item -->
                                        </div>
                                        <!-- end slider item -->

                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <!-- start interactive banner item -->
                                            <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                                <img src="{{ asset('assets/images/new/political.jpg') }}" alt="Polical Communications" />
                                                <div class="opacity-extra-medium bg-gradient-dark-transparent"></div>
                                                <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">

                                                    <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                        <span class="text-white fw-600 fs-20">Political Communications</span>
                                                        <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Explore Services</span>
                                                        <a href="/services" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore Services</a>
                                                        <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                                    </div>
                                                    <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                                    </div>
                                                    <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                                    <a href="/services" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                                </div>
                                            </div>
                                            <!-- end interactive banner item -->
                                        </div>
                                        <!-- end slider item -->
                                        <!-- start slider item -->
                                        <div class="swiper-slide">
                                            <!-- start interactive banner item -->
                                            <div class="interactive-banner-style-09 border-radius-6px overflow-hidden position-relative">
                                                <img src="{{ asset('assets/images/new/ooh.jpg') }}" alt="Out-of-Home (OOH) Advertising" />
                                                <div class="opacity-very-light bg-slate-blue"></div>
                                                <div class="image-content h-100 w-100 ps-15 pe-15 pt-13 pb-13 md-p-10 d-flex justify-content-bottom align-items-start flex-column">

                                                    <div class="mt-auto d-flex align-items-start w-100 z-index-1 position-relative overflow-hidden flex-column">
                                                        <span class="text-white fw-600 fs-20"> Out-of-Home (OOH) Advertising</span>
                                                        <span class="content-title text-white fs-13 fw-500 text-uppercase ls-05px">Explore Services</span>
                                                        <a href="/services" class="content-title-hover fs-13 lh-24 fw-500 ls-05px text-uppercase text-white opacity-6 text-decoration-line-bottom">Explore Services</a>
                                                        <span class="content-arrow lh-42px rounded-circle bg-white w-50px h-50px ms-20px text-center"><i class="fa-solid fa-chevron-right text-dark-gray fs-16"></i></span>
                                                    </div>
                                                    <div class="position-absolute left-0px top-0px w-100 h-100 bg-gradient-regal-blue-transparent opacity-9">
                                                    </div>
                                                    <div class="box-overlay bg-gradient-base-color-transparent"></div>
                                                    <a href="/services" class="position-absolute z-index-1 top-0px left-0px h-100 w-100"></a>
                                                </div>
                                            </div>
                                            <!-- end interactive banner item -->
                                        </div>
                                        <!-- end slider item -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 text-center">
                            <i class="bi bi-envelope text-white d-inline-block align-middle icon-extra-medium me-10px md-m-5px"></i>
                            <div class="fs-18 text-white d-inline-block align-middle">Save your precious time and effort spent for finding a solution. <a href="/contact" class="text-white text-decoration-line-bottom">Contact us now</a></div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <!-- end section -->



    <!-- PROCESS  -->
    <!-- start section -->
    <section>
        <div class="container position-relative">
            <div class="row align-items-center mb-7">
                <div class="col-xxl-4 col-lg-5 md-mb-15 sm-mb-20 text-center text-lg-start">
                    <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Our Process</span>
                    <!-- <h3 class="text-dark-gray fw-700 ls-minus-2px mb-40px">Our Process</h3> -->
                    <div class="row row-cols-1" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">01</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin mb-20px">
                                    <span class="d-block fw-700 text-dark-gray fs-18">Discovery</span>
                                    <p class="w-90 lg-w-100 lh-24">Understand your brand, audience, and objectives.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->

                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">02</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin mb-20px">
                                    <span class="d-block fw-700 text-dark-gray fs-18">Strategy</span>
                                    <p class="w-90 lg-w-100 lh-24"> Develop a tailor-made communication and media plan.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->


                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">03</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin mb-20px">
                                    <span class="d-block fw-700 text-dark-gray fs-18">Execution</span>
                                    <p class="w-90 lg-w-100 lh-24">Implement campaigns with precision and attention to detail.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->


                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">04</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                    <span class="progress-step-separator bg-dark-gray opacity-1"></span>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin mb-20px">
                                    <span class="d-block fw-700 text-dark-gray fs-18">Monitoring</span>
                                    <p class="w-90 lg-w-100 lh-24"> Track performance metrics to optimize results.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->

                        <!-- start process step item -->
                        <div class="col-12 process-step-style-05 position-relative hover-box xs-mb-30px">
                            <div class="process-step-item d-flex">
                                <div class="process-step-icon-wrap position-relative">
                                    <div class="process-step-icon d-flex justify-content-center align-items-center mx-auto rounded-circle h-60px w-60px fs-14 bg-light-red fw-700 position-relative">
                                        <span class="number position-relative z-index-1 text-dark-gray">05</span>
                                        <div class="box-overlay bg-base-color rounded-circle"></div>
                                    </div>
                                </div>
                                <div class="process-content ps-30px last-paragraph-no-margin">
                                    <span class="d-block fw-700 text-dark-gray fs-18">Reporting</span>
                                    <p class="w-90 lg-w-100 lh-24"> Provide insights and recommendations for future campaigns.</p>
                                </div>
                            </div>
                        </div>
                        <!-- end process step item -->

                    </div>
                </div>
                <div class="col-lg-7 offset-xxl-1 position-relative md-mb-30px sm-mb-15"
                    data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <img src="assets/images/demo-corporate-10.png" class="position-relative z-index-9 top-40px" alt="">
                    <img src="assets/images/demo-corporate-03.png" class="absolute-middle-center xs-w-95" alt="">
                    <img src="assets/images/demo-corporate-05.png" class="position-absolute top-50px left-0px xs-left-15px"
                        data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
                        alt="">
                    <img src="assets/images/demo-corporate-06.png" class="position-absolute top-150px left-30"
                        data-bottom-top="transform: translateY(30px)" data-top-bottom="transform: translateY(-30px)"
                        alt="">
                    <img src="assets/images/demo-corporate-07.png" class="position-absolute top-50px right-30"
                        data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)"
                        alt="">
                    <img src="assets/images/demo-corporate-08.png"
                        class="position-absolute top-100px right-0px xs-right-15px"
                        data-bottom-top="transform: translateY(30px)" data-top-bottom="transform: translateY(-30px)"
                        alt="">
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-12 text-center align-items-center" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <div class="bg-base-color fw-700 text-white text-uppercase border-radius-30px ps-20px pe-20px fs-12 me-10px sm-m-5px d-inline-block align-middle">hurray</div>
                    <div class="fs-18 fw-500 text-dark-gray d-inline-block align-middle">Let's make something great work together. <a href="/contact" class="text-dark-gray text-decoration-line-bottom fw-700">Got a project in mind?</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->



    <!-- TESTIMONIAL  -->
    <!-- start section -->
    <section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px">
        <div class="container background-no-repeat background-position-top"
            style="background-image: url('assets/images/demo-corporate-bg-02.png')">
            <div class="row justify-content-center mb-3">
                <div class="col-xxl-6 col-xl-7 col-lg-8 col-md-9 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h3 class="text-dark-gray fw-700 ls-minus-1px">What People Are Saying</h3>
                </div>
            </div>
            <div class="row justify-content-center align-items-center mb-6 sm-mb-8" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="col-12 position-relative ps-8 pe-8 lg-ps-15px lg-pe-15px">
                    <div class="swiper magic-cursor testimonials-style-06" data-slider-options='{ "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav", "effect": "fade" } }'>
                        <div class="swiper-wrapper">
                            <!-- start testimonial item -->
                            @forelse($testimonialView as $testimonial)
                            <div class="swiper-slide">
                                <div class="row align-items-center justify-content-center">
                                    <div class="col-8 col-md-4 col-sm-6 text-center md-mb-30px">
                                        <img alt="" style="height: 200px; width: 200px; border-radius: 50%; object-fit: cover;" src="{{ asset('client_logos/' . $testimonial->client_logo) }}">
                                    </div>
                                    <div class="col-lg-5 col-md-7 last-paragraph-no-margin text-center text-md-start">
                                        <a href="#" class="mb-15px d-block"><img src="images/logo-monday-dark-blue-01.svg" class="h-35px" alt=""></a>
                                        <span class="mb-5px d-table fs-18 lh-30 fw-500 text-dark-gray">
                                            {{ $testimonial->testimonial }}
                                        </span>
                                        <span class="fs-15 text-uppercase fw-800 text-base-color ls-1px">{{ $testimonial->client_name }}</span>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <p class="text-danger"></p>
                            @endforelse
                            <!-- end testimonial item -->
                        </div>
                        <!-- start slider navigation -->
                        <div class="swiper-button-previous-nav swiper-button-prev md-left-0px"><i class="feather icon-feather-arrow-left icon-extra-medium text-dark-gray"></i></div>
                        <div class="swiper-button-next-nav swiper-button-next md-right-0px"><i class="feather icon-feather-arrow-right icon-extra-medium text-dark-gray"></i></div>
                        <!-- end slider pagination -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end section -->



    <!-- Partners  -->
    <!-- start section -->
    <section class="pt-0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 text-center mb-2 xs-mb-4" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <span class="text-dark-gray fw-600 fs-16 text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">Partners</span>
                </div>
            </div>
            <div class="row position-relative clients-style-08 mt-25px" data-anime='{ "opacity": [0,1], "duration": 600, "delay":200, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false}, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 3 }, "992": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                    <div class="swiper-wrapper marquee-slide">

                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/new/afe.jpeg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->

                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/new/ajebota.png') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->

                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/new/afe.jpeg') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->

                        <!-- start client item -->
                        <div class="swiper-slide">
                            <a href="javascript:void(0)"><img src="{{asset('assets/images/new/ajebota.png') }}" alt="" /></a>
                        </div>
                        <!-- end client item -->

                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Video section  -->
    <section class="pt-0">
        <div class="container-fluid">
            <div class="row justify-content-center appear anime-complete" data-anime="{ &quot;translateY&quot;: [0, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="">
                <div class="col-12">
                    <div class="border-radius-6px h-450px md-h-350px sm-h-400px d-flex flex-wrap align-items-center justify-content-center overflow-hidden cover-background box-shadow-quadruple-large pt-15" style="background-image: url('assets/images/new/video-home.jpeg')">
                        <div class="opacity-full-dark bg-gradient-regal-blue-transparent"></div>
                        <div class="row justify-content-center m-0">
                            <div class="col-lg-7 col-md-8 z-index-1 text-center text-md-start sm-mb-20px">
                                <h3 class="text-white mb-0 fw-400 fancy-text-style-4">We make the creative solutions for <span class="fw-600 appear" data-fancy-text="{ &quot;effect&quot;: &quot;rotate&quot;, &quot;string&quot;: [&quot;business!&quot;, &quot;problems!&quot;, &quot;brands!&quot;] }"><span class="anime-text words chars splitting" data-splitting="true" style="--word-total: 1; --char-total: 9;"><span class="word" data-word="business!" style="--word-index: 0;"><span class="char" data-char="b" style="--char-index: 0; opacity: 1; transform: rotateX(0deg);">b</span><span class="char" data-char="u" style="--char-index: 1; opacity: 1; transform: rotateX(0deg);">u</span><span class="char" data-char="s" style="--char-index: 2; opacity: 1; transform: rotateX(0deg);">s</span><span class="char" data-char="i" style="--char-index: 3; opacity: 1; transform: rotateX(0deg);">i</span><span class="char" data-char="n" style="--char-index: 4; opacity: 1; transform: rotateX(0deg);">n</span><span class="char" data-char="e" style="--char-index: 5; opacity: 1; transform: rotateX(0deg);">e</span><span class="char" data-char="s" style="--char-index: 6; opacity: 1; transform: rotateX(0deg);">s</span><span class="char" data-char="s" style="--char-index: 7; opacity: 1; transform: rotateX(0deg);">s</span><span class="char" data-char="!" style="--char-index: 8; opacity: 1; transform: rotateX(0deg);">!</span></span></span></span>
                                </h3>
                            </div>
                            <div class="col-md-2 position-relative z-index-1 text-center sm-mb-20px">
                                <a href="#" class="position-relative d-inline-block text-center border border-2 border-color-white rounded-circle video-icon-box video-icon-large popup-youtube">
                                    <span>
                                        <span class="video-icon">
                                            <i class="fa-solid fa-play fs-20 text-white"></i>
                                        </span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="w-100 text-center position-relative mt-auto pt-20px pb-25px ps-15px pe-15px border-top border-color-transparent-white-light">
                            <div class="fs-14 text-uppercase text-white fw-600 ls-05px">Let's make something great work together. <a href="/contact" class="text-decoration-line-bottom text-white">Got a project in mind?</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ARTICLES  -->
    <section class="bg-gradient-quartz-white border-radius-6px lg-border-radius-0px pb-0">
        <div class="container">
            <div class="row justify-content-center mb-3">
                <div class="col-lg-7 text-center appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [30, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 600, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 300, &quot;easing&quot;: &quot;easeOutQuad&quot; }">
                    <h3 class="text-dark-gray fw-700 ls-minus-1px" style="">Interesting articles</h3>
                </div>
            </div>
            <div class="row mb-5 sm-mb-7">
                <div class="col-12">
                    <ul class="blog-grid blog-wrapper grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large appear anime-child anime-complete" data-anime="{ &quot;el&quot;: &quot;childs&quot;, &quot;translateY&quot;: [50, 0], &quot;opacity&quot;: [0,1], &quot;duration&quot;: 1200, &quot;delay&quot;: 0, &quot;staggervalue&quot;: 150, &quot;easing&quot;: &quot;easeOutQuad&quot; }" style="position: relative; height: 578.26px;">
                        <li class="grid-sizer"></li>
                        <!-- start blog item -->
                        @forelse($homeBlogs as $blog)
                        <li class="grid-item">
                            <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                                <div class="blog-image">
                                    <a href="{{ route('blog.show', $blog->id) }}" class="d-block">
                                        <img src="{{ asset('blog_images/' . $blog->image) }}" style="width: 100%; height: 220px !important; object-fit: cover;" alt="Blog image" />
                                    </a>

                                </div>
                                <div class="card-body p-6 lg-p-6">
                                    <a href="{{ route('blog.show', $blog->id) }}" class="card-title mb-15px fw-700 fs-16 text-dark-gray d-inline-block w-90 md-w-100 lh-20">{{ $blog->title }}</a>
                                    <p class="fs-14 lh-18">{{ \Illuminate\Support\Str::words(strip_tags($blog->content), 15, '...') }}</p>
                                    <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-10 text-uppercase">
                                        <div class="me-auto">
                                            <span class="blog-date d-inline-block fw-700 text-dark-gray">{{ $blog->author }}</span>
                                            <div class="d-inline-block author-name fw-700 text-dark-gray">By <a href="{{ route('blog.show', $blog->id) }}" class="text-dark-gray text-decoration-line-bottom">{{ $blog->author }}</a></div>
                                        </div>
                                        <div class="like-count">
                                            <i class="fa-regular fa-calendar text-red"></i>
                                            <a href="{{ route('blog.show', $blog->id) }}"><span class="text-dark-gray align-middle fw-700">{{ $blog->created_at->format('jS M, Y') }}</span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="grid-item">
                            <p class="text-center text-danger">No blog posts available.</p>
                        </li>
                        @endforelse
                        <!-- end blog item -->
                    </ul>
                </div>
            </div>
        </div>
    </section>


</div>

<!-- start section -->
<section class="bg-dark-slate-blue pt-4 pb-4 lg-pt-6 lg-pb-6" data-parallax-background-ratio="0.5" style="background-image: url('images/demo-business-slider-01.jpg')" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
    <div class="opacity-medium bg-dark-slate-blue"></div>
    <div class="container z-index-1 position-relative">
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h4 class="alt-font text-white mb-0 fw-300 fancy-text-style-4">We make the creative solutions for
                    <span class="fw-600" data-fancy-text='{ "effect": "wave", "direction": "down", "string": ["business!", "problems!", "brands!"], "duration": 3500 }'></span>
                </h4>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

@endsection
