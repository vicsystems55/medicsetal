@extends('layouts.landing_page')

@section('content')

    <!-- start home section -->
    <section class="home" id="home">
        <div class="container" id="ani-round">
            <div class="home-content">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="title mt-5 mt-lg-0">
                            Congratulations, you journey has began
                        </h2>
                        <p class="f-16 my-4 text-muted">Please check your mail for information on how to proceed.</p>
                        <button class="btn btn-primary"><i class="mdi mdi-cloud-download f-20 align-middle me-2"></i>
                            Download free guide</button>

                        <div class="get-link mt-4">
                            <a href="" class="text-primary font-weight-600 f-14"><span
                                    class="text-muted font-weight-500">Have questions?</span><span>Get Free From<i
                                        class="mdi mdi-arrow-right"></i></span> </a>
                        </div>
                    </div>
                    <div class="col-lg-6">
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

                </div>
            </div>
        </div>

    </section>

    <section class="section d-none" id="features">
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
    <!-- end section -->


        <!-- pricing section -->
        <section class="section bg-white" id="pricing">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <div class="text-center">
                            <h6 class="text-muted fw-normal">Get Your Best Package</h6>
                            <h2 class="mb-3">Best <span class="text-primary fw-normal">Medics Et Al</span> Packages
                            </h2>
    
                        </div>
                    </div>
                </div>
                <div class="row align-items-center">
                    {{-- <div class="col-lg-4">
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
                    </div> --}}
    
                    @foreach ($packages as $package)
                    <div class="col-lg-3 col-md-6  mt-5">
                        <div class="pricing-box box-shadow p-4 border-radius">
                            <div class="text-center mb-4">
                                <h6 class="text-primary">{{$package->name}}</h6>
                                <div class="price-title mt-2">
                                    <div class=""></div>
                                    <h6 class="mb-0 text-white">{{$package->duration}} Months</h6>
                                </div>
                                <div class="price-tag mt-4">
                                    <h4><sup>NGN</sup><span class="text-primary">{{number_format($package->fee, 2)}}</span></h4>
                                </div>
                                <!-- <p class="text-muted mt-2">For small teams trying out Levonic <br> for an unlimited </p> -->
    
                                <div class="detail mt-4">
                                    <p><span class="text-primary icon me-2">∎</span>Access to Health Education Resources</p>
    
                                </div>
    
                            </div>
                            <button class="btn btn-primary rounded-pill position-absolute start-50 translate-middle-x ">Sign Up</button>
                        </div>
                    </div>
                        
                    @endforeach
    
    
                    {{-- <div class="col-lg-3 col-md-6  mt-5">
                        <div class="pricing-box box-shadow p-4 border-radius">
                            <div class="text-center mb-4">
                                <h6 class="text-primary">Silver</h6>
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
                            <button class="btn btn-primary rounded-pill position-absolute start-50 translate-middle-x">Sign Up</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6  mt-5">
                        <div class="pricing-box box-shadow p-4 border-radius">
                            <div class="text-center mb-4">
                                <h6 class="text-primary">Gold</h6>
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
                            <button class="btn btn-primary rounded-pill position-absolute start-50 translate-middle-x">Sign Up</button>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6  mt-5">
                        <div class="pricing-box box-shadow p-4 border-radius">
                            <div class="text-center mb-4">
                                <h6 class="text-primary">Diamond</h6>
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
                            <button class="btn btn-primary rounded-pill position-absolute start-50 translate-middle-x">Sign Up</button>
                        </div>
                    </div> --}}
    
               
    
    
                </div>
            </div>
        </section>
        <!-- end pricing -->
        

    


  
    
@endsection