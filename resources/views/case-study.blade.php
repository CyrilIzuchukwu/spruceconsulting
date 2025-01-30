@extends('layout.app')
@section('content')

<!-- start page title -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(assets/images/demo-it-business-case-studies-title-bg.jpg)">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Case Study</h1>
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
<section class="mt-4 position-relative pt-0 bg-gradient-top-very-light-gray sm-pt-50px" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-12 tab-style-04 text-center">
                <!-- filter navigation -->
                <ul class="portfolio-filter nav nav-tabs justify-content-center border-0 fw-500">
                    <li class="nav active"><a data-filter="*" href="#">All</a></li>
                    <li class="nav"><a data-filter="*" href="#">All</a></li>
                    <li class="nav"><a data-filter=".digital" href="#">Digital</a></li>
                    <li class="nav"><a data-filter=".branding" href="#">Branding</a></li>
                    <li class="nav"><a data-filter=".web" href="#">Web</a></li>
                </ul>
                <!-- end filter navigation -->
            </div>
        </div>
        <div class="row mb-8 sm-mb-0">
            <div class="col-12 filter-content p-md-0">
                <ul class="portfolio-modern portfolio-wrapper grid-loading grid grid-3col xxl-grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large">
                    <li class="grid-sizer"></li>
                    <!-- start portfolio item -->
                    <li class="grid-item selected digital transition-inner-all">
                        <a href="demo-it-business-single-project-gallery.html">
                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-4px">
                                    <img src="assets/images/demo-it-business-portfolio-01.jpg" alt="">
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">Branding</div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">Tailoring</div>
                                        </div>
                                        <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item selected branding transition-inner-all">
                        <a href="demo-it-business-single-project-gallery.html">
                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-6px">
                                    <img src="assets/images/demo-it-business-portfolio-02.jpg" alt="">
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">Design</div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">Spanio</div>
                                        </div>
                                        <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end portfolio item -->
                
                    <!-- start portfolio item -->
                    <li class="grid-item selected digital transition-inner-all">
                        <a href="demo-it-business-single-project-gallery.html">
                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-6px">
                                    <img src="assets/images/demo-it-business-portfolio-04.jpg" alt="">
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">Brochure</div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">Cropo</div>
                                        </div>
                                        <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item web branding transition-inner-all">
                        <a href="demo-it-business-single-project-gallery.html">
                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-6px">
                                    <img src="assets/images/demo-it-business-portfolio-05.jpg" alt="">
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">Design</div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">Violator</div>
                                        </div>
                                        <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item web digital transition-inner-all">
                        <a href="demo-it-business-single-project-gallery.html">
                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-6px">
                                    <img src="assets/images/demo-it-business-portfolio-06.jpg" alt="">
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">Digital</div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">Pixflow</div>
                                        </div>
                                        <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item web digital transition-inner-all">
                        <a href="demo-it-business-single-project-gallery.html">
                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-6px">
                                    <img src="assets/images/demo-it-business-portfolio-07.jpg" alt="">
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">Packaging</div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">Potato</div>
                                        </div>
                                        <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item web digital transition-inner-all">
                        <a href="demo-it-business-single-project-gallery.html">
                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-6px">
                                    <img src="assets/images/demo-it-business-portfolio-08.jpg" alt="">
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">Photography</div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">Cortifiel</div>
                                        </div>
                                        <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end portfolio item -->
                    <!-- start portfolio item -->
                    <li class="grid-item web digital transition-inner-all">
                        <a href="demo-it-business-single-project-gallery.html">
                            <div class="portfolio-box">
                                <div class="portfolio-image border-radius-6px">
                                    <img src="assets/images/demo-it-business-portfolio-09.jpg" alt="">
                                </div>
                                <div class="portfolio-hover box-shadow-extra-large">
                                    <div class="bg-white d-flex align-items-center align-self-end text-start border-radius-4px ps-30px pe-30px pt-20px pb-20px lg-p-20px w-100">
                                        <div class="me-auto">
                                            <div class="fs-12 fw-500 text-medium-gray text-uppercase lh-24">Brochure</div>
                                            <div class="fw-700 text-dark-gray text-uppercase lh-initial">Visionen</div>
                                        </div>
                                        <div class="ms-auto"><i class="feather icon-feather-plus icon-extra-medium text-dark-gray lh-36"></i></div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </li>
                    <!-- end portfolio item -->
                </ul>
            </div>
        </div>
    </div>

</section>
<!-- end section -->





@endsection
