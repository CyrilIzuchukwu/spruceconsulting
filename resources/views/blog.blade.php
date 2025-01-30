@extends('layout.app')
@section('content')

<!-- start page title -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(assets/images/demo-business-blog-title-bg.jpg)">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Latest Blogs</h1>
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
<section id="down-section" style="padding-inline: 20px;">
    <div class="container-fluid">
        <div class="row g-0">
            <!-- start features box item -->
            <div class="col-12">
                <ul class="blog-grid blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card border-0 border-radius-5px box-shadow-quadruple-large box-shadow-quadruple-large-hover">
                            <div class="blog-image">
                                <a href="demo-corporate-blog-single-clean.html" class="d-block"><img src="assets/images/demo-corporate-blog-01.jpg" alt="" /></a>

                            </div>
                            <div class="card-body p-6 lg-p-6">
                                <a href="" class="card-title mb-15px fw-700 fs-16 text-dark-gray d-inline-block w-90 md-w-100 lh-20">Build up healthy habits and strong peaceful life.</a>
                                <p class="fs-14 lh-18">Lorem ipsum dolor consectetur adipiscing eiusmod tempor...</p>
                                <div class="author d-flex justify-content-center align-items-center position-relative overflow-hidden fs-10 text-uppercase">
                                    <div class="me-auto">
                                        <span class="blog-date d-inline-block fw-700 text-dark-gray">30 August 2021</span>
                                        <div class="d-inline-block author-name fw-700 text-dark-gray">By <a href="demo-corporate-blog.html" class="text-dark-gray text-decoration-line-bottom">Den viliamson</a></div>
                                    </div>
                                    <div class="like-count">
                                        <i class="fa-regular fa-calendar text-red"></i>
                                        <a href=""><span class="text-dark-gray align-middle fw-700">25th Jan, 2024</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                </ul>
            </div>
            <div class="col-12 mt-5 md-mt-7 d-flex justify-content-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay":0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <ul class="pagination pagination-style-01 fs-13 fw-500 mb-0">
                    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-left fs-18 d-xs-none"></i></a></li>
                    <li class="page-item"><a class="page-link" href="#">01</a></li>
                    <li class="page-item active"><a class="page-link" href="#">02</a></li>
                    <li class="page-item"><a class="page-link" href="#">03</a></li>
                    <li class="page-item"><a class="page-link" href="#">04</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="feather icon-feather-arrow-right fs-18 d-xs-none"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->





@endsection
