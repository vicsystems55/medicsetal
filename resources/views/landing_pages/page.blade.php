@extends('layouts.landing_page')

@section('content')

    <!-- start home section -->
    <section class="home" id="home">
        <div class="container" id="ani-round">
            <div class="home-content">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="title mt-5 mt-lg-0">
                            Hello, Im Sylvia
                        </h2>
                        <p class="f-16 my-4 text-muted">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Numquam soluta eius illo, recusandae tenetur saepe, eaque voluptate.</p>
                        <button class="btn btn-primary"><i class="mdi mdi-cloud-download f-20 align-middle me-2"></i>
                            Download free guide</button>

                        <div class="get-link mt-4">
                            <a href="" class="text-primary font-weight-600 f-14"><span
                                    class="text-muted font-weight-500">Have questions?</span><span>Get Free From<i
                                        class="mdi mdi-arrow-right"></i></span> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="animation-image" id="home-animation">
                            <div class="main-image mt-5 mt-lg-0 ms-lg-5 position-relative">
                                <img src="{{asset('landingpage1')}}/images/home/home-bg.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end section -->


    <!-- client section -->
    <section class="section pt-0 clients d-none">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="client-slider text-center">
                        <div class="tiny-slide">
                            <img src="{{asset('landingpage1')}}/images/clients/logo1.png" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="{{asset('landingpage1')}}/images/clients/logo2.png" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="{{asset('landingpage1')}}/images/clients/logo3.png" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="{{asset('landingpage1')}}/images/clients/logo4.png" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="{{asset('landingpage1')}}/images/clients/logo5.png" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="{{asset('landingpage1')}}/images/clients/logo6.png" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="{{asset('landingpage1')}}/images/clients/logo7.png" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="{{asset('landingpage1')}}/images/clients/logo8.png" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="{{asset('landingpage1')}}/images/clients/logo9.png" alt="" class="img-fluid">
                        </div>
                        <div class="tiny-slide">
                            <img src="{{asset('landingpage1')}}/images/clients/logo10.png" alt="" class="img-fluid">
                        </div>
                    </div>
                    <!--end client-slider-->
                </div>
                <!--end col-->
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start service -->
    <section class="section bg-light d-none" id="service d-none">
        <div class="container">
            <div class="row justify-content-center mb-4 pb-2">
                <div class="col-lg-6">
                    <div class="heading text-center">
                        <h6 class="text-muted f-16 fw-normal">Learning to Write as a Professional</h6>
                        <h2 class="mb-3">Start <span class="text-primary fw-normal"> your project </span> with these
                            <br> stunning pages.
                        </h2>
                        <p class="text-muted para-p mx-auto mb-0">Lorem ipsum dolor sit amet consectetur adipisicing
                            elit. Nulla veniam impedit hic, tempore esse voluptatum. </p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 mt-4 pt-2">
                    <div class="service-box text-center text-lg-start">
                        <div class="service-image">
                            <img src="{{asset('landingpage1')}}/images/service/img-1.png" alt="img-fluid">
                        </div>
                        <h5 class="fw-bold mt-4 mb-3">Customize Preferences</h5>
                        <p>Learners are given the right to arrange and customize their study schedule and timetable
                            based on preferences.</p>
                        <div class="button-link mt-2">
                            <a href="" class="f-14 fw-bold">Start hear <i
                                    class="mdi mdi-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 pt-2">
                    <div class="service-box text-center text-lg-start">
                        <div class="service-image">
                            <img src="{{asset('landingpage1')}}/images/service/img-2.png" alt="img-fluid">
                        </div>
                        <h5 class="fw-bold mt-4 mb-3">Truly Multipurpose</h5>
                        <p>Learners are given the right to arrange and customize their study schedule and timetable
                            based on preferences.</p>
                        <div class="button-link mt-2">
                            <a href="" class="f-14 fw-bold">Get Free Quote <i
                                    class="mdi mdi-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mt-4 pt-2">
                    <div class="service-box text-center text-lg-start">
                        <div class="service-image">
                            <img src="{{asset('landingpage1')}}/images/service/img-3.png" alt="img-fluid">
                        </div>
                        <h5 class="fw-bold mt-4 mb-3">Strategy Solutions</h5>
                        <p>Learners are given the right to arrange and customize their study schedule and timetable
                            based on preferences.</p>
                        <div class="button-link mt-2">
                            <a href="" class=" f-14 fw-bold">Start hear <i
                                    class="mdi mdi-arrow-right align-middle"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end service -->

    <!-- start features -->
    <section class="section " id="features">
        <div class="container">
            <div class="row align-items-center" id="part1">
                <div class="col-lg-7">
                    <div class="sec-image position-relative " id="sec-image">
                        <div class="bg-img overflow-hidden border-radius">
                            <img src="{{asset('landingpage1')}}/images/features/img-1.png" alt="" class="img-fluid">
                        </div>
                        <div class="youtube-icon ">
                            <a href="#watchvideomodal" data-bs-toggle="modal">
                                <img src="{{asset('landingpage1')}}/images/features/youtube.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div id="imgcontainer-1">
                            <div id="inner-2">
                                <div class="demo-img">
                                    <div class="demo-overlay">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 offset-lg-1 mt-5 mt-lg-0">
                    <h6 class="text-muted fw-normal">Your profit <span class="fw-bold">grows & enjoy</span></h6>
                    <h1 class="fw-bold mt-2">Get Awesome <span class="text-primary fw-normal">Companionship</span></h1>
                    <p class="mt-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus qui, pariatur nulla,
                        sint
                        voluptatibus explicabo voluptates aliquid dolorem suscipit nostrum expedita itaque nesciunt
                        autem ?</p>
                    <div class="get-link mt-4">
                        <a href="" class="text-primary font-weight-600"> Download free feedback <i
                                class="mdi mdi-arrow-right"></i></a>
                    </div>

                </div>
            </div>

            <div class="features-2" id="part2">
                <div class="row align-items-center">
                    <div class="col-lg-4 order-2 order-lg-1 mt-5 mt-lg-0">
                        <h6 class="text-muted fw-normal">Get started <span class="fw-bold">available courses</span></h6>
                        <h1 class="fw-bold mt-2">your success <span class="text-primary fw-normal">plan now!</span>
                        </h1>
                        <p class="mt-3"> Temporibus quasi adipisci eligendi quaerat iste debitis numquam deleniti labore
                            corporis
                            architecto, voluptas cupiditate distinctio?</p>
                        <div class="get-link mt-4">
                            <a href="" class="text-primary font-weight-600"> Download free feedback <i
                                    class="mdi mdi-arrow-right"></i></a>
                        </div>

                    </div>
                    <div class="col-lg-7 offset-lg-1 order-1 order-lg-2">
                        <div class="sec-image-2 position-relative " id="sec-image-2">
                            <div class="bg-img overflow-hidden border-radius">
                                <img src="{{asset('landingpage1')}}/images/features/img-2.png" alt="" class="img-fluid">
                            </div>
                            <div id="imgcontainer-2">
                                <div id="inner-3">
                                    <div class="demo-img-2">
                                        <div class="demo-overlay">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade bd-example-modal-lg" id="watchvideomodal" data-keyboard="false" tabindex="-1"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                <div class="modal-content hero-modal-0 bg-transparent">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <video id="VisaChipCardVideo" class="w-100" controls="">
                        <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                        <!--Browser does not support <video> tag -->
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!-- end features -->


    <!-- start testimonial -->
    <section class="section testi-slider position-relative" id="user">
        <div class="container-fluid">
            <div class="section-bottom-shape-two">
                <img src="{{asset('landingpage1')}}/images/features/shape.png" alt="">
            </div>

            <div class="row justify-content-center align-items-center">

                <div class="col-lg-8">
                    <div class="heading text-center">
                        <h6 class="text-muted f-16 fw-normal">Design Better Landing Pages For You</h6>
                        <h2 class="mb-3">Better<span class="text-primary fw-normal"> communicate </span> and your
                            moments.</h2>
                        <p class="text-muted para-p mx-auto mb-0">Aperiam consequatur nostrum fuga eaque quos
                            distinctio laboriosam <br> minima, magni eius delectus.</p>
                    </div>
                </div>
            </div>
            <!-- Slider main container -->
            <div class="swiper-container mt-5 pb-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide border-radius">
                        <h5 class="mb-4 text-black">Join millions of users and grow business. what say about?</h5>
                        <p class="f-16 text-muted">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                            Reprehenderit iure corporis corrupti eveniet eligendi vero nobis architecto praesentium.
                        </p>
                        <div class="d-flex align-items-center mt-4 pt-3">
                            <div class="flex-shrink-0">
                                <div class="user-image">
                                    <img src="{{asset('landingpage1')}}/images/users/img-1.jpg" alt="" class="avatar-lg rounded-circle">
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3 ">
                                <div class="user-info">
                                    <h6 class="text-black">Janice C. Campbe</h6>
                                    <p class="mb-0 text-muted">/ Embedded analytics</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide border-radius">
                        <h5 class="mb-4 text-black">Collaborate with your team
                            anytime anywhere.</h5>
                        <p class="f-16 text-muted">Otrsr sed urna tellus porta curabitur eget tellus dictum
                            consectetur
                            velit a in ultricies leo praesent rutrum sit amet euismod nulla intdum lectus.</p>
                        <div class="d-flex align-items-center mt-4 pt-3">
                            <div class="flex-shrink-0">
                                <div class="user-image">
                                    <img src="{{asset('landingpage1')}}/images/users/img-2.jpg" alt="" class="avatar-lg rounded-circle">
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3 ">
                                <div class="user-info">
                                    <h6 class="text-black">Richard S. Drews</h6>
                                    <p class="mb-0 text-muted">/ Manager</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide border-radius">
                        <h5 class="mb-4 text-black">Become a part of Borial bussiness community today</h5>
                        <p class="f-16 text-muted">Nam libero tempore, cum soluta nobis est eligendi optio cumque
                            nihil
                            impedit quo minus id quod maxime .</p>
                        <div class="d-flex align-items-center mt-4 pt-3">
                            <div class="flex-shrink-0">
                                <div class="user-image">
                                    <img src="{{asset('landingpage1')}}/images/users/img-3.jpg" alt="" class="avatar-lg rounded-circle">
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3 ">
                                <div class="user-info">
                                    <h6 class="text-black">Willimore Wilson</h6>
                                    <p class="mb-0 text-muted">/ Founder</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide border-radius">
                        <h5 class="mb-4 text-black">Become a part of Borial bussiness community today</h5>
                        <p class="f-16 text-muted">I feel confident imposing change on myself. It's a lot more fun
                            progressing than looking back. That's why scelerisque need throw curve balls.</p>
                        <div class="d-flex align-items-center mt-4 pt-3">
                            <div class="flex-shrink-0">
                                <div class="user-image">
                                    <img src="{{asset('landingpage1')}}/images/users/img-4.jpg" alt="" class="avatar-lg rounded-circle">
                                </div>
                            </div>
                            <div class="flex-grow-1 ms-3 ">
                                <div class="user-info">
                                    <h6 class="text-black">Brandon Carney</h6>
                                    <p class="mb-0 text-muted">/ Designer</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- navigation buttons -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
    <!-- end section -->


    <!-- start cta -->
    <section class="cta section" id="cta-ani">
        <div class="cta-image position-relative">
            <div class="container position-relative">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <h5 class="text-dark ">A simple and smart design grow <span class="text-primary">your
                                    business </span> </h5>
                            <h2 class="mt-3 fw-bold">Our mission Ultimate features to Grow Your Business.</h2>
                            <button class=" btn-lg btn-primary mt-4 f-14">Get started for free</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cta -->




    <!-- counter section-->
    <section class="counter ">
        <div class="container">
            <div class="row" id="counter">
                <div class="col-lg-3 p-lg-0">
                    <div class="counter-box py-0 py-lg-5 text-center position-relative">
                        <div class="side-border-left"></div>
                        <div class="py-5 pb-0">
                            <div class="counter-image">
                                <img src="{{asset('landingpage1')}}/images/counter/support.png" alt="">
                            </div>
                            <h2 class="counter_value fw-bold mt-2 text-primary" data-bs-target="1789">0</h2>
                            <h5 class="counter-caption mb-0 mt-3">Awesome Support</h5>
                        </div>
                        <div class="side-border-right"></div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 p-lg-0">
                    <div class="counter-box py-0 py-lg-5 text-center">
                        <div class="py-5 pb-0">
                            <img src="{{asset('landingpage1')}}/images/counter/project-running.png" alt="">
                            <h2 class="counter_value fw-bold mt-2 text-primary" data-bs-target="19">0</h2>
                            <h5 class="counter-caption mb-0 mt-3">Project Running</h5>
                        </div>
                        <div class="side-border-right"></div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 p-lg-0">
                    <div class="counter-box py-0 py-lg-5 text-center side-border">
                        <div class="py-5 pb-0">
                            <img src="{{asset('landingpage1')}}/images/counter/check.png" alt="">
                            <h2 class="counter_value fw-bold mt-2 text-primary" data-bs-target="24">0</h2>
                            <h5 class="counter-caption mb-0 mt-3">Project Complate</h5>
                        </div>
                    </div>
                </div>
                <!-- end col -->
                <div class="col-lg-3 p-lg-0">
                    <div class="counter-box py-0 py-lg-5 text-center side-border">
                        <div class="side-border-left"></div>
                        <div class="py-5">
                            <img src="{{asset('landingpage1')}}/images/counter/idea.png" alt="">
                            <h2 class="counter_value fw-bold mt-2 text-primary" data-bs-target="1090">0</h2>
                            <h5 class="counter-caption mb-0 mt-3">Strategy Solution</h5>
                        </div>
                        <div class="side-border-right"></div>
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
    <!-- end counter -->


    <!-- pricing section -->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <h6 class="text-muted fw-normal">Get Your Best Package</h6>
                        <h2 class="mb-3">Best <span class="text-primary fw-normal">Pricing</span> Package Start Business
                        </h2>
                        <p class="text-muted para-p mx-auto mb-0">Fugit, voluptatum. Cum earum reprehenderit quis, esse
                            dolorem quaerat. Recusandae officiis facilis quia quidem iusto labore temporibus.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="price-save-box bg-primary p-4 mt-5 border-radius">
                        <h2 class="text-white">Save your <br> <span class="fw-bold text-light">money now</span></h2>
                        <p class="mt-3 text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Temporibus nostrum nihil in nulla doloribus voluptatem.</p>
                        <p class="mt-3 text-white-50">Esse facere reiciendis error necessitatibus eum sed recusandae.
                        </p>
                        <div class="price-image">
                            <img src="{{asset('landingpage1')}}/images/pricing/investment.png" alt="">
                        </div>
                    </div>
                </div>

                <div class="col-lg-4  mt-5">
                    <div class="pricing-box box-shadow p-4 border-radius">
                        <div class="text-center mb-4">
                            <h6 class="text-primary">Wealth</h6>
                            <div class="price-title mt-2">
                                <div class="tag"></div>
                                <h6 class="mb-0 text-white">basic</h6>
                            </div>
                            <div class="price-tag mt-4">
                                <h2><sup>$</sup><span class="text-primary">0</span></h2>
                            </div>
                            <!-- <p class="text-muted mt-2">For small teams trying out Levonic <br> for an unlimited </p> -->

                            <div class="detail mt-4">
                                <p><span class="text-primary icon me-2">∎</span>10 GB Disk Space</p>
                                <p><span class="text-primary icon me-2">∎</span>1 Year Technical Support</p>
                                <p><span class="text-primary icon me-2">∎</span>SQL Database</p>
                            </div>

                        </div>
                        <button class="btn btn-primary rounded-pill position-absolute start-50 translate-middle-x">Get
                            started</button>
                    </div>
                </div>

                <div class="col-lg-4  mt-5">
                    <div class="pricing-box box-shadow p-4 border-radius">
                        <div class="text-center mb-4">
                            <h6 class="text-primary">Combination</h6>
                            <div class="price-title mt-2">
                                <div class="tag"></div>
                                <h6 class="mb-0 text-white">Premium</h6>
                            </div>
                            <div class="price-tag mt-4">
                                <h2><sup>$</sup><span class="text-primary">99</span></h2>
                            </div>
                            <!-- <p class="text-muted mt-2">For small teams trying out Levonic <br> for an unlimited </p> -->

                            <div class="detail mt-4">
                                <p><span class="text-primary icon me-2">∎</span>100 GB Disk Space</p>
                                <p><span class="text-primary icon me-2">∎</span>5 Year Technical Support</p>
                                <p><span class="text-primary icon me-2">∎</span>SQL Database</p>
                            </div>

                        </div>
                        <button class="btn btn-primary rounded-pill position-absolute start-50 translate-middle-x">Sign
                            up</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end pricing -->


    <!-- start faq  -->
    <section class="section faq" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-box text-center">
                        <h6 class="text-muted fw-normal">quickly find the help you need</h6>
                        <h2 class="mb-3">Our <span class="text-primary fw-normal">Frequently Ask Question</span> <br>
                            support center </h2>
                        <p class="text-muted para-p mx-auto mb-0">consectetur adipisicing elit. Eius, praesentium,
                            dignissimos placeat ad fugiat illum iusto dolorum nobis fuga, ut nemo.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center align-items-center">
                <div class="col-lg-6">
                    <div class="accordion mt-5" id="accordionExample">
                        <div class="faq-collaps faq-collaps-2">
                            <!-- start 1 -->
                            <div class="card mt-4">
                                <a data-bs-toggle="collapse" href="#collapse1" class="faq collapsed">
                                    <div class="card-header p-4" id="heading1">
                                        <h5 class="mb-0 text-dark">Pharetra convallis magna mattis?</h5>
                                    </div>
                                </a>
                                <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                    data-parent="#accordionExample">
                                    <div class="card-body pt-1">
                                        <p class="mb-0 text-muted">Vulputate lobortis tincidunt porttitor massa morbi
                                            suscipit mollis luctus ullamcorper phasellus ante finibus facilisis
                                            .</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end 1 -->

                            
                            <!-- start 2 -->
                            <div class="card mt-4">
                                <a data-bs-toggle="collapse" href="#collapse2" class="faq collapsed">
                                    <div class="card-header p-4" id="heading2">
                                        <h5 class="mb-0 text-dark">Condimentum porttitor at magna?</h5>
                                    </div>
                                </a>
                                <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                    data-parent="#accordionExample">
                                    <div class="card-body pt-1">
                                        <p class="mb-0 text-muted">Quisque tincidunt the malesuada aliquet ullamcorper
                                            Suspendisse lectus congue iaculis vitae purus Nullam.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end 2 -->

                            <!-- start 3 -->

                            <div class="card mt-4">
                                <a data-bs-toggle="collapse" href="#collapse3" class="faq collapsed">
                                    <div class="card-header p-4" id="heading3">
                                        <h5 class="mb-0 text-dark">Nullya lectus feugiat placerat?</h5>
                                    </div>
                                </a>
                                <div id="collapse3" class="collapse" aria-labelledby="heading3"
                                    data-parent="#accordionExample">
                                    <div class="card-body pt-1">
                                        <p class="mb-0 text-muted">Pellentesque tincidunt imperdiet metus interdum
                                            ligula tristique aenean facilisis congue congue libero interdum venenatis
                                            scelerisque sed massa elit pulvinar gravida.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- end 3 -->

                            <!-- start 4 -->
                            <div class="card mt-4">
                                <a data-bs-toggle="collapse" href="#collapse4" class="faq collapsed"
                                    aria-expanded="false" aria-controls="collapse4">
                                    <div class="card-header p-4" id="heading4">
                                        <h5 class="mb-0 text-dark">Manage catch one your coupens?</h5>
                                    </div>
                                </a>
                                <div id="collapse4" class="collapse" aria-labelledby="heading4"
                                    data-parent="#accordionExample">
                                    <div class="card-body pt-1">
                                        <p class="mb-0 text-muted">Vestibulum sodales turpis vestibulum praesent
                                            consectetur magna tortor interdum neque. </p>
                                    </div>
                                </div>
                            </div>
                            <!-- end 4 -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{asset('landingpage1')}}/images/faq/Questions.png" alt="" class="img-fluid">
                </div>
            </div>

        </div>
    </section>
    <!-- end faq -->


    <!-- start blog -->
    <section class="section bg-light d-none" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="text-center">
                        <h6 class="text-muted fw-normal">Latest on Our Blogs</h6>
                        <h2 class="mb-3">Increase <span class="text-primary fw-normal">conversion </span>with help our
                            images</h2>
                        <p class="text-muted para-p mx-auto mb-0"> ratione iure laborum, voluptatum iusto pariatur ipsa
                            vero debitis dolore, eaque natus, itaque perferendis eveniet voluptatem omnis nemo.</p>
                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-4 col-md-6 mt-4 mt-2">
                    <div class="blog-image overflow-hidden">
                        <img src="{{asset('landingpage1')}}/images/blog/img-1.jpg" alt="" class="img-fluid w-100">
                    </div>
                    <div class="blog-content mb-2">
                        <a href="">
                            <h6 class="mt-4 mb-2 text-uppercase f-14">Health</h6>
                        </a>
                        <a href="">
                            <h4>You need weightlose shoes?</h4>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center text-muted">
                            <i class="mdi mdi-account-outline f-22 "></i>
                            <p class="mb-0 ms-2">Md Shohel</p>
                        </div>
                        <div class="d-flex align-items-center text-muted ms-4">
                            <i class="mdi mdi-calendar-blank f-22 "></i>
                            <p class="mb-0 ms-2">September 25 2021</p>
                        </div>
                    </div>
                    <div class="blog-link">
                        <a href="" class="fw-bold f-14">Read more <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mt-4 mt-2">
                    <div class="blog-image overflow-hidden">
                        <img src="{{asset('landingpage1')}}/images/blog/img-2.jpg" alt="" class="img-fluid w-100">
                    </div>
                    <div class="blog-content mb-2">
                        <a href="">
                            <h6 class="mt-4 mb-2 text-uppercase f-14">food</h6>
                        </a>
                        <a href="">
                            <h4>We Don't Mack It Until You Order It.</h4>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center text-muted">
                            <i class="mdi mdi-account-outline f-22 "></i>
                            <p class="mb-0 ms-2">Md Shohel</p>
                        </div>
                        <div class="d-flex align-items-center text-muted ms-4">
                            <i class="mdi mdi-calendar-blank f-22 "></i>
                            <p class="mb-0 ms-2">october 16 2020</p>
                        </div>
                    </div>
                    <div class="blog-link">
                        <a href="" class="fw-bold f-14">Read more <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6  mt-4 mt-2">
                    <div class="blog-image overflow-hidden">
                        <img src="{{asset('landingpage1')}}/images/blog/img-3.jpg" alt="" class="img-fluid w-100">
                    </div>
                    <div class="blog-content">
                        <a href="">
                            <h6 class="mt-4 lh-1 text-uppercase f-14">Fitness</h6>
                        </a>
                        <a href="">
                            <h4 class="mt-3 fw-bold">Daily Workout With Fitness.</h4>
                        </a>
                    </div>
                    <div class="d-flex mb-3">
                        <div class="d-flex align-items-center text-muted">
                            <i class="mdi mdi-account-outline f-22 "></i>
                            <p class="mb-0 ms-2">Md Shohel</p>
                        </div>
                        <div class="d-flex align-items-center text-muted ms-4">
                            <i class="mdi mdi-calendar-blank f-22 "></i>
                            <p class="mb-0 ms-2">october 16 2020</p>
                        </div>
                    </div>
                    <div class="blog-link">
                        <a href="" class="fw-bold f-14">Read more <i class="mdi mdi-arrow-right align-middle"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog -->



    <!-- start cta -->
    <section id="subscribe" class="section cta-2">
        <div class="cta-image position-relative " id="cta-footer">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <h2 class="fw-bold">Sign up for our <span class="text-primary fw-normal">Newsletters</span>
                            </h2>
                            <p class="f-16 cta-title mt-4 mb-2">Subscribe To Our Newsletter For New Content,
                                Update And Giveaways!</p>
                            <p class="f-16 cta-title">Subscribe & get all related jobs notification.</p>

                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <form class="subscribe-form mt-4" action="#">
                                        <div class="input-group justify-content-center">
                                            <input type="email" class="form-control" id="exampleFormControlInput1"
                                                placeholder="name@example.com">
                                            <button class="btn btn-primary" type="button"
                                                id="subscribebtn">Subscribe</button>
                                        </div>
                                        <p class="f-14 mt-2">Please complete this required field.</p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cta -->
    
@endsection