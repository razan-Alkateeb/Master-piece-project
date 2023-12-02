{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}



@extends('user_views.layout.master')

@section('title')
REGISTER
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
                        <h1 class="title" style="color: white;">Register</h1>
                        <h2 class="title" style="color: #ccc; font-size: 25px;">
                            Create The <span style="color: #fcff60;">Strongest</span><br>
                             Version Of <span style="color: #fcff60;">Yourself</span>... </h2>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->





    <!-- Login & Register Section Start -->
    <div class="section section-padding">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-8 mx-auto">
                    <div class="user-login-register bg-light">
                        <div class="login-register-title">
                            <h2 class="title">Register</h2>
                            <p class="desc">If you don’t have an account, register now!</p>
                        </div>
                        <div class="login-register-form">


                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div>
                                    <x-input-label for="name" :value="__('Name')" />
                                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                </div>

                                <!-- Email Address -->
                                <div class="mt-4">
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Confirm Password -->
                                <div class="mt-4">
                                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                                    type="password"
                                                    name="password_confirmation" required autocomplete="new-password" />

                                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>

                                    {{-- <x-primary-button class="ml-4">
                                        {{ __('Register') }}
                                    </x-primary-button> --}}

                                    <div class="col-12 text-center learts-mb-50">
                                        <button class="btn btn-dark btn-outline-hover-dark">{{ __('Register') }}</button>
                                    </div>
                                </div>
                            </form>

                            {{-- <form action="#">
                                <div class="row learts-mb-n50">


                                    <div class="col-6 learts-mb-50">
                                        <label for="fname" >First Name </label>
                                        <input id="fname" type="text" placeholder="Enter your first name" class="required">
                                    </div>


                                    <div class="col-6 learts-mb-50">
                                        <label for="lname" >Last Name </label>
                                        <input id="lname" type="text" placeholder="Enter your last name" class="required">

                                    </div>


                                    <div class="col-12 learts-mb-50">
                                        <label for="email" >Email </label>
                                        <input  id="email" type="email" placeholder="email address">
                                    </div>


                                    <div class="col-12 learts-mb-50">
                                        <label for="password" >Password </label>
                                        <input id="password" type="password" placeholder="Password">
                                    </div>


                                    <div class="col-12 learts-mb-50">
                                        <label for="confirmPassword" >Confirm Password </label>
                                        <input id="confirmPassword" type="password" placeholder="Confirm Password">
                                    </div>


                                    <div class="col-12 learts-mb-50">
                                        <p>Your personal data will be used to support your experience throughout this website, to manage access to your account, and for other purposes described in our privacy policy</p>
                                    </div>


                                    <div class="col-12 text-center learts-mb-50">
                                        <button class="btn btn-dark btn-outline-hover-dark">Register</button>
                                    </div>



                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>



            </div>

        </div>

    </div>
    <!-- Login & Register Section End -->






@endsection

@section('scripts')
@endsection

