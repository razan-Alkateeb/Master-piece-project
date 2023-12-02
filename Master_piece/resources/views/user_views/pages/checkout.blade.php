@extends('user_views.layout.master')

@section('title')
    checkout
@endsection


@section('css')
@endsection



@section('content')
    <!-- Page Title/Header Start -->
    {{-- <div class="page-title-section section" data-bg-image={{asset ('assets/images/bg/header.jpg') }}> --}}
    <div class="page-title-section section" style="background-image:url('{{ asset('assets/images/bg/header.jpg') }}')">



        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="page-title">
                        <h1 class="title" style="color: white;">Checkout </h1>
                        <h2 class="title" style="color: #ccc; font-size: 25px;">
                            Create The <span style="color: #fcff60;">Strongest</span><br>
                            Version Of <span style="color: #fcff60;">Yourself</span>... </h2>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->


    <!-- Checkout Section Start -->
    <div class="section ">
        <div class="container">


            <div class="section-title2 pt-5">
                <h2 class="title">Billing details</h2>
            </div>
            <form action="#" class="checkout-form learts-mb-50">
                <div class="row">
                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="bdFirstName">Name </label>
                        <input type="text" id="bdFirstName" value="{{ $user->name }}" readonly>
                    </div>


                    <div class="col-md-6 col-12 learts-mb-20">
                        <label for="Email">Email address </label>
                        <input type="text" id="Email" value="{{ $user->email }}" readonly>
                    </div>

                </div>
            </form>

            <div class="section-title2 text-center">
                <h2 class="title">Your Subscription</h2>
            </div>

            <div class="checkout-coupon">
                <p class="coupon-toggle">Have a coupon? <a href="#checkout-coupon-form" data-bs-toggle="collapse">Click
                        here to enter your code</a></p>
                <div id="checkout-coupon-form" class="collapse">
                    <div class="coupon-form">
                        <p>If you have a coupon code, please apply it below.</p>
                        <form method="POST" action="{{ route('usecoupon') }}" class="learts-mb-n10" data-aos="fade-up"
                            enctype="multipart/form-data">
                            @csrf
                            <input class="learts-mb-10" type="hidden" name="subscription_id" value="{{ $id }}">
                            <input class="learts-mb-10" type="text" name="coupon_code" placeholder="Coupon code">
                            <input type="submit" value="apply coupon"
                                class="btn btn-dark btn-outline-hover-dark learts-mb-10">
                        </form>
                    </div>
                </div>
            </div>
            @if ($error_message)
                <div class="alert @if ($error_message === 'Coupon code not found') alert-danger @else alert-success @endif">
                    {{ $error_message }}
                </div>
            @endif
            <form method="POST" action="{{ route('addsubscriber') }}" data-aos="fade-up" enctype="multipart/form-data">
                @csrf

                <div class="row learts-mb-n30">




                    <div class="col-lg-6 order-lg-1 learts-mb-30">
                        <div class="order-review">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="name">Subscription Information</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $todayDate = new DateTime();
                                    $currentDate = $todayDate->format('j/F/Y');
                                    $numberOfDays = $time->time_duration;
                                    $todayDate->add(new DateInterval("P{$numberOfDays}D"));
                                    $afterMonthDate = $todayDate->format('j/F/Y');

                                    $discount_per = 0;

                                    if ($coupon_data) {
                                        $discount_per = $coupon_data->coupon_discount_percentage;
                                    }
                                    ?>

                                    <tr>

                                        @if ($coupon_data)
                                            <input type="hidden" value="{{ $coupon_data->id }}" name="couponId">
                                        @endif

                                        <input type="hidden" value="{{ $subscription->id }}" name="subscriptionId">
                                        <td class="name" style="padding-top:17px">Start Date:</td>
                                        <td class="total"><input type="text" value="{{ $currentDate }}"
                                                name="startDate" readonly
                                                style="border: none; background: none; font-size: inherit; color: inherit; text-align: right;
                                            font-weight: 700;font-size: 16px;">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="name" style="padding-top:17px">End Date:</td>
                                        <td class="total"><input type="text" value="{{ $afterMonthDate }}"
                                                name="endDate" readonly
                                                style="border: none; background: none; font-size: inherit; color: inherit; text-align: right;
                                            font-weight: 700;font-size: 16px;">
                                        </td>

                                    </tr>
                                    <tr>
                                        <td class="name" style="padding-top:17px">Number of Visits:</td>
                                        <td class="total"><input type="text"
                                                value="{{ $subscription->subscription_visits }}" name="visits" readonly
                                                style="border: none; background: none; font-size: inherit; color: inherit; text-align: right;
                                            font-weight: 700;font-size: 16px;">
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="subtotal">
                                        <th>Subtotal</th>
                                        <td class="total"><input type="text"
                                                value="{{ $subscription->subscription_price }}JD" name="subtotal" readonly
                                                style="border: none; background: none; font-size: inherit; color: inherit; text-align: right;
                                            font-weight: 700;font-size: 16px;">
                                        </td>
                                    </tr>
                                    <tr class="total">
                                        <th>Total</th>
                                        <td class="total"> <strong><input type="text"
                                                    value="{{ $subscription->subscription_price - $subscription->subscription_price * ($discount_per / 100) }}JD"
                                                    name="total" readonly
                                                    style="border: none; background: none; font-size: inherit; color: black; text-align: right;
                                                font-weight: inherit;font-size: inherit;"></strong>
                                        </td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>

                    <div class="col-lg-6 order-lg-2 learts-mb-30">
                        <div class="order-payment">
                            <div class="payment-method">
                                <div class="accordion" id="paymentMethod">

                                    {{-- <div class="card">
                                        <div class="card-header">
                                            <button data-bs-toggle="collapse" data-bs-target="#cashkPayments">Cash on
                                                delivery </button>
                                        </div>
                                        <div id="cashkPayments" class="collapse" data-bs-parent="#paymentMethod">
                                            <div class="card-body">
                                                <p>Pay with cash upon delivery.</p>
                                            </div>
                                        </div>
                                    </div> --}}

                                    <div class="card">
                                        <div class="card-header">
                                            <button data-bs-toggle="collapse" data-bs-target="#payPalPayments">PayPal
                                                <img src={{ asset('assets/images/others/pay-2.webp') }}
                                                    alt="image"></button>
                                        </div>
                                        <div id="payPalPayments" class="collapse" data-bs-parent="#paymentMethod">
                                            <div class="card-body">
                                                <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                    PayPal account.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="payment-note">Your personal data will be used to process your order, support your
                                    experience throughout this website, and for other purposes described in our privacy
                                    policy.</p>

                                <input type="submit" value="Subscribe now" class="btn btn-dark btn-outline-hover-dark">

                            </div>
                        </div>
                    </div>

                </div>
            </form>

            {{-- <form action="{{ route('paypal') }}" method="post">
                @csrf
                <input type="hidden" name="price" value="20">
                <button type="submit">Pay with Paypal</button>
            </form> --}}


        </div>
    </div>
    <!-- Checkout Section End -->
@endsection

@section('scripts')
@endsection
