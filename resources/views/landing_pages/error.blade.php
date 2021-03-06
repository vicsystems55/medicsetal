@extends('layouts.landing_page')

@section('content')

    <!-- start home section -->
    <section class="home" id="home">
        <div class="container" id="ani-round">
            <div class="home-content">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h2 class="title mt-5 mt-lg-0">
                            Sorry no member with this link exists.
                        </h2>
                        <p class="f-16 my-4 text-muted">Please contact support for any questions.</p>
                        <button class="btn btn-primary"><i class="mdi mdi-cloud-download f-20 align-middle me-2"></i>
                            support@medicsetal.org</button>

                        <div class="get-link mt-4">
                            <a href="" class="text-primary font-weight-600 f-14"><span
                                    class="text-muted font-weight-500">Have questions?</span><span>Get Free From<i
                                        class="mdi mdi-arrow-right"></i></span> </a>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <div class="animation-image" id="home-animation">
                            <div style="" class="">
                                <div class="p-5"></div>
                           
                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                
                                    <lottie-player src="https://assets6.lottiefiles.com/packages/lf20_qyb2cbhe.json"  background="transparent"  speed="1"  style="max-width: 400px; max-height: 400px; "  class="mx-auto text-center"   autoplay></lottie-player>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- end section -->


  
    
@endsection