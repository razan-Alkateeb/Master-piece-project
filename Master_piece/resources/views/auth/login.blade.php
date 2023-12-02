{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <x-primary-button class="ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}


@extends('user_views.layout.master')

@section('title')
LOG IN
@endsection


@section('css')
<style>
.divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}</style>
@endsection



@section('content')



    <!-- Page Title/Header Start -->
    <div class="page-title-section section" data-bg-image="./assets/images/bg/header.jpg">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="page-title">
                        <h1 class="title" style="color: white;">Login</h1>
                        <h2 class="title" style="color: #ccc; font-size: 25px;">
                            Create The <span style="color: #fcff60;">Strongest</span><br>
                            Version Of <span style="color: #fcff60;">Yourself</span>... </h2>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->





    <!-- Login  Section Start -->
    <div class="section section-padding ">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-8 mx-auto">
                    <div class="user-login-register bg-light">
                        <div class="login-register-title">
                            <h2 class="title">Login</h2>
                            <p class="desc">Great to have you back!</p>
                        </div>

                        <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                            <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                            <a href="{{ route('google-auth') }}" class="btn btn-sm btn-dark btn-outline-hover-dark m-1">
                              <i class="fab fa-google"></i>
                            </a>

                            {{-- <button type="button" class="btn btn-sm btn-dark btn-outline-hover-dark">
                              <i class="fab fa-facebook-f"></i>
                            </button> --}}

                          </div>

                          <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0">Or</p>
                          </div>

                        <div class="login-register-form">

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="block mt-1 w-full" type="email"
                                        name="email" :value="old('email')" required autofocus autocomplete="username" />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="block mt-1 w-full" type="password"
                                        name="password" required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox"
                                            class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                                            name="remember">
                                        <span
                                            class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"
                                            href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    {{-- <x-primary-button class="ml-3">
                                        {{ __('Log in') }}
                                    </x-primary-button> --}}



                                    <div class="col-12 text-center learts-mb-50">
                                        <button class="btn btn-dark btn-outline-hover-dark">{{ __('Log in') }}</button>
                                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account?
                                             <a href="{{ route('register') }}" >Register</a></p>
                                    </div>
                                </div>
                            </form>
                            {{-- <form action="#">
                                <div class="row learts-mb-n50">
                                    <div class="col-12 learts-mb-50">
                                        <input type="email" placeholder="Email address">
                                    </div>
                                    <div class="col-12 learts-mb-50">
                                        <input type="password" placeholder="Password">
                                    </div>
                                    <div class="col-12 text-center learts-mb-50">
                                        <button class="btn btn-dark btn-outline-hover-dark">login</button>
                                    </div>
                                    <div class="col-12 learts-mb-50">
                                        <div class="row learts-mb-n20">
                                            <div class="col-12 learts-mb-20">
                                                <!-- <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="rememberMe">
                                                    <label class="form-check-label" for="rememberMe">Remember me</label>
                                                </div> -->
                                            </div>
                                            <div class="col-12 learts-mb-20">
                                                <a href="lost-password.html" class="fw-400">Lost your password?</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <!-- Login Section End -->


@endsection

@section('scripts')

@endsection





