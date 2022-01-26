@extends('layouts.landing_page')

@section('content')

    <!-- start home section -->
    <section class="home" id="home">
        <div class="container" id="ani-round">
            <div class="home-content">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h4 class="title mt-5 mt-lg-0">
                            Congratulations, your journey has began
                        </h4>
                        <h4 style="z-index: 999;" class="f-16 my-4 text-muted">Please check your mail for information on how to proceed.</h4>
                        

                        
                    </div>
                    <div class="col-lg-6">
                        <div class="sec-image position-relative " id="sec-image">
                            <div class="bg-img overflow-hidden border-radius">
                                <img src="{{asset('landingpage1')}}/images/features/img-22.png" alt="" class="img-fluid">
                            </div>
                            <div class="youtube-icon ">
                                <a href="#watchvideomodal2" data-bs-toggle="modal">
                                    <img src="{{asset('landingpage1')}}/images/features/youtube.png" alt="" class="img-fluid">
                                </a>
                            </div>
                            <div id="imgcontainer-1">
                                <div id="inner-2">
                                    <div class="demo-img d-none">
                                        <div class="demo-overlay">
    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="modal fade bd-example-modal-lg" id="watchvideomodal2" data-keyboard="false" tabindex="-1"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-dialog modal-lg">
                        <div class="modal-content hero-modal-0 bg-transparent">
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            <iframe src="https://player.vimeo.com/video/665062636?h=8ee9eaccac" width="100%" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>
                        </div>
                       
                    </div>
                </div>

                </div>
            </div>
        </div>

    </section>

    <section class="section " id="features">
        <div class="container ">

            @foreach ($packages as $package)

            <div class="features-2 " id="part2">
                <div class="row align-items-center">
                    <div class="col-lg-5 order-2 order-lg-1 mt-5 mt-lg-0">
               
                        <h1 class="fw-bold mt-2"><span class="text-primary fw-normal">{{$package->name}}</span>
                        </h1>
                        <p class="mt-3"> {{$package->description}}</p>
                        <div class="get-link mt-4">
                        NGN {{number_format($package->fee, 2)}}
                        </div>

                    </div>
                    <div class="col-lg-6 offset-lg-1 order-1 order-lg-2">
                        <div class="sec-image-2 position-relative " id="sec-image-2">
                            <div class="bg-img overflow-hidden border-radius">
                                <img style="max-height: 300px;" src="{{$package->featured_image}}" alt="" class="img-fluid">
                            </div>
                            <div id="imgcontainer-2">
                                <div id="inner-3">
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
           


          

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

            <div class="features-2" id="part2">

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
                    <div  class="col-lg-3 col-md-6  mt-5">
                        <input type="radio" class="" onclick="setAmount(this.value)" data-preference="{{$package->id}}" name="select" value="{{$package->fee * 100}}" id="">
                       
                            <div onclick="selectProduct(this.id)" id="{{$package->id}}" class=" pricing-box box-shadow p-4 border-radius ">
                                <input type="hidden" id="{{$package->fee * 100}}" value="{{$package->id}}">
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
        
                                    <div class="detail mt-4 text-left">

                               

                                    </div>
        
                                </div>
                                
                                    
                           
                                <button class="btn btn-primary rounded-pill position-absolute start-50 translate-middle-x  d-none">Sign Up</button>
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

        <section class="section faq " id="faq">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="title-box text-center">
                            
                            <h2 class="mb-3">Make Payment</h2>
                            
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
                                            <h5 class="mb-0 text-dark">Paystack.</h5>
                                        </div>
                                    </a>
                                    <div id="collapse1" class="collapse show" aria-labelledby="heading1"
                                        data-parent="#accordionExample">
                                        <div class="card-body pt-1">

                                            <form method="POST" action="{{ route('pay') }}" >
                                                <div class="row" >
                                                    <div class="">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control mb-2" name="firstname" value="" placeholder="Fullname"> {{-- required --}}
                                                        </div>

                                                        <div class="form-group">
                                                            <input type="text" class="form-control mb-2" name="email" value="{{$subscriber_email}}" placeholder="Email">
                                                        </div>
                                                        
                                                        <input type="hidden" id="amount" name="amount" value=""> {{-- required in kobo --}}
                                                        {{-- <input type="hidden" id="orderID" name="orderID" value="777"> --}}
                                                        {{-- <input type="hidden" name="quantity" value="2"> --}}
                                                        <input type="hidden" name="currency" value="NGN">
                                                         {{-- For other necessary things you want to add to your payload. it is optional though --}}
                                                        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
                                                        <input type="hidden" name="callback_url" value="{{config('app.url')}}payment_success" id="">

                                                        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}
                                            
                                                        <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}
                                            
                                                        <p>
                                                            <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
                                                                <i class="fa fa-plus-circle fa-lg"></i> Proceed
                                                            </button>
                                                        </p>
                                                    </div>
                                                </div>
                                            </form>

                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                <!-- end 1 -->
    
                                
                                <!-- start 2 -->
                                <div class="card mt-4">
                                    <a data-bs-toggle="collapse" href="#collapse2" class="faq collapsed">
                                        <div class="card-header p-4" id="heading2">
                                            <h5 class="mb-0 text-dark">Flutterwave</h5>
                                        </div>
                                    </a>
                                    <div id="collapse2" class="collapse" aria-labelledby="heading2"
                                        data-parent="#accordionExample">
                                        <div class="card-body pt-1">
                                            <button type="submit" class="btn btn-primary float-right">Submit</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- end 2 -->
    
                                <!-- start 3 -->
    
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                        
                            <lottie-player src="https://assets7.lottiefiles.com/packages/lf20_7Ht9wn.json"  background="transparent"  speed="1"  style="max-width: 400px; max-height: 400px; "  class="mx-auto text-center"   autoplay></lottie-player>
                        
                    </div>
                </div>
    
            </div>
        </section>



<style>
    input[type="radio"]:checked ~ div {
  box-shadow: 0 0 0 3px orange;
}
</style>


<script>
    function setAmount(valuex) {

        console.log(valuex)

       

        document.getElementById('amount').value = valuex;

        document.getElementById('orderID').value = document.getElementById(valuex).value;

        
    }
</script>
        

    


  
    
@endsection