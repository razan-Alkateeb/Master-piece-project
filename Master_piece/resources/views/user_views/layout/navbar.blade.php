    <!-- NAV Start -->

    @php
        $userId = auth()->id();
        $user = \App\Models\User::find($userId);
        $subscriber = \App\Models\Subscriber::where('subscriber_user_id', $userId)->first();
    @endphp


    <!-- Header Section Start -->
    <div class="header-section section section-fluid bg-light d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-auto">
                    <div class="header-logo">
                        <a href="index.html"><img src={{ asset('assets/img/logonew.png') }} alt="Logo"
                                style="padding-right: 1px; width: 200px;"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Search Start -->
                <div class="col-auto me-auto">
                    <nav class="site-main-menu site-main-menu-left menu-height-100 justify-content-center">
                        <ul>
                            <li class="has-children"><a href="{{ route('home') }}"><span
                                        class="menu-text">Home</span></a></li>

                            @if ($user == null || $subscriber == null)
                                <li class="has-children">
                                    <a href="{{ url('/home') }}#subscriptions"
                                        onclick="smoothScroll('#subscriptions')">
                                        <span class="menu-text">Subscriptions</span>
                                    </a>
                                </li>
                            @else
                                <li class="has-children"><a href="{{ route('allGyms') }}"><span
                                            class="menu-text">Gyms</span></a></li>
                            @endif

                            <li class="has-children"><a href="{{ route('aboutus') }}"><span class="menu-text">About
                                        us</span></a></li>

                            <li class="has-children"><a href="{{ route('contactus') }}"><span class="menu-text">Contact
                                        us</span></a></li>


                        </ul>
                    </nav>
                </div>
                <!-- Search End -->



                {{-- <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="header-login">
                            <a href="#"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-wishlist">
                            <a href="#" class="offcanvas-toggle"><button
                                    class="btn btn-sm btn-dark btn-outline-hover-dark">LOG IN</button></a>
                        </div>
                        <div class="header-cart">
                            <a href="#" class="offcanvas-toggle"><button
                                    class="btn btn-sm btn-dark btn-outline-hover-dark">SIGN UP</button></a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End --> --}}



                @if (Route::has('login'))
                    @auth

                        <div class="col-auto">
                            <div class="header-tools justify-content-end">
                                <div class="header-wishlist">
                                    <a href="{{ route('profile.edit') }}"><i class="far fa-user"></i></a>
                                </div>


                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    {{-- <button class="btn btn-sm btn-dark btn-outline-hover-dark">
                                        <x-responsive-nav-link :href="route('logout')"
                                                onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </x-responsive-nav-link>
                                    </button> --}}


                                    <div class="header-wishlist">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                this.closest('form').submit();"><button
                                                class="btn btn-sm btn-dark btn-outline-hover-dark">{{ __('Log Out') }}</button></a>
                                    </div>



                                </form>

                            </div>
                        </div>
                    @else
                        <div class="col-auto">
                            <div class="header-tools justify-content-end">
                                <div class="header-wishlist">
                                    <a href="{{ route('login') }}" class=""><button
                                            class="btn btn-sm btn-dark btn-outline-hover-dark">LOG IN</button></a>
                                </div>
                                <div class="header-wishlist">
                                    <a href="{{ route('register') }}" class=""><button
                                            class="btn btn-sm btn-dark btn-outline-hover-dark">SIGN UP</button></a>
                                </div>
                            </div>
                        </div>
                    @endauth
                @endif


            </div>
        </div>

    </div>
    <!-- Header Section End -->



    <!-- Header Section Start -->
    <div class="sticky-header section bg-light section-fluid d-none d-xl-block">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col-xl-auto col">
                    <div class="header-logo">
                        <a href="index.html"><img src={{ asset('assets/img/logonew.png') }} alt="Logo"
                                style="padding-right: 1px; width: 200px;"></a>
                    </div>
                </div>
                <!-- Header Logo End -->



                <!-- Search Start -->
                <div class="col-auto me-auto d-none d-xl-block">
                    <nav class="site-main-menu site-main-menu-left justify-content-center">

                        <ul>
                            <li class="has-children"><a href="{{ route('home') }}"><span
                                        class="menu-text">Home</span></a></li>

                            @if ($user == null || $subscriber == null)
                                <li class="has-children">
                                    <a href="{{ url('/home') }}#subscriptions"
                                        onclick="smoothScroll('#subscriptions')">
                                        <span class="menu-text">Subscriptions</span>
                                    </a>
                                </li>
                            @else
                                <li class="has-children"><a href="{{ route('allGyms') }}"><span
                                            class="menu-text">Gyms</span></a></li>
                            @endif

                            <li class="has-children"><a href="{{ route('aboutus') }}"><span class="menu-text">About
                                        us</span></a></li>

                            <li class="has-children"><a href="{{ route('contactus') }}"><span class="menu-text">Contact
                                        us</span></a></li>


                        </ul>


                    </nav>
                </div>
                <!-- Search End -->





                @if (Route::has('login'))
                    @auth

                        <div class="col-auto">
                            <div class="header-tools justify-content-end">
                                <div class="header-wishlist">
                                    <a href="{{ route('profile.edit') }}"><i class="far fa-user"></i></a>
                                </div>


                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <div class="header-wishlist">
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                            this.closest('form').submit();"><button
                                                class="btn btn-sm btn-dark btn-outline-hover-dark">{{ __('Log Out') }}</button></a>
                                    </div>



                                </form>

                            </div>
                        </div>
                    @else
                        <div class="col-auto">
                            <div class="header-tools justify-content-end">
                                <div class="header-wishlist">
                                    <a href="{{ route('login') }}" class=""><button
                                            class="btn btn-sm btn-dark btn-outline-hover-dark">LOG IN</button></a>
                                </div>
                                <div class="header-wishlist">
                                    <a href="{{ route('register') }}" class=""><button
                                            class="btn btn-sm btn-dark btn-outline-hover-dark">SIGN UP</button></a>
                                </div>
                            </div>
                        </div>
                    @endauth
                @endif



            </div>
        </div>

    </div>
    <!-- Header Section End -->



    <!-- Mobile Header Section Start -->
    <div class="mobile-header bg-light section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img src={{ asset('assets/img/logonew.png') }} alt="Logo"
                                style="padding-right: 1px; width: 200px;"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        class="bottom"
                                        transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->



    <!-- Mobile Header Section Start -->
    <div class="mobile-header sticky-header bg-light section d-xl-none">
        <div class="container">
            <div class="row align-items-center">

                <!-- Header Logo Start -->
                <div class="col">
                    <div class="header-logo">
                        <a href="index.html"><img src={{ asset('assets/img/logonew.png') }} alt="Logo"
                                style="padding-right: 1px; width: 200px;"></a>
                    </div>
                </div>
                <!-- Header Logo End -->

                <!-- Header Tools Start -->
                <div class="col-auto">
                    <div class="header-tools justify-content-end">
                        {{-- <div class="header-login d-none d-sm-block">
                            <a href="#"><i class="far fa-user"></i></a>
                        </div>
                        <div class="header-wishlist d-none d-sm-block">
                            <a href="#" class="offcanvas-toggle"><button
                                    class="btn btn-sm btn-dark btn-outline-hover-dark">LOG IN</button></a>
                        </div>
                        <div class="header-cart">
                            <a href="#" class="offcanvas-toggle"><button
                                    class="btn btn-sm btn-dark btn-outline-hover-dark">SIGN UP</button></a>
                        </div> --}}
                        <div class="mobile-menu-toggle">
                            <a href="#offcanvas-mobile-menu" class="offcanvas-toggle">
                                <svg viewBox="0 0 800 600">
                                    <path
                                        d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200"
                                        class="top"></path>
                                    <path d="M300,320 L540,320" class="middle"></path>
                                    <path
                                        d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190"
                                        class="bottom"
                                        transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Header Tools End -->

            </div>
        </div>
    </div>
    <!-- Mobile Header Section End -->


    <!-- OffCanvas Search Start -->
    <div id="offcanvas-mobile-menu" class="offcanvas offcanvas-mobile-menu ">
        <div class="inner customScroll">

            <div class="offcanvas-menu ">
                <ul>
                    <li><a href="{{ route('home') }}"><span class="menu-text">Home</span></a></li>

                    @if ($user == null || $subscriber == null)
                        <li class="has-children">
                            <a href="{{ url('/home') }}#subscriptions" onclick="smoothScroll('#subscriptions')">
                                <span class="menu-text">Subscriptions</span>
                            </a>
                        </li>
                    @else
                        <li class="has-children"><a href="{{ route('allGyms') }}"><span
                                    class="menu-text">Gyms</span></a></li>
                    @endif

                    <li><a href="{{ route('aboutus') }}"><span class="menu-text">About us</span></a></li>

                    <li><a href="{{ route('contactus') }}"><span class="menu-text">Contact us</span></a></li>


                </ul>


            </div>



            {{-- <div class="offcanvas-buttons">
                <div class="header-tools">
                    <div class="header-login">
                        <a href="#"><i class="far fa-user"></i></a>
                    </div>
                    <div class="header-wishlist">
                        <a href="#"><button class="btn btn-sm btn-dark btn-outline-hover-dark">LOG
                                IN</button></a>
                    </div>
                    <div class="header-cart">
                        <a href="#"><button class="btn btn-sm btn-dark btn-outline-hover-dark">SIGN
                                UP</button></a>
                    </div>
                </div>
            </div> --}}


            @if (Route::has('login'))
                @auth

                    <div class="offcanvas-buttons">
                        <div class="header-tools">
                            <div class="header-wishlist">
                                <a href="{{ route('profile.edit') }}"><i class="far fa-user"></i></a>
                            </div>


                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                {{-- <button class="btn btn-sm btn-dark btn-outline-hover-dark">
                                <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                            </button> --}}


                                <div class="header-wishlist">
                                    <a href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                        this.closest('form').submit();"><button
                                            class="btn btn-sm btn-dark btn-outline-hover-dark">{{ __('Log Out') }}</button></a>
                                </div>



                            </form>

                        </div>
                    </div>
                @else
                    <div class="offcanvas-buttons">
                        <div class="header-tools">
                            <div class="header-wishlist">
                                <a href="{{ route('login') }}" class=""><button
                                        class="btn btn-sm btn-dark btn-outline-hover-dark">LOG IN</button></a>
                            </div>
                            <div class="header-wishlist">
                                <a href="{{ route('register') }}" class=""><button
                                        class="btn btn-sm btn-dark btn-outline-hover-dark">SIGN UP</button></a>
                            </div>
                        </div>
                    </div>
                @endauth
            @endif

            <div class="offcanvas-social ">
                <a href="#" class="bg-light"><i class="fab fa-facebook-f "></i></a>
                <a href="#" class="bg-light"><i class="fab fa-twitter"></i></a>
                <a href="#" class="bg-light"><i class="fab fa-instagram"></i></a>
                <a href="#" class="bg-light"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- OffCanvas Search End -->

    <!-- NAV End -->
