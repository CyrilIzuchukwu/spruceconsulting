@extends('layout.app')
@section('content')

<!-- start section -->
<section class="full-screen ipad-top-space-margin sm-h-600px" data-parallax-background-ratio="0.5" style="background-image: url('{{ asset('blog_images/' . $blog->image) }}');">
    <div class="opacity-light bg-dark-gray"></div>
    <div class="container-fluid z-index-1 position-relative h-100">
        <div class="row h-100 align-items-center">
            <div class="col-xxl-9 col-xl-11 col-lg-11 d-flex flex-column justify-content-center">
                <div class="ps-15 pe-15 md-ps-10 md-pe-10 sm-px-0" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
                    <span class="alt-font fs-20 text-white mb-3 d-inline-block fw-300">Posted by <a href="#" class="text-white text-white-hover fw-700 text-decoration-line-bottom">{{ $blog->author }}</a></span>
                    <h1 class="alt-font text-white fw-500 mb-5 ls-minus-2px">{{ $blog->title }}</h1>
                    <!-- <a href="#" class="btn btn-large btn-white btn-hover-animation-switch btn-box-shadow btn-rounded fw-600">Corporate</a> -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->


<!-- start section -->
<section>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

                <div class="text-center mt-6">
                    <h5 class="alt-font fw-600 text-dark-gray w-90 sm-w-100 mx-auto mb-15px">{{ $blog->title }}.</h5>
                    <span class="text-uppercase fs-15 ls-2px fw-600 alt-font">- {{ $blog->author }} -</span>
                </div>


                    <div class="dropcap-style-04 mt-4">
                        <p>
                            {!! $blog->content !!}
                        </p>
                    </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
@endsection
