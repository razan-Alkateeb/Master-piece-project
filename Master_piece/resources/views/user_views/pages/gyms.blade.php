


@extends('user_views.layout.master')

@section('title')
Gyms
@endsection


@section('css')
@endsection



@section('content')

    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="assets/images/bg/header.jpg">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title" style="color: white;">Gyms</h1>
                        <h2 class="title" style="color: #ccc; font-size: 25px;">
                            Create The <span style="color: #fcff60;">Strongest</span><br>
                             Version Of <span style="color: #fcff60;">Yourself</span>... </h2>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->



    <!-- Shop Toolbar Start -->
    <div class="section section-padding pt-0">
        <div class="shop-toolbar border-bottom">
            <div class="container">
                <div class="row learts-mb-n20">

                    <!-- Isotop Filter Start -->
                    <div class="col-md col-12 align-self-center learts-mb-20">
                        <div class="isotope-filter shop-product-filter" data-target="#shop-products">
                            <h3>Select Location</h3>
                        </div>
                    </div>
                    <!-- Isotop Filter End -->

                    <div class="col-md-3 col-12 learts-mb-20">
                        <ul class="shop-toolbar-controls " style="color: black;">

                            <li>
                                <div class="product-sorting">
                                    <form action="{{ route('filterGyms') }}" method="post">
                                        @csrf
                                        <select name="city" class="nice-select" onchange="this.form.submit()">
                                            <option value="All" {{ $selectedCity == 'All' ? 'selected' : '' }}>All</option>
                                            <option value="Amman" {{ $selectedCity == 'Amman' ? 'selected' : '' }}>Amman</option>
                                            <option value="Irbid" {{ $selectedCity == 'Irbid' ? 'selected' : '' }}>Irbid</option>
                                            <option value="Zarqa" {{ $selectedCity == 'Zarqa' ? 'selected' : '' }}>Zarqa</option>
                                        </select>
                                    </form>

                                </div>
                            </li>

                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Shop Toolbar End -->





    <!-- Portfolio Section Start -->
    {{-- <div class="section " style="margin-bottom: 100px ;">
        <div class="container">
            <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 learts-mb-n30">


                @foreach ($gyms as $gym)

                <div class="col learts-mb-30">
                    <div class="portfolio">
                        <div class="thumbnail" style="width: 100%, hight:100%"><img src="{{ $gym->gym_image }}" alt="image"
                            ></div>
                        <div class="content">
                            <h4 class="title"><a href="portfolio-details.html">{{ $gym->gym_name }}</a></h4>
                            <div class="desc">
                                <p>{{ $gym->gym_description }}</p>
                            </div>
                            <div class="link"><a href="{{ route('singleGym',$gym->id) }}">Read more</a></div>
                        </div>
                    </div>
                </div>

                @endforeach



            </div>


        </div>

    </div> --}}
    <!-- Portfolio Section End -->



        <!-- Category Banner Section Start -->
        <div class="section section-fluid section-padding pt-0">
            <div class="container">
                  
                <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 learts-mb-n30">
                    @foreach ($gyms as $gym)
                        <div class="col learts-mb-60">
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

            </div>
        </div>
        <!-- Category Banner Section End -->



@endsection

@section('scripts')



@endsection







