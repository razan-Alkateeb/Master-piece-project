{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
 --}}





@extends('user_views.layout.master')

@section('title')
Profile
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
                    <h1 class="title" style="color: white;">My Profile</h1>
                    <h2 class="title" style="color: #ccc; font-size: 25px;">
                        Create The <span style="color: #fcff60;">Strongest</span><br>
                         Version Of <span style="color: #fcff60;">Yourself</span>... </h2>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Page Title/Header End -->

    <!-- Portfolio Section Start -->
    <div class="section section-padding border-bottom">
        <div class="container">

            <div class="py-12">
                <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">

                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg m-4">
                        <div class="max-w-xl">
                            @include('profile.partials.update-profile-information-form')
                        </div>
                    </div>

                    @if ($subscriber != null)
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg m-4">
                        <div class="max-w-xl">
                            <header>
                                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                                    {{ __('Subscription Information') }}
                                </h2>

                                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                    {{ __("This is your Subscription Information .") }}
                                </p>
                            </header>
                            <div class="row learts-mb-n30">

                                <div class="col-xl-8  learts-mb-30">
                                    <div class="portfolio-content">

                                        <ul class="meta">
                                            <li>
                                                <span class="name">Start Date:</span>
                                                <span class="value">{{ $subscriber->subscriber_start }}</span>
                                            </li>
                                            <li>
                                                <span class="name">End Date:</span>
                                                <span class="value">{{ $subscriber->subscriber_end }}</span>
                                            </li>
                                            <li>
                                                <span class="name">Number of Visits Remaining:</span>
                                                <span class="value">{{ $subscriber->subscriber_number_visits }}</span>
                                            </li>
                                            @if ($visitcode)
                                            <li>
                                                <span class="name">Visit code Active:</span>
                                                <span class="value">{{ $visitcode }}</span>
                                            </li>
                                            @endif


                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg m-4">
                        <div class="max-w-xl">
                            @include('profile.partials.update-password-form')
                        </div>
                    </div>

                </div>
            </div>

            {{-- <form  method="POST" action="{{ route('editprofile') }}" data-aos="fade-up" enctype="multipart/form-data">
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

            </form> --}}
        </div>

    </div>
    <!-- Portfolio Section End -->

@endsection

@section('scripts')
@endsection








