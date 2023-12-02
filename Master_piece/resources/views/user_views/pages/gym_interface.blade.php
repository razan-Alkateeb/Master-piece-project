<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Gym Interface</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/titleIcon.png">

    <!-- CSS
============================================ -->

    <!-- Vendor CSS (Bootstrap & Icon Font) -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/vendor/themify-icons.css">
    <link rel="stylesheet" href="assets/css/vendor/customFonts.css">

    <!-- Plugins CSS (All Plugins Files) -->
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/plugins/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nice-select.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe.css">
    <link rel="stylesheet" href="assets/css/plugins/photoswipe-default-skin.css">
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/plugins/slick.css">

    <!-- Main Style CSS -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>

    <div class="coming-soon-section section pt-5" data-bg-image="assets/images/bg/bgg.png">
        <!-- Login & Register Section Start -->
        <div class="section  ">
            <div class="container ">
                <div class="row g-0 justify-content-center">
                    {{-- <div class="col-lg-3"> </div> --}}
                    <div class="col-lg-5">

                        <div class="user-login-register bg-light p-4 rounded-5">
                            <div class="login-register-title">
                                {{-- <h2 class="title">Register your gym</h2> --}}

                                <div class="logo learts-mb-10">
                                    <a href="index.html"><img src={{ asset('assets/img/logonew.png') }} alt="logo"
                                            style="width: 200px; border-radius: 20px;"></a>
                                </div>
                                <div class="col-12 learts-mb-20">
                                    <p>If you don't have an activated code,
                                        please visit our website to obtain one.
                                    </p>
                                </div>
                            </div>


                            <div class="login-register-form">

                                <form action="{{ route('visitGym') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row learts-mb-n50">

                                        <input type="hidden" value="7" name="gymid">


                                        {{-- email   --}}

                                        <div class="col-12 learts-mb-30">
                                            <label for="email">Email</label>
                                            <input id="email" class="required" type="email" name="email"
                                                placeholder="Enter your email">
                                            <span class="text-danger">
                                                @error('email')
                                                    {{-- {{ $message }} --}}
                                                @enderror
                                            </span>
                                        </div>


                                        {{-- Name --}}
                                        <div class="col-12 learts-mb-30">
                                            <label for="code">Code </label>
                                            <input id="code" class="required" type="text" name="code"
                                                placeholder="Enter your code">
                                            <span class="text-danger">
                                                @error('code')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        {{-- Password --}}
                                        <div class="col-12 learts-mb-30">
                                            <label for="password">Password </label>
                                            <input id="password" class="required" type="password" name="password"
                                                placeholder="Enter your password">
                                            <span class="text-danger">
                                                @error('password')
                                                    {{ $message }}
                                                @enderror
                                            </span>
                                        </div>

                                        @if (session('error'))
                                            <div class="alert alert-danger" role="alert">
                                                {{ session('error') }}
                                            </div>
                                        @elseif (session('success'))
                                            <div class="alert alert-success" role="alert">
                                                {{ session('success') }}
                                            </div>
                                        @endif



                                        <div class="col-12 text-center learts-mb-50">
                                            <input type="submit" value="Register Gym"
                                                class="btn btn-dark btn-outline-hover-dark"><br>
                                        </div>

                                    </div>
                                </form>


                            </div>
                        </div>
                    </div>



                </div>

            </div>

        </div>
        <!-- Login & Register Section End -->
    </div>

    <!-- JS
============================================ -->

    <!-- Vendors JS -->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-3.4.1.min.js"></script>
    <script src="assets/js/vendor/jquery-migrate-3.1.0.min.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>

    <!-- Plugins JS -->
    <script src="assets/js/plugins/select2.min.js"></script>
    <script src="assets/js/plugins/jquery.nice-select.min.js"></script>
    <script src="assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="assets/js/plugins/swiper.min.js"></script>
    <script src="assets/js/plugins/slick.min.js"></script>
    <script src="assets/js/plugins/mo.min.js"></script>
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <script src="assets/js/plugins/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/plugins/isotope.pkgd.min.js"></script>
    <script src="assets/js/plugins/jquery.matchHeight-min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/plugins/photoswipe.min.js"></script>
    <script src="assets/js/plugins/photoswipe-ui-default.min.js"></script>
    <script src="assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="assets/js/plugins/ResizeSensor.js"></script>
    <script src="assets/js/plugins/jquery.sticky-sidebar.min.js"></script>
    <script src="assets/js/plugins/product360.js"></script>
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/plugins/jquery.scrollUp.min.js"></script>
    <script src="assets/js/plugins/scrollax.min.js"></script>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <!-- <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script> -->

    <!-- Main Activation JS -->
    <script src="assets/js/main.js"></script>

</body>

</html>
