<!-- Foooter start -->


@php
    $userId = auth()->id();
    $user = \App\Models\User::find($userId);
    $subscriber = \App\Models\Subscriber::where('subscriber_user_id', $userId)->first();
@endphp


<div class="footer2-section section section-padding bg-light">
    <div class="container">
        <div class="row learts-mb-n40">

            <div class="col-lg-4 learts-mb-40">
                <div class="widget-about">
                    <img src="{{ asset('assets/img/logonew.png') }}" style="width: 200px" alt="">
                    <p style="font-size: 0.9em">The FlexGym website offers a single subscription that grants you access to
                         a vast network of gyms for practicing various sports and exercises.</p>
                </div>
            </div>

            <div class="col-lg-2 learts-mb-40">
                <div class="row">
                    <div class="col">
                        <ul class="widget-list">
                            <li><a href="{{ route('home') }}">Home</a></li>

                            @if ($user == null || $subscriber == null)
                                <li><a href="{{ url('/home') }}#subscriptions">Subscriptions</a></li>
                            @else
                                <li><a href="{{ route('allGyms') }}">Gyms</a></li>
                            @endif

                            <li><a href="{{ route('aboutus') }}">About us</a></li>
                            <li><a href="{{ route('contactus') }}">Contact us</a></li>
                        </ul>
                    </div>
                    <!-- <div class="col">
                            <ul class="widget-list">
                                <li><a href="#">Returns</a></li>
                                <li><a href="#">Support Policy</a></li>
                                <li><a href="#">Size Guide</a></li>
                                <li><a href="#">FAQs</a></li>
                            </ul>
                        </div> -->



                </div>
            </div>

            <div class="col-lg-3 learts-mb-40">
                <ul class="widget-list">
                    <li> <i class="fab fa-twitter"></i> <a href="https://www.twitter.com/">Twitter</a></li>
                    <li> <i class="fab fa-facebook-f"></i> <a href="https://www.facebook.com/">Facebook</a></li>
                    <li> <i class="fab fa-instagram"></i> <a href="https://www.instagram.com/">Instagram</a></li>
                    <li> <i class="fab fa-youtube"></i> <a href="https://www.youtube.com/">Youtube</a></li>
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-12 learts-mb-30">
                <div class="contact-info">
                    <h4 class="title">CONTACT</h4>
                    <span class="info"><i class="icon fas fa-phone-alt"></i> Mobile: (+962)772–406–992</span>

                    <span class="info"><i class="icon far fa-envelope"></i> Mail: <a href="#" class="m-3">flexgym@gmail.com</a></span>
                </div>
            </div>

        </div>
    </div>
</div>

<div class="footer2-copyright section bg-light">
    <div class="container">
        <p class="copyright text-center">&copy; 2023 FLEX GYM. All Rights Reserved</p>
    </div>
</div>
<!-- Foooter end -->
