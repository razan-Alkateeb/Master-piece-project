

@extends('user_views.layout.master')

@section('title')
Profile
@endsection


@section('css')
@endsection



@section('content')


    <!-- Portfolio Section Start -->
    <div class="section section-padding border-bottom">
        <div class="container">


            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title ">My Profile</h2>
            </div>

            <form  method="POST" action="{{ route('editprofile') }}" data-aos="fade-up" enctype="multipart/form-data">
            @csrf

                <div class="row learts-mb-n30">

                    <div class="col-xl-3  learts-mb-30">
                        <div class="portfolio-image" style="border-radius: 250px; width: 100%;">
                            <img src="{{ $user->user_image}}" alt="user_image">
                        </div>
                    </div>

                    <div class="col-xl-8  learts-mb-30">
                        <div class="portfolio-content">
                            <h2 class="title">personal Information</h2>

                            <ul class="meta">
                                <li>
                                    <span class="name">name:</span>
                                    <span class="value">razan alkateeb</span>
                                </li>
                                <li>
                                    <span class="name">email:</span>
                                    <span class="value">razan@gmail.com</span>
                                </li>


                            </ul>

                            <h2 class="title">Subscription Information</h2>


                            <ul class="meta">
                                <li>
                                    <span class="name">Start Date:</span>
                                    <span class="value">20/August/2023</span>
                                </li>
                                <li>
                                    <span class="name">End Date:</span>
                                    <span class="value">20/November/2023</span>
                                </li>
                                <li>
                                    <span class="name">Number of Visits Remaining:</span>
                                    <span class="value">20</span>
                                </li>

                                <li>
                                    <button class="btn btn-md btn-dark btn-outline-hover-dark">Logout </button>


                                </li>

                            </ul>
                        </div>
                    </div>

                </div>

            </form>
        </div>

    </div>
    <!-- Portfolio Section End -->

@endsection

@section('scripts')
@endsection




