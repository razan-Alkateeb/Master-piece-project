@extends('user_views.layout.master')

@section('title')
    message
@endsection


@section('css')
@endsection



@section('content')
    <div class="section m-5 mx-auto">
        <div class="container">
            <div class="g-0">
                <div class="bg-light p-5">
                    <div class="login-register-title">
                        <img class="mb-3" src="{{ asset($image) }}" width="10%" alt="icon">
                        <h2 >{{ $message }}</h2>
                        <p class="desc">{{ $paragraph }}</p>
                        <a href="{{ route('home') }}" class="btn btn-dark btn-outline-hover-dark">Back to Home</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
@endsection
