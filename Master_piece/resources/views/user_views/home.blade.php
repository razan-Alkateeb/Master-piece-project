@extends('user_views.layout.master')

@section('title')
    Home
@endsection

@section('css')
    {{-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'> --}}
    <link rel="stylesheet" href={{ asset('assets/cssp/reset.css') }}> <!-- CSS reset -->
    <link rel="stylesheet" href={{ asset('assets/cssp/style.css') }}> <!-- Resource style -->
    <script src={{ asset('assets/jsp/modernizr.js') }}></script> <!-- Modernizr -->
@endsection




@section('content')


    <!-- Slider main container Start -->
    <div class="home1-slider swiper-container">
        <div class="swiper-wrapper">
            <div class="home1-slide-item swiper-slide" data-swiper-autoplay="5000" data-bg-image="assets/images/bg/main1.jpeg">
                <div class="home1-slide1-content">
                    <span class="bg"></span>
                    <span class="slide-border"></span>
                    <span class="icon"></span>
                    <h2 style="font-size: 5rem">Flex Gym</h2>
                    <h3 style="font-size: 3rem">Multiple Gyms Options</h3>
                    <div class="link mt-4"><a href="#" style="font-size: 2rem">Subscription now</a></div>
                </div>
            </div>
            <div class="home1-slide-item swiper-slide" data-swiper-autoplay="5000"
                data-bg-image="assets/images/bg/main2.jpeg">
                <div class="home1-slide2-content">
                    <span class="bg" style="background-color: white;"></span>
                    <span class="slide-border"></span>
                    <span class="icon"></span>
                    <h2 style="font-size: 5rem">Flex Gym</h2>
                    <h3 style="font-size: 3rem">Easy to use</h3>
                    <div class="link mt-4"><a href="#" style="font-size: 2rem">Subscription now</a></div>
                </div>
            </div>
            <div class="home1-slide-item swiper-slide" data-swiper-autoplay="5000"
                data-bg-image="assets/images/bg/main3.jpeg">
                <div class="home1-slide3-content">
                    <h2 style="font-size: 5rem">Flex Gym</h2>
                    <h3 style="font-size: 3rem">Extended Expiry</h3>
                    <div class="link mt-4"><a href="#" style="font-size: 2rem">Subscription now</a></div>
                </div>
            </div>
        </div>
        <div class="home1-slider-prev swiper-button-prev"><i class="ti-angle-left"></i></div>
        <div class="home1-slider-next swiper-button-next"><i class="ti-angle-right"></i></div>
    </div>
    <!-- Slider main container End -->




    <!-- About us Section Start -->
    <div class="section mt-5 ">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-12 mx-auto">
                    <div class="section-title text-center m-4">
                        <div class="inner">
                            <h2 class="title p-5">Live out your life</h2>
                            <h4>WELCOME TO FLEXGYM</h5>
                                <div class=" p-5">
                                    <p style=" line-height: 1.5em;">Welcome to our exclusive fitness community! At our subscription-based
                                         gym website, we offer an unparalleled fitness experience designed to
                                          elevate your health and well-being. With a diverse range of expertly
                                           crafted workout programs, state-of-the-art equipment, and access to highly
                                            qualified trainers, our platform is your gateway to achieving your fitness goals.
                                             </p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About us Section End -->


    <!-- Separator -->
    <div class="section section-title">
        <div class="container">
            <hr class="m-5">
        </div>
    </div>
    <!-- Separator -->


    <!-- Feature section -->
    <section class="feature-section " style="padding-bottom:10rem;">
        <div class="container">


            <!-- Section Title Start -->
            <div class="section-title text-center">
                <h2 class="title " style="margin-top: 100px;">Create The Strongest
                    Version Of Yourself.</h2>
            </div>
            <!-- Section Title End -->


            <div class="row">

                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="ib-icon">
                            <img src={{ asset('assets/img/dumbbell.png') }} alt="Logo" style=" width: 70px;">
                        </div>
                        <h4 style="font-size: 3rem">Easy to use</h4>
                        <p style="font-size: 2rem">Our platform is designed to be with user friendly in mind,
                            ensuring a simple and enjoyable experience for fitness. </p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="ib-icon">
                            <img src={{ asset('assets/img/clock.png') }} alt="Logo" style=" width: 70px;">
                        </div>
                        <h4 style="font-size: 3rem">Extended Expiry</h4>
                        <p style="font-size: 2rem">This enhancement is designed to offer you even
                            greater flexibility in managing your fitness journey. </p>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="icon-box-item">
                        <div class="ib-icon">
                            <img src={{ asset('assets/img/exercise.png') }} alt="Logo" style=" width: 65px;">
                        </div>
                        <h4 style="font-size: 3rem">Multiple Gyms Options</h4>
                        <p style="font-size: 2rem">Our platform offers a diverse range of options to cater to
                            every fitness enthusiast's needs. </p>
                    </div>
                </div>


            </div>
        </div>
    </section>
    <!-- Feature section end -->




    <!-- Roadmap Start -->
    <div class="section section-fluid section-padding bg-light" style=" margin-bottom: 75px;">
        <div class="container">

            <!-- Section Title Start -->
            <div class="section-title text-center">
                {{-- <h3 class="sub-title">Shop by categories</h3> --}}
                <h2 class="title title-icon-both">How to use</h2>
            </div>
            <!-- Section Title End -->

            <div class="row justify-content-center">

                <div class="col-md-3 learts-mb-40 ">
                    <div class="category-banner5 ">
                        <a href="#" class="inner p-3">
                            <div class="image"><img src={{ asset('assets/img/register.png') }} alt="image"></div>
                            <div class="content">
                                <h3 class="title">Register on our website easily </h3>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-1 learts-mb-40 d-flex align-items-center justify-content-center">
                    <img src={{ asset('assets/img/right-arrow.png') }} alt="Logo" style=" width: 5rem;">
                </div>
                <div class="col-md-3 learts-mb-40">
                    <div class="category-banner5">
                        <a href="#" class="inner p-3">
                            <div class="image"><img src={{ asset('assets/img/select.png') }} alt="image"></div>
                            <div class="content">
                                <h3 class="title">Choose the subscription that suits you</h3>

                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-1 learts-mb-40 d-flex align-items-center justify-content-center">
                    <img src={{ asset('assets/img/right-arrow.png') }} alt="Logo" style=" width: 5rem;">
                </div>
                <div class="col-md-3 learts-mb-40">
                    <div class="category-banner5">
                        <a href="#" class="inner p-3">
                            <div class="image"><img src={{ asset('assets/img/workout.png') }} alt="image"></div>
                            <div class="content">
                                <h3 class="title">Enjoy a large number of gyms in different places</h3>

                            </div>
                        </a>
                    </div>
                </div>


            </div>

        </div>
    </div>
    <!-- Roadmap End -->





    <!-- Category Banner Section Start -->
    <!-- <div class="section section-fluid section-padding pt-0">
                                        <div class="container"> -->


    <!-- Section Title Start -->
    <!-- <div class="section-title text-center">
                                                <h2 class="title" style="margin-top: 100px;">Shop our best-sellers</h2>
                                            </div> -->
    <!-- Section Title End -->

    <!-- <div class="category-banner1-carousel">

                                                <div class="col">
                                                    <div class="category-banner1">
                                                        <div class="inner">
                                                            <a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-1.webp"
                                                                    alt=""></a>
                                                            <div class="content">
                                                                <h3 class="title">
                                                                    <a href="shop.html">GYM 1</a>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="category-banner1">
                                                        <div class="inner">
                                                            <a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-2.webp"
                                                                    alt=""></a>
                                                            <div class="content">
                                                                <h3 class="title">
                                                                    <a href="shop.html">GYM 2</a>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col">
                                                    <div class="category-banner1">
                                                        <div class="inner">
                                                            <a href="shop.html" class="image"><img src="assets/images/banner/category/banner-s1-3.webp"
                                                                    alt=""></a>
                                                            <div class="content">
                                                                <h3 class="title">
                                                                    <a href="shop.html">GYM 3</a>

                                                                </h3>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>  -->
    <!-- Category Banner Section End -->


    @if ($user == null || $subscriber == null)
        <!-- Pricing section -->





        <div
            style=" font-size: 1.6rem; font-family: 'Open Sans', sans-serif;
    color: #000; background-color: #303134;
    margin: 0; padding: 5px; border: 0; font-size: 100%;
	font: inherit; vertical-align: baseline; ">


            <header  class="cd-header" style="height: 50px; padding-top:30px">
                <h1 style="color: #fcff60">Pricing Table</h1>
            </header>

            <div  class="cd-pricing-container ">
                <div id="subscriptions" class="cd-pricing-switcher">
                    <p class="fieldset" style="margin-top: 100px;">
                        <input type="radio" name="duration-1" value="monthly" id="monthly-1" checked>
                        <label for="monthly-1">Month</label>
                        <input type="radio" name="duration-1" value="yearly" id="yearly-1">
                        <label for="yearly-1">3/Month</label>
                        <input type="radio" name="duration-1" value="daily" id="daily-1">
                        <label for="daily-1">6/Month</label>
                        <span class="cd-switch"></span>
                    </p>
                </div> <!-- .cd-pricing-switcher -->

                <ul  class="cd-pricing-list cd-bounce-invert">


                    @foreach ($types as $type)
                        <li>
                            <ul class="cd-pricing-wrapper">



                                @foreach ($subscriptions as $subscription)
                                    @if ($subscription->subscription_type_id === $type->id && $subscription->subscription_time_id === 1)
                                        <li data-type="monthly" class="is-visible">
                                            <header class="cd-pricing-header">
                                                <h2>{{ $type->type_name }}</h2>

                                                <div class="cd-price">
                                                    <span class="cd-currency">$</span>
                                                    <span class="cd-value">{{ $subscription->subscription_price }}</span>
                                                    <span class="cd-duration">month</span>
                                                </div>
                                            </header> <!-- .cd-pricing-header -->

                                            <div class="cd-pricing-body">
                                                <ul class="cd-pricing-features">
                                                    <li>{{ $type->feature_1 }}</li>
                                                    <li>{{ $type->feature_2 }}</li>
                                                    <li>{{ $type->feature_3 }}</li>
                                                    <li>{{ $type->feature_4 }}</li>
                                                </ul>
                                            </div> <!-- .cd-pricing-body -->

                                            <footer class="cd-pricing-footer">
                                                <a class="btn btn-sm btn-dark btn-outline-hover-dark"
                                                    style="border-radius: 25px"
                                                    href="{{ route('checkout', $subscription->id) }}">Select</a>
                                            </footer> <!-- .cd-pricing-footer -->
                                        </li>
                                    @endif
                                @endforeach


                                @foreach ($subscriptions as $subscription)
                                    @if ($subscription->subscription_type_id === $type->id && $subscription->subscription_time_id === 2)
                                        <li data-type="yearly" class="is-hidden">
                                            <header class="cd-pricing-header">
                                                <h2>{{ $type->type_name }}</h2>
                                                <div class="cd-price">
                                                    <span class="cd-currency">$</span>
                                                    <span class="cd-value">{{ $subscription->subscription_price }}</span>
                                                    <span class="cd-duration">3 month</span>
                                                </div>
                                            </header> <!-- .cd-pricing-header -->

                                            <div class="cd-pricing-body">
                                                <ul class="cd-pricing-features">
                                                    <li>{{ $type->feature_1 }}</li>
                                                    <li>{{ $type->feature_2 }}</li>
                                                    <li>{{ $type->feature_3 }}</li>
                                                    <li>{{ $type->feature_4 }}</li>
                                                </ul>
                                            </div> <!-- .cd-pricing-body -->

                                            <footer class="cd-pricing-footer">
                                                <a class="cd-select" style="border-radius: 25px"
                                                    href="{{ route('checkout', $subscription->id) }}">Select</a>
                                            </footer> <!-- .cd-pricing-footer -->
                                        </li>
                                    @endif
                                @endforeach



                                @foreach ($subscriptions as $subscription)
                                    @if ($subscription->subscription_type_id === $type->id && $subscription->subscription_time_id === 3)
                                        <li data-type="daily" class="is-hidden">
                                            <header class="cd-pricing-header">
                                                <h2>{{ $type->type_name }}</h2>
                                                <div class="cd-price">
                                                    <span class="cd-currency">$</span>
                                                    <span class="cd-value">{{ $subscription->subscription_price }}</span>
                                                    <span class="cd-duration">6 month</span>
                                                </div>
                                            </header> <!-- .cd-pricing-header -->

                                            <div class="cd-pricing-body">
                                                <ul class="cd-pricing-features">
                                                    <li>{{ $type->feature_1 }}</li>
                                                    <li>{{ $type->feature_2 }}</li>
                                                    <li>{{ $type->feature_3 }}</li>
                                                    <li>{{ $type->feature_4 }}</li>
                                                </ul>
                                            </div> <!-- .cd-pricing-body -->

                                            <footer class="cd-pricing-footer">
                                                <a class="cd-select" style="border-radius: 25px"
                                                    href="{{ route('checkout', $subscription->id) }}">Select</a>
                                            </footer> <!-- .cd-pricing-footer -->
                                        </li>
                                    @endif
                                @endforeach

                            </ul> <!-- .cd-pricing-wrapper -->
                        </li>
                    @endforeach

                    {{-- cd-popular --}}
                    {{-- <li class="">
                    <ul class="cd-pricing-wrapper">
                        <li data-type="monthly" class="is-visible">
                            <header class="cd-pricing-header">
                                <h2>Popular</h2>
                                <div class="cd-price">
                                    <span class="cd-currency">$</span>
                                    <span class="cd-value">60</span>
                                    <span class="cd-duration">mo</span>
                                </div>
                            </header> <!-- .cd-pricing-header -->

                            <div class="cd-pricing-body">
                                <ul class="cd-pricing-features">
                                    <li><em>512MB</em> Memory</li>
                                    <li><em>3</em> Users</li>
                                    <li><em>5</em> Websites</li>
                                    <li><em>7</em> Domains</li>
                                    <li><em>Unlimited</em> Bandwidth</li>
                                    <li><em>24/7</em> Support</li>
                                </ul>
                            </div> <!-- .cd-pricing-body -->

                            <footer class="cd-pricing-footer">
                                <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                            </footer> <!-- .cd-pricing-footer -->
                        </li>
                        <li data-type="yearly" class="is-hidden">
                            <header class="cd-pricing-header">
                                <h2>Popular</h2>

                                <div class="cd-price">
                                    <span class="cd-currency">$</span>
                                    <span class="cd-value">630</span>
                                    <span class="cd-duration">yr</span>
                                </div>
                            </header> <!-- .cd-pricing-header -->

                            <div class="cd-pricing-body">
                                <ul class="cd-pricing-features">
                                    <li><em>512MB</em> Memory</li>
                                    <li><em>3</em> Users</li>
                                    <li><em>5</em> Websites</li>
                                    <li><em>7</em> Domains</li>
                                    <li><em>Unlimited</em> Bandwidth</li>
                                    <li><em>24/7</em> Support</li>
                                </ul>
                            </div> <!-- .cd-pricing-body -->

                            <footer class="cd-pricing-footer">
                                <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                            </footer> <!-- .cd-pricing-footer -->
                        </li>
                        <li data-type="daily" class="is-hidden">
                            <header class="cd-pricing-header">
                                <h2>Popular</h2>

                                <div class="cd-price">
                                    <span class="cd-currency">$</span>
                                    <span class="cd-value">630</span>
                                    <span class="cd-duration">day</span>
                                </div>
                            </header> <!-- .cd-pricing-header -->

                            <div class="cd-pricing-body">
                                <ul class="cd-pricing-features">
                                    <li><em>512MB</em> Memory</li>
                                    <li><em>3</em> Users</li>
                                    <li><em>5</em> Websites</li>
                                    <li><em>7</em> Domains</li>
                                    <li><em>Unlimited</em> Bandwidth</li>
                                    <li><em>24/7</em> Support</li>
                                </ul>
                            </div> <!-- .cd-pricing-body -->

                            <footer class="cd-pricing-footer">
                                <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                            </footer> <!-- .cd-pricing-footer -->
                        </li>
                    </ul> <!-- .cd-pricing-wrapper -->
                </li>

                <li>
                    <ul class="cd-pricing-wrapper">
                        <li data-type="monthly" class="is-visible">
                            <header class="cd-pricing-header">
                                <h2>Premier</h2>

                                <div class="cd-price">
                                    <span class="cd-currency">$</span>
                                    <span class="cd-value">90</span>
                                    <span class="cd-duration">mo</span>
                                </div>
                            </header> <!-- .cd-pricing-header -->

                            <div class="cd-pricing-body">
                                <ul class="cd-pricing-features">
                                    <li><em>1024MB</em> Memory</li>
                                    <li><em>5</em> Users</li>
                                    <li><em>10</em> Websites</li>
                                    <li><em>10</em> Domains</li>
                                    <li><em>Unlimited</em> Bandwidth</li>
                                    <li><em>24/7</em> Support</li>
                                </ul>
                            </div> <!-- .cd-pricing-body -->

                            <footer class="cd-pricing-footer">
                                <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                            </footer> <!-- .cd-pricing-footer -->
                        </li>

                        <li data-type="yearly" class="is-hidden">
                            <header class="cd-pricing-header">
                                <h2>Premier</h2>
                                <div class="cd-price">
                                    <span class="cd-currency">$</span>
                                    <span class="cd-value">950</span>
                                    <span class="cd-duration">yr</span>
                                </div>
                            </header> <!-- .cd-pricing-header -->

                            <div class="cd-pricing-body">
                                <ul class="cd-pricing-features">
                                    <li><em>1024MB</em> Memory</li>
                                    <li><em>5</em> Users</li>
                                    <li><em>10</em> Websites</li>
                                    <li><em>10</em> Domains</li>
                                    <li><em>Unlimited</em> Bandwidth</li>
                                    <li><em>24/7</em> Support</li>
                                </ul>
                            </div> <!-- .cd-pricing-body -->

                            <footer class="cd-pricing-footer">
                                <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                            </footer> <!-- .cd-pricing-footer -->
                        </li>
                        <li data-type="daily" class="is-hidden">
                            <header class="cd-pricing-header">
                                <h2>Premier</h2>
                                <div class="cd-price">
                                    <span class="cd-currency">$</span>
                                    <span class="cd-value">950</span>
                                    <span class="cd-duration">day</span>
                                </div>
                            </header> <!-- .cd-pricing-header -->

                            <div class="cd-pricing-body">
                                <ul class="cd-pricing-features">
                                    <li><em>1024MB</em> Memory</li>
                                    <li><em>5</em> Users</li>
                                    <li><em>10</em> Websites</li>
                                    <li><em>10</em> Domains</li>
                                    <li><em>Unlimited</em> Bandwidth</li>
                                    <li><em>24/7</em> Support</li>
                                </ul>
                            </div> <!-- .cd-pricing-body -->

                            <footer class="cd-pricing-footer">
                                <a class="cd-select" href="http://codyhouse.co/?p=429">Select</a>
                            </footer> <!-- .cd-pricing-footer -->
                        </li>
                    </ul> <!-- .cd-pricing-wrapper -->
                </li> --}}

                </ul> <!-- .cd-pricing-list -->
            </div>
            <!-- .cd-pricing-container -->
        </div>



        <!-- Pricing section  -->
    @else


        <!-- Category Banner Section Start -->
        <div class="section section-fluid section-padding pt-0">
            <div class="container">
                  <!-- Section Title Start -->
                  <div class="section-title text-center">
                    {{-- <h3 class="sub-title">Shop by categories</h3> --}}
                    <h2 class="title title-icon-both">Gyms</h2>
                </div>

                <!-- Section Title End -->
                <div class="category-banner1-carousel">
                    @foreach ($gyms as $gym)
                        <div class="col">
                            <div class="category-banner1">
                                <div class="inner">
                                    <a href="#" class="image" style=" height:300px; width: 425px; "><img
                                        src="{{ $gym->gym_image }}"  alt="image"></a>
                                    <div class="content">
                                        <h3 class="title">
                                            <a href="#" style="padding-left: 15px; padding-right: 15px;" >{{ $gym->gym_name }}</a>
                                            <span class="number" style="padding-right: 25px;"><a href="{{ route('singleGym', $gym->id) }}">Read more</a></span>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>


                <div class="row learts-mt-50">
                    <div class="col text-center">
                        <a href="{{ route('allGyms') }}" class="btn btn-dark btn-outline-hover-dark">Show More</a>
                    </div>
                </div>

            </div>
        </div>
        <!-- Category Banner Section End -->

    @endif



    <!-- Category Banner Section End -->



 {{-- <section id="subscriptions" class="pricing-section section-padding set-bg">
                    <div class="container" style="padding-top: 50px">
                        <div class="section-title text-white text-center">
                            <h2 style="color: white;">Prices for <span style="color: #fcff60;">everybody</span></h2>
                        </div>

                        <div class="row">
                            @foreach ($times as $time)
                                <div class="col-lg-4 col-sm-6">
                                    <div class="pricing-box">
                                        <h2>{{ $time->time_name }} </h2>
                                        <p>Types:</p>
                                        @foreach ($types as $type)
                                            <ul>
                                                <li>
                                                    <p style="display: inline">{{ $type->type_name }}
                                                        @foreach ($subscriptions as $subscription)
                                                            @if ($subscription->subscription_type_id === $type->id && $subscription->subscription_time_id === $time->id)
                                                                <p style="display: inline">
                                                                    {{ $subscription->subscription_price }}$:</p>
                                                                <div class="header-wishlist" style="display: inline">
                                                                    <a href="{{ route('checkout', $subscription->id) }}">
                                                                        <button
                                                                            class="btn btn-sm btn-light btn-outline-hover-light">Choose
                                                                            Plan</button>
                                                                    </a>
                                                                </div>
                                                            @endif
                                                        @endforeach
                                                    </p>
                                                </li>

                                            </ul>
                                        @endforeach

                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </section> --}}


            <!-- Portfolio Section Start -->
                {{-- <div class="section section-padding" style="background-color: white">
                    <div class="container">
                        <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 learts-mb-n30">


                            @foreach ($gyms as $gym)
                                <div class="col learts-mb-30">
                                    <div class="portfolio">
                                        <div class="thumbnail" style="width: 100%, hight:100%"><img src="{{ $gym->gym_image }}"
                                                alt="image"></div>
                                        <div class="content">
                                            <h4 class="title"><a href="portfolio-details.html">{{ $gym->gym_name }}</a></h4>
                                            <div class="desc">
                                                <p>{{ $gym->gym_description }}</p>
                                            </div>
                                            <div class="link"><a href="{{ route('singleGym', $gym->id) }}">Read more</a></div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>

                        <div class="row learts-mt-50">
                            <div class="col text-center">
                                <a href="{{ route('allGyms') }}" class="btn btn-dark btn-outline-hover-dark">Show More</a>
                            </div>
                        </div>
                    </div>

                </div> --}}
                <!-- Portfolio Section End -->


            <!-- Separator -->
            {{-- <div class="section">
                <div class="container">
                    <hr class="m-0">
                </div>
            </div> --}}
            <!-- Separator -->


            <!-- Category Banner Section Start -->
            {{-- <div class="section section-padding pt-0">
            <div class="container">
                <div class="row row-cols-lg-4 row-cols-sm-2 row-cols-1 learts-mb-n40">

                    <div class="col learts-mb-40">
                        <div class="category-banner4">
                            <a href="shop.html" class="inner">
                                <div class="image"><img src="assets/images/banner/category/banner-s4-1.webp" alt=""></div>
                                <div class="content" data-bg-color="#f4ede7">
                                    <h3 class="title">Gift ideas</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col learts-mb-40">
                        <div class="category-banner4">
                            <a href="shop.html" class="inner">
                                <div class="image"><img src="assets/images/banner/category/banner-s4-2.webp" alt=""></div>
                                <div class="content" data-bg-color="#e8f5f2">
                                    <h3 class="title">Home Decor</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col learts-mb-40">
                        <div class="category-banner4">
                            <a href="shop.html" class="inner">
                                <div class="image"><img src="assets/images/banner/category/banner-s4-3.webp" alt=""></div>
                                <div class="content" data-bg-color="#e3e4f5">
                                    <h3 class="title">Toys</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col learts-mb-40">
                        <div class="category-banner4">
                            <a href="shop.html" class="inner">
                                <div class="image"><img src="assets/images/banner/category/banner-s4-4.webp" alt=""></div>
                                <div class="content" data-bg-color="#faf5e5">
                                    <h3 class="title">Kitchen</h3>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div> --}}



    <!-- Add section -->
    <!-- <section class="add-section set-bg" data-setbg="../img/add-bg.jpg">
                                            <div class="container">
                                            <div class="row">
                                                <div class="col-lg-7 ml-auto">
                                                <div class="add-text">
                                                <h2>Pay now and get a 25% <span>Discount</span></h2>
                                                <ul>
                                                <li><img src="img/check-icon.png" alt="">Lorem ipsum dolor sit amet, consectetur adipiscing
                                                    elit.</li>
                                                <li><img src="img/check-icon.png" alt="">Risus commodo viverra maecenas accumsan lacus vel
                                                    facilisis.</li>
                                                <li><img src="img/check-icon.png" alt="">Ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do.</li>
                                                </ul>
                                                <a href="#" class="site-btn">Become a Member</a>
                                                </div>
                                                </div>
                                            </div>
                                            </div>
                                        </section> -->
    <!-- Add section end -->


@endsection

@section('scripts')
@endsection
