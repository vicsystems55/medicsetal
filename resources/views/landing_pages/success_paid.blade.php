@extends('layouts.landing_page')

@section('content')

    <!-- start home section -->
    <section class="home" id="home">
        <div class="container" id="ani-round">
            <div class="home-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 mt-5">
                        <div class="animation-image" id="home-animation">
                            <div style="" class="">
                                <div class="p-5"></div>
                           
                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                                
                                    <lottie-player src="https://assets8.lottiefiles.com/packages/lf20_9n1h4nww.json"  background="transparent"  speed="1"  style="max-width: 400px; max-height: 400px; "  class="mx-auto text-center"   autoplay></lottie-player>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h2 class="title mt-5 mt-lg-0">
                            You have successfully subscribed to Medics Et Al Package
                        </h2>
                        <p class="f-16 my-4 text-muted">Please contact support for any questions.</p>
                        <a href="https://affiliate.medicsetal.org" class="btn btn-primary">
                            LOGIN</a>

                        <div class="get-link mt-4">
                           
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </section>
    <!-- end section -->


  
    
@endsection