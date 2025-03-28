@extends('layout.app')
@section('content')

<!-- start page title -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(assets/images/new/Breadcrumb.jpg)">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>About Us</h1>
            </div>
            <div class="down-section text-center" data-anime='{ "translateY": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <a href="#down-section" aria-label="scroll down" class="section-link">
                    <div class="d-flex justify-content-center align-items-center mx-auto rounded-circle fs-30 text-white">
                        <i class="feather icon-feather-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->



<!-- start section -->
<section id="down-section">
    <div class="container-fluid">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-10 position-relative z-index-1 md-mb-40px">
                <div class="atropos" data-atropos="">
                    <div class="atropos-scale" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <div data-atropos-offset="3">
                                    <img src="{{ asset('assets/images/new/about-who-we-are.jpg') }}" class="border-radius-6px w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute-middle-right md-absolute-middle-center right-minus-45px md-right-auto d-inline-block text-center z-index-9">
                    <a href="" class="bg-white box-shadow-extra-large rounded-circle video-icon-box video-icon-extra-large popup-youtube d-inline-block" data-anime='{ "translate": [0, 0], "scale": [0,1], "duration": 1000, "delay": 300, "staggervalue": 300, "easing": "easeOutBack" }'>
                        <span>
                            <span class="video-icon bg-white">
                                <i class="fa-solid fa-play text-base-color"></i>
                                <span class="video-icon-sonar">
                                    <span class="video-icon-sonar-bfr bg-base-color opacity-9"></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-lg-1 col-md-9 ps-6 text-center text-lg-start lg-ps-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">About Spruce Consulting</span>
                <h3 class="fw-600 text-dark-gray ls-minus-2px alt-font sm-w-80 xs-w-100 mx-auto sm-mb-20px">Who we are</h3>
                <p>Spruce Consulting is a premier media agency based in Nigeria, dedicated to helping brands, individuals, and organizations harness the power of digital media and out-of-home (OOH) advertising.</p>
                <p> We are passionate about driving meaningful connections between brands and their audiences, creating campaigns that inspire, inform, and engage.</p>
                <a href="/services" class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">Our services<i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
        <div class="row align-items-center justify-content-center mt-7 ps-5 sm-mt-35px lg-ps-0 pe-5 lg-pe-0">
            <div class="col-md-6 col-sm-8 md-mb-35px">
                <div class="row align-items-center justify-content-center" data-anime='{ "translateY":[0, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div class="col-auto"><span class="alt-font text-dark-gray fw-600 fs-130 lg-fs-110 ls-minus-7px">2</span></div>
                    <div class="col-5 col-xl-4 col-lg-5 col-sm-6">
                        <h6 class="fw-500 text-dark-gray alt-font m-0 ls-minus-1px">Years working experience.</h6>
                    </div>
                    <div class="col-3 col-xl-3 col-md-2 text-center d-none d-lg-inline-block"><span class="fw-400 fs-110 text-base-color position-relative top-minus-10px">|</span></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 overflow-hidden">
                <div class="row align-items-center" data-anime='{ "el": "childs", "translateY":[0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div class="col-sm-6 last-paragraph-no-margin text-center xs-mb-35px">
                        <h2 class="fw-700 text-dark-gray mb-5px alt-font">20+</h2>
                        <span class="fs-18 alt-font ls-minus-05px fw-500 text-dark-gray">Project completed</span>
                        <!-- <p class="lh-24">Lorem simply text</p> -->
                    </div>
                    <div class="col-sm-6 last-paragraph-no-margin text-center">
                        <h2 class="fw-700 text-dark-gray mb-5px alt-font">1K</h2>
                        <span class="fs-18 alt-font ls-minus-05px fw-500 text-dark-gray">Satisfied customer</span>
                        <!-- <p class="lh-24">Lorem simply text</p> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="py-0 sm-pt-50px" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
    <div class="container overlap-section">
        <div class="row justify-content-center g-0">
            <div class="col-auto text-center last-paragraph-no-margin icon-with-text-style-08 pt-20px pb-20px ps-8 pe-8 md-ps-30px md-pe-30px bg-white border border-color-extra-medium-gray box-shadow-medium-bottom border-radius-100px xs-border-radius-10px">
                <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-chat-text icon-extra-medium text-base-color"></i>
                    </div>
                    <div class="feature-box-content last-paragraph-no-margin text-dark-gray text-uppercase fs-15 fw-700 ls-05px">
                        Let's make something great work together. <a href="/contact" class="text-base-color text-decoration-line-bottom-medium border-1">Got a project in mind?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->




<!-- start section -->
<section class="position-relative overflow-hidden">
    <div class="container-fluid">
        <div class="row justify-content-center align-items-center mb-3">
            <div class="col-xl-5 col-lg-6 md-mb-14 sm-mb-18 xs-mb-23 position-relative" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="w-75 sm-w-80" data-animation-delay="200" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                    <img src="{{ asset('assets/images/new/who-we-are1.jpg') }}" alt="" class="border-radius-6px w-100">

                </div>
                <div class="w-55 overflow-hidden position-absolute right-15px xs-w-55 bottom-minus-50px" data-shadow-animation="true" data-animation-delay="100" data-bottom-top="transform: translateY(20px)" data-top-bottom="transform: translateY(-20px)">
                    <img src="{{ asset('assets/images/new/who-we-are21.jpg') }}" alt="" class="border-radius-6px box-shadow-quadruple-large w-100" />
                </div>
            </div>
            <div class="col-xl-5 offset-xl-1 col-lg-6 text-center text-lg-start" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 800, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="swiper position-relative magic-cursor" data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev" }, "effect": "slide" }'>
                    <div class="swiper-wrapper mb-10px">
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Company Mission</span>
                            <h3 class="text-dark-gray fw-700 ls-minus-1px mb-20px">Innovative media solutions for growth</h3>
                            <p class="w-95 xl-w-100">To deliver cutting-edge media solutions that combine creativity, technology, and data-driven insights, empowering businesses and individuals to achieve sustainable growth.</p>
                        </div>
                        <!-- end text slider item -->
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Company Vision</span>
                            <h3 class="text-dark-gray fw-700 ls-minus-1px mb-20px">Building trusted household brands.</h3>
                            <p class="w-95 xl-w-100">Our vision is to be the go-to media partner for transforming brands into trusted household names through innovative communication strategies.</p>
                        </div>
                        <!-- end text slider item -->
                        <!-- start text slider item -->
                        <div class="swiper-slide">
                            <span class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-14 lh-42px fw-700 border-radius-100px bg-gradient-very-light-gray-transparent d-inline-block">Company Value</span>
                            <h3 class="text-dark-gray fw-700 ls-minus-1px mb-20px">Trust, innovation, and excellence</h3>
                            <p class="w-95 xl-w-100">We are committed to integrity, creativity, and excellence in delivering impactful media solutions that drive long-term success for our clients.</p>
                        </div>
                        <!-- end text slider item -->
                    </div>
                    <div class="d-flex justify-content-center justify-content-lg-start">
                        <!-- start slider navigation -->
                        <div class="slider-one-slide-prev-1 swiper-button-prev slider-navigation-style-04 border border-color-extra-medium-gray bg-white"><i class="bi bi-arrow-left-short icon-very-medium text-dark-gray"></i></div>
                        <div class="slider-one-slide-next-1 swiper-button-next slider-navigation-style-04 border border-color-extra-medium-gray bg-white"><i class="bi bi-arrow-right-short icon-very-medium text-dark-gray"></i></div>
                        <!-- end slider navigation -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="images/demo-corporate-about-bg-01.png" class="position-absolute bottom-minus-50px right-minus-50px z-index-minus-1" data-bottom-top="transform: rotate(0deg) translateY(0)" data-top-bottom="transform:rotate(-15deg) translateY(0)" alt="" />
</section>
<!-- end section -->


<!-- start section -->
<section class="bg-gradient-quartz-white border-radius-6px">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-xl-5 col-md-7 col-lg-6 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">Creative team</span>
                <h3 class="text-dark-gray fw-700 ls-minus-1px">Team Members</h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <!-- start team member item -->
            @forelse($oursTeams as $team)
            <div class="col team-style-08 border-radius-6px md-mb-30px">
                <figure class="mb-0 position-relative overflow-hidden border-radius-4px">
                    <img src="{{ asset('team_images/' . $team->image) }}" alt="{{ $team->name }}" />
                    <figcaption class="w-100 h-100 d-flex align-items-end p-13 lg-p-8 md-p-10 bg-gradient-base-transparent border-radius-6px">
                        <div class="w-100">
                            <span class="team-member-name fw-500 text-white d-block">{{ $team->name }}</span>
                            <span class="member-designation fs-15 lh-20 text-white d-block">{{ $team->bio }}</span>
                        </div>
                        <div class="social-icon d-flex flex-column flex-shrink-1">
                            <a href="https://www.twitter.com/" target="_blank" class="text-dark-gray bg-white"><i class="fa-brands fa-twitter icon-small"></i></a>
                        </div>
                    </figcaption>
                </figure>
            </div>
            @empty
            <p class="text-center text-muted">Not available.</p>
            @endforelse
            <!-- end team member item -->
        </div>
    </div>
</section>
<!-- end section -->

<!-- start section -->
<section class="pt-0">
    <div class="container">

        <div class="row justify-content-center">
            <div class="col-lg-5 text-center mb-2 xs-mb-4" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="text-dark-gray fw-600 fs-16 text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">Partners</span>
            </div>
        </div>

        <div class="row position-relative clients-style-08 mt-25px" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 800, "delay":100, "staggervalue": 150, "easing": "easeOutQuad" }'>
            <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false, "pauseOnMouseEnter": false}, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 4 }, "768": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide" style="display: flex; gap: 20px;">
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
<!-- end section -->




@endsection
