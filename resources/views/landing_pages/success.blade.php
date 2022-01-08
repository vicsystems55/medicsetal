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


  
    
@endsection