@extends('user_views.layout.master')

@section('title')
    Gym Details
@endsection


@section('css')
@endsection



@section('content')
    <!-- Portfolio Section Start -->
    <div class="section section-padding border-bottom">
        <div class="container">


            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title ">Gym Details</h2>
            </div>

            <!-- Section Title End -->
            <div class="row learts-mb-n30">

                <div class="col-xl-8 col-12 learts-mb-30">
                    <div class="portfolio-image">
                        <img src="{{ $gym->gym_image }}" alt="">
                    </div>
                </div>

                <div class="col-xl-4 col-12 learts-mb-30">
                    <div class="portfolio-content">
                        <h2 class="title">{{ $gym->gym_name }}</h2>
                        <div class="desc">
                            <p>{{ $gym->gym_description }}</p>
                        </div>
                        <ul class="meta">
                            <li>
                                <span class="name">Working hours:</span>
                                <span class="value">{{ $gym->gym_workingHoursFrom }} AM - {{ $gym->gym_workingHoursTo }}
                                    PM</span>
                            </li>
                            <li>
                                <span class="name">Address:</span>
                                <span class="value category">
                                    <a href="#">{{ $gym->gym_address }}</a>
                                </span>
                            </li>

                            <li>
                                <span class="name">Phone:</span>
                                <span class="value tags">
                                    <a href="tel:{{ $gym->gym_phone }}">{{ $gym->gym_phone }}</a>
                                </span>
                            </li>
                            {{-- <li>
                                <span class="name">Links:</span>
                                <span class="value"><a href="#">https://learts.thememove.com/</a></span>
                            </li>  --}}
                            <li>
                                <span class="name">Share:</span>
                                <span class="value social">
                                    <a href="{{ $gym->gym_facebook }}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{ $gym->gym_instagram }}"><i class="fab fa-instagram"></i></a>
                                    @if ($gym->gym_email)
                                        <a href="mailto:{{ $gym->gym_email }}"><i class="far fa-envelope"></i></a>
                                    @endif
                                </span>
                            </li>


                            <li>
                                <?php $randomNumber = rand(1000, 9999); ?>
                                <form method="POST" action="{{ route('savecode') }}" data-aos="fade-up"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col">
                                            <input type="hidden" value="{{ $gym->id }}" name="gymId">
                                            <input type="text" class="form-control" value="{{ $randomNumber }}"
                                                name="code">
                                        </div>
                                        <div class="col">
                                            <button class="btn btn-md btn-dark btn-outline-hover-dark">Activate Code</button>
                                        </div>
                                    </div>
                                </form>

                            </li>
                            @if ($message)
                                <div
                                    class="alert @if ($add === 'no') alert-warning
                                    @else alert-success @endif">
                                    {{ $message }}
                                </div>
                            @endif
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <!-- Portfolio Section End -->

    <!-- Portfolio Section Start -->
    <!-- <div class="section section-padding">
                <div class="container"> -->

    <!-- Section Title Start -->
    <!-- <div class="section-title2 text-center">
                        <h2 class="title ">Gym Images</h2>
                    </div> -->
    <!-- Section Title End -->

    <!-- <div class="row">
                        <div class="col-12">
                            <div class="portfolio-overview">

                                <div class="row learts-mt-30">
                                    <div class="col-lg-6 col-12 learts-mb-30">
                                        <div class="sale-banner7">
                                            <div class="inner">
                                                <div class="image"><img
                                                        src="assets/images/product/single/3/banner/banner-1.webp"
                                                        alt="Sale Banner Image"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12 learts-mb-30">
                                        <div class="row learts-mb-n30">
                                            <div class="col-sm-6 col-12 learts-mb-30">
                                                <div class="sale-banner7">
                                                    <div class="inner">
                                                        <div class="image"><img
                                                                src="assets/images/product/single/3/banner/banner-2.webp"
                                                                alt="Sale Banner Image"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12 learts-mb-30">
                                                <div class="sale-banner7">
                                                    <div class="inner">
                                                        <div class="image"><img
                                                                src="assets/images/product/single/3/banner/banner-3.webp"
                                                                alt="Sale Banner Image"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12 learts-mb-30">
                                                <div class="sale-banner7">
                                                    <div class="inner">
                                                        <div class="image"><img
                                                                src="assets/images/product/single/3/banner/banner-4.webp"
                                                                alt="Sale Banner Image"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-12 learts-mb-30">
                                                <div class="sale-banner7">
                                                    <div class="inner">
                                                        <div class="image"><img
                                                                src="assets/images/product/single/3/banner/banner-5.webp"
                                                                alt="Sale Banner Image"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>

            </div> -->
    <!-- Portfolio Section End -->
@endsection

@section('scripts')
@endsection
