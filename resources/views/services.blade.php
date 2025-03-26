@extends('layout.app')
@section('content')

<!-- start page title -->
<section class="pt-0 cover-background ipad-top-space-margin sm-pb-0"
    style="background-image:url('assets/images/new/Breadcrumb.jpg');">
    <div class="shape-image-animation bottom-0 p-0 w-100 d-none d-md-block">
        <svg xmlns="http://www.w3.org/2000/svg" widht="3000" height="400" viewbox="0 180 2500 200" fill="#ffffff">
            <path class="st1" d="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250">
                <animate attributename="d" dur="5s" values="M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 400 50 400 400 3000 250 L 3000 550 L 0 550 L 0 250;
                            M 0 250 C 1200 400 1200 50 3000 250 L 3000 550 L 0 550 L 0 250" repeatcount="indefinite">
                </animate>
            </path>
        </svg>
    </div>
    <div class="container">
        <div class="row align-items-center justify-content-center h-500px sm-h-300px">
            <div
                class="col-12 col-lg-8 col-md-10 position-relative text-center page-title-extra-large d-flex flex-wrap flex-column align-items-center justify-content-center"
                data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span
                    class="ps-25px pe-25px pt-5px pb-5px mb-15px text-uppercase text-white fs-12 ls-1px fw-600 border-radius-100px bg-gradient-dark-gray-transparent d-flex"><i
                        class="bi bi-megaphone text-white icon-small me-10px"></i>World class services</span>
                <h1 class="mb-0 text-white fw-600 ls-minus-1px">Our Services</h1>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->


<div class="box-layou">
    <!-- start section -->
    <section>
        <div class="container-fluid">

            <!-- faq  -->
            <div class="row align-items-center sm-mt-40px"
                data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <div class="col-12">
                    <div class="bg-very-light-gray p-8 md-p-3 xs-p-3 border-radius-6px overflow-hidden position-relative">
                        <div
                            class="position-absolute right-70px lg-right-20px top-minus-20px w-250px sm-w-180px xs-w-150px opacity-1">
                            <img src="images/demo-business-services-details-faq-icon.png" alt="">
                        </div>
                        <span
                            class="ps-25px pe-25px mb-20px text-uppercase text-base-color fs-12 lh-40 fw-700 border-radius-100px bg-gradient-light-gray-transparent d-inline-flex"><i
                                class="bi bi-patch-check fs-16 me-5px"></i>World Class Services</span>
                        <h3 class="fw-700 text-dark-gray ls-minus-1px">Our Services</h3>
                        <div class="accordion accordion-style-02" id="accordion-style-02" data-active-icon="icon-feather-minus"
                            data-inactive-icon="icon-feather-plus">

                            <!-- Brand Management -->
                            <div class="accordion-item active-accordion">
                                <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#brand-management" aria-expanded="true"
                                        data-bs-parent="#services-accordion">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-minus fs-20 md-fs-16"></i>
                                            <span class="fs-24 md-fs-18  fw-500">Brand Management</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="brand-management" class="accordion-collapse collapse show" data-bs-parent="#services-accordion">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                        <p class="text-dark-gray md-fs-16 ">We help brands craft their identity, strengthen their presence, and foster loyalty through consistent and impactful messaging.</p>
                                        <ul class="mt-2">
                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Brand strategy development</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Visual identity creation</span>
                                                </div>
                                            </div>
                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Market positioning</span>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <!-- Corporate Communications -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#corporate-communications" aria-expanded="false"
                                        data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-plus fs-20 md-fs-16"></i>
                                            <span class="fs-24 md-fs-18  fw-500">Corporate Communications</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="corporate-communications" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                        <p class="text-dark-gray md-fs-16">From internal messaging to external public relations, we ensure your voice is heard clearly and effectively.</p>
                                        <ul class="mt-2">
                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Strategic PR campaigns</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Crisis communication</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Stakeholder engagement</span>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Influencer Marketing -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#influencer-marketing" aria-expanded="false"
                                        data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-plus fs-20 md-fs-16"></i>
                                            <span class="fs-24 md-fs-18  fw-500">Influencer Marketing</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="influencer-marketing" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                        <p class="text-dark-gray md-fs-16">We collaborate with top influencers to amplify your brand message and build credibility in the digital space.</p>
                                        <ul class="mt-2">
                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Campaign planning and execution</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Influencer partnerships</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Social media strategy</span>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <!-- MSMEs and FINTECH Solutions -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#MSMEs-and-FINTECH-Solutions" aria-expanded="false"
                                        data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-plus fs-20 md-fs-16"></i>
                                            <span class="fs-24 md-fs-18  fw-500">MSMEs and FINTECH Solutions
                                            </span>
                                        </div>
                                    </a>
                                </div>
                                <div id="MSMEs-and-FINTECH-Solutions" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                        <p class="text-dark-gray md-fs-16">Tailored solutions to help small and medium-sized enterprises (MSMEs) and financial technology (FINTECH) companies scale their operations.</p>
                                        <ul class="mt-2">
                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Go-to-market strategies</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">product branding and launches</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Audience segmentation</span>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Political Communications -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#political-communications" aria-expanded="false"
                                        data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-plus fs-20 md-fs-16"></i>
                                            <span class="fs-24 md-fs-18  fw-500">Political Communications</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="political-communications" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                        <p class="text-dark-gray md-fs-16">We design compelling communication strategies to help politicians and political parties connect with their audience and achieve their goals.</p>
                                        <ul class="mt-2">
                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Campaign messaging</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Voter outreach programs</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Media relations and debates</span>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                            <!-- Out-of-Home (OOH) Advertising -->
                            <div class="accordion-item">
                                <div class="accordion-header border-bottom border-color-transparent-dark-very-light">
                                    <a href="#" data-bs-toggle="collapse" data-bs-target="#out-of-home-advertising" aria-expanded="false"
                                        data-bs-parent="#accordion-style-02">
                                        <div class="accordion-title mb-0 position-relative text-dark-gray pe-30px">
                                            <i class="feather icon-feather-plus fs-20 "></i>
                                            <span class="fs-24 md-fs-18 fw-500">Out-of-Home (OOH) Advertising</span>
                                        </div>
                                    </a>
                                </div>
                                <div id="out-of-home-advertising" class="accordion-collapse collapse" data-bs-parent="#accordion-style-02">
                                    <div class="accordion-body last-paragraph-no-margin border-bottom border-color-transparent-dark-very-light">
                                        <p class="text-dark-gray md-fs-16">Maximize your brand's visibility with strategically placed OOH ads across high-traffic locations.</p>
                                        <ul class="mt-2">
                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Digital billboards</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Transit advertising</span>
                                                </div>
                                            </div>

                                            <div class="feature-box feature-box-left-icon-middle overflow-hidden">
                                                <div class="feature-box-icon feature-box-icon-rounded w-25px h-25px bg-very-light-gray rounded-circle me-15px" style="background: #fff;">
                                                    <i class="fa-solid fa-check fs-12 text-base-color"></i>
                                                </div>
                                                <div class="feature-box-content">
                                                    <span class="fw-500 md-fw-400 md-fs-15">Street furniture campaigns</span>
                                                </div>
                                            </div>
                                        </ul>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row align-items-center text-center text-md-start mt-6">
                <div class="col sm-mb-20px"
                    data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h4 class="text-dark-gray fw-700 ls-minus-1px m-0">Get a free personal business consultation?</h4>
                </div>
                <div class="col-12 col-md-auto"
                    data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <a href="/contact" class="btn btn-extra-large btn-switch-text btn-dark-gray btn-rounded btn-box-shadow ls-0px">
                        <span>
                            <span class="btn-double-text" data-text="Free consultation">Free consultation</span>
                            <span><i class="feather icon-feather-mail"></i></span>
                        </span>
                    </a>
                </div>
            </div>
        </div>

    </section>
    <!-- end section -->
</div>




@endsection
