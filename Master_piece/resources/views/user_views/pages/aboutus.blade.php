

@extends('user_views.layout.master')

@section('title')
About us
@endsection


@section('css')
@endsection



@section('content')



    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="./assets/images/bg/header.jpg">
        <div class="container">
            <div class="row">

                <div class="col">

                    <div class="page-title">
                        <h1 class="title" style="color: white;">About us</h1>
                        <h2 class="title" style="color: #ccc; font-size: 25px;">
                            Create The <span style="color: #fcff60;">Strongest</span><br>
                             Version Of <span style="color: #fcff60;">Yourself</span>... </h2>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->







    <!-- About Section Start -->
    <div class="section section-padding pb-5">
        <div class="container">
            <div class="row learts-mb-n30">

                <div class="col-md-6 col-12 align-self-center learts-mb-30">
                    <div class="about-us3">
                        <span class="sub-title"></span>
                        <h2 class="title">Flex Gym</h2>
                        <div class="desc">
                            <p>The FlexGym website offers a single subscription that grants
                                 you access to a vast network of gyms for practicing various
                                  sports and exercises. <br/>  Do you have a gym and want to be part of a Flexgym family ?
                                  <br/>  Register with us now </p>
                        </div>
                        {{-- <a href="#" class="link">Learn more</a> --}}
                        <div class="">
                            <a href="{{ route('registerGym') }}">
                            <button class="btn btn-dark btn-outline-hover-dark">Be a Member</button>
                        </a>
                        </div>


                    </div>
                </div>
                <div class="col-md-6 col-12 text-center learts-mb-30">
                    <img src="assets/images/bg/about-us.jpg" alt="about-us" style="width: 470px; height: 550px;">
                </div>


            </div>
        </div>

    </div>
    <!-- About Section End -->



    <!-- Feature section -->
    <section class="feature-section bg-light" >
        <div class="container">


            <!-- Section Title Start -->
            <div class="section-title text-center" >
                <h2 class="title " >Create The Strongest Version Of Yourself.</h2>
            </div>
            <!-- Section Title End -->


            <div class="row">

                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="ib-icon">
                            <img src={{ asset('assets/img/dumbbell.png') }} alt="Logo"
                                style=" width: 70px;">
                        </div>
                        <h4 >Easy to use</h4>
                        <p   >Our platform is designed to be with user friendly in mind,
                             ensuring a simple and enjoyable experience for fitness. </p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="ib-icon">
                            <img src={{ asset('assets/img/clock.png') }} alt="Logo"
                            style=" width: 70px;">
                        </div>
                        <h4>Extended Expiry</h4>
                        <p >This enhancement is designed to offer you even
                             greater flexibility in managing your fitness journey. </p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="ib-icon">
                            <img src={{ asset('assets/img/exercise.png') }} alt="Logo"
                            style=" width: 65px;">
                        </div>
                        <h4>Multiple Gyms Options</h4>
                        <p >Our platform offers a diverse range of options to cater to
                             every fitness enthusiast's needs.  </p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Feature section end -->





    <!-- Feature Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row row-cols-md-3 row-cols-1 learts-mb-n30">

                <div class="col learts-mb-30">
                    <div class="icon-box4">
                        <div class="inner">
                            <div class="content">
                                <h3 class="title">Flexibility in use</h6>
                                <p>Easy to register and use, and responsive to screens.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col border-left border-right learts-mb-30">
                    <div class="icon-box4">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title">Suitable for everyone</h6>
                                <p>Suvscriptions that suit all needs and requirements.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col learts-mb-30">
                    <div class="icon-box4">
                        <div class="inner">
                            <div class="content">
                                <h6 class="title">SECURE PAYMENT</h6>
                                <img class="img-hover-color " src="assets/images/others/pay.webp" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Feature Section End -->


       <!-- Feature section -->
       {{-- <section class="feature-section section-padding">
        <div class="container">


            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title " style="margin-top: 100px;" >The real <span>workout</span> starts when you want to stop.</h2>
            </div>
            <!-- Section Title End -->


            <div class="row">

                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="ib-icon">
                            <i class="flaticon-004-dumbbell"></i>
                        </div>
                        <h4>Intense Workouts</h4>
                        <p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu
                            vehicula fringilla ut vitae orci. </p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="ib-icon">
                            <i class="flaticon-031-app-1"></i>
                        </div>
                        <h4>Intense Workouts</h4>
                        <p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu
                            vehicula fringilla ut vitae orci. </p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="ib-icon">
                            <i class="flaticon-010-podium"></i>
                        </div>
                        <h4>Intense Workouts</h4>
                        <p>Donec nec sapien in urna fermentum ornare. Morbi vel ultrices leo. Sed eu turpis eu arcu
                            vehicula fringilla ut vitae orci. </p>
                    </div>
                </div>


            </div>
        </div>
    </section> --}}
    <!-- Feature section end -->


    <!-- Video Banner Section Start -->
    <!-- <div class="section">
        <div class="container">
            <div class="video-banner2" data-bg-image="assets/images/banner/video/video-banner-2.webp">
                <div class="content">
                    <a href="https://www.youtube.com/watch?v=1jSsy7DtYgc" class="video-popup">
                        <img src="assets/images/icons/button-play-light.webp" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Video Banner Section End -->

    <!-- Feature Section Start -->
    <!-- <div class="section section-padding">
        <div class="container">

            <div class="row learts-mb-n30">

                <div class="col-xl-3 col-lg-4 col-12 me-auto learts-mb-30">
                    <h1 class="fw-400">The difference when you shop Learts!</h1>
                </div>
                <div class="col-lg-8 col-12 learts-mb-30">
                    <div class="row learts-mb-n30">

                        <div class="col-md-6 col-12 learts-mb-30">
                            <p class="text-heading fw-600 learts-mb-10">Free Shipping</p>
                            <p>Once receiving your order, we will turn your products around in 3-5 business days.</p>
                        </div>

                        <div class="col-md-6 col-12 learts-mb-30">
                            <p class="text-heading fw-600 learts-mb-10">Free Returns</p>
                            <p>We accept returns for freshly purchased products within 7 days from the payment.</p>
                        </div>

                        <div class="col-md-6 col-12 learts-mb-30">
                            <p class="text-heading fw-600 learts-mb-10">Superb Quality</p>
                            <p>We make commitments that the quality of our products will and always will be superb.</p>
                        </div>

                        <div class="col-md-6 col-12 learts-mb-30">
                            <p class="text-heading fw-600 learts-mb-10">Free Wrapping</p>
                            <p>Upon request, items bought as gifts from our store can receive free wrapping service.</p>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div> -->
    <!-- Feature Section End -->







    <!-- Instagram Section Start -->
    <!-- <div class="section section-padding border-top">
        <div class="container"> -->

            <!-- Section Title Start -->
            <!-- <div class="section-title2 text-center">
                <h3 class="sub-title">Follow us on Instagram</h3>
                <h2 class="title">@learts_shop</h2>
            </div> -->
            <!-- Section Title End -->

            <!-- <div class="instafeed instafeed-carousel instafeed-carousel1">
                <a class="instafeed-item" href="#">
                    <img src="assets/images/instagram/instagram-1.webp" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="instafeed-item" href="#">
                    <img src="assets/images/instagram/instagram-2.webp" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="instafeed-item" href="#">
                    <img src="assets/images/instagram/instagram-3.webp" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="instafeed-item" href="#">
                    <img src="assets/images/instagram/instagram-4.webp" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="instafeed-item" href="#">
                    <img src="assets/images/instagram/instagram-2.webp" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="instafeed-item" href="#">
                    <img src="assets/images/instagram/instagram-3.webp" alt="instagram image" />
                    <i class="fab fa-instagram"></i>
                </a>
            </div>

        </div>
    </div> -->
    <!-- Instagram Section End -->




@endsection

@section('scripts')
@endsection


