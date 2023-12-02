@extends('user_views.layout.master')

@section('title')
    Contact
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
                        <h1 class="title" style="color: white;">Contact us</h1>
                        <h2 class="title" style="color: #ccc; font-size: 25px;">
                            Create The <span style="color: #fcff60;">Strongest</span><br>
                            Version Of <span style="color: #fcff60;">Yourself</span>... </h2>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Title/Header End -->




    <!-- Contact Information & Map Section Start -->
    <div class="section section-padding">
        <div class="container">
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Keep in touch with us</h2>
                <p>
                    Welcome to our exclusive fitness community! At our subscription-based
                    gym website, we offer an unparalleled fitness experience designed to
                    elevate your health and well-being. With a diverse range of expertly
                    crafted workout programs, state-of-the-art equipment, and access to
                    highly qualified trainers, our platform is your gateway to achieving
                    your fitness goals. .</p>
            </div>
            <!-- Section Title End -->


            <!-- Contact Map Start -->
            <div class="row learts-mt-60">
                <div class="col">
                    {{-- <iframe class="contact-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2136.986005919501!2d-73.9685579655238!3d40.75862446708152!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c258e4a1c884e5%3A0x24fe1071086b36d5!2sThe%20Atrium!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> --}}
                    <iframe class="contact-map"
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3381.1031808243047!2d35.879987114591586!3d31.949001032530257!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x151b2d61ac5e400f%3A0x2d007fc362ed1e94!2sAmman%203rd%20Circle!5e0!3m2!1sen!2sbd!4v1585132512970!5m2!1sen!2sbd"
                        style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>
            </div>
            <!-- Contact Map End -->

        </div>
    </div>
    <!-- Contact Information & Map Section End -->




    <!-- Contact Form Section Start -->
    <div class="section section-padding pt-0  ">
        <div class="container bg-light p-5">
            @if (session('flash_message'))
                <div class="alert @if (session('flash_status') === 'deleted') alert-danger @else alert-success @endif">
                    {{ session('flash_message') }}
                </div>
            @endif
            <!-- Section Title Start -->
            <div class="section-title2 text-center">
                <h2 class="title">Get in touch</h2>
            </div>
            <!-- Section Title End -->

            <div class="row">
                <div class="col-lg-8 col-12 mx-auto">
                    <div class="contact-form ">
                        <form action="{{ route('contactus.store') }}" id="contact-form" method="post">
                            @csrf
                            <div class="row learts-mb-n30">
                                <div class="col-md-6 col-12 learts-mb-30"><input type="text" placeholder=" Your Name "
                                        name="name" style="background-color: #fff;  border-radius: 30px;"></div>
                                <div class="col-md-6 col-12 learts-mb-30"><input type="email" placeholder=" Email "
                                        name="email" style="background-color: #fff;  border-radius: 30px;"></div>
                                <div class="col-12 learts-mb-30">
                                    <textarea name="message" placeholder=" Message" style="background-color: #fff;  border-radius: 30px;"></textarea>
                                </div>
                                <div class="col-12 text-center learts-mb-30"><button type="submit"
                                        class="btn btn-dark btn-outline-hover-dark">Submit</button></div>
                            </div>
                        </form>
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact Form Section End -->
@endsection

@section('scripts')
@endsection
