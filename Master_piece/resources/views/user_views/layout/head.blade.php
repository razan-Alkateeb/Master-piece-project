<title>@yield('title')</title>

<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href={{ asset('assets/images/titleIcon.png') }}>
<link rel="stylesheet" href={{ asset('assets/css/flaticon.css') }} />
{{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" /> --}}

<!-- CSS
============================================ -->

<!-- Vendor CSS (Bootstrap & Icon Font) -->
<link rel="stylesheet" href={{asset('assets/css/vendor/bootstrap.min.css')}}>
<link rel="stylesheet" href={{asset('assets/css/vendor/fontawesome.min.css')}}>
<link rel="stylesheet" href={{asset('assets/css/vendor/themify-icons.css')}}>
<link rel="stylesheet" href={{asset('assets/css/vendor/customFonts.css')}}>

<!-- Plugins CSS (All Plugins Files) -->
<link rel="stylesheet" href={{asset('assets/css/plugins/select2.min.css')}}>
<link rel="stylesheet" href={{asset('assets/css/plugins/perfect-scrollbar.css')}}>
<link rel="stylesheet" href={{asset('assets/css/plugins/swiper.min.css')}}>
<link rel="stylesheet" href={{asset('assets/css/plugins/nice-select.css')}}>
<link rel="stylesheet" href={{asset('assets/css/plugins/ion.rangeSlider.min.css')}}>
<link rel="stylesheet" href={{asset('assets/css/plugins/photoswipe.css')}}>
<link rel="stylesheet" href={{asset('assets/css/plugins/photoswipe-default-skin.css')}}>
<link rel="stylesheet" href={{asset('assets/css/plugins/magnific-popup.css')}}>
<link rel="stylesheet" href={{asset('assets/css/plugins/slick.css')}}>

<!-- Main Style CSS -->
<!-- <link rel="stylesheet" href="assets/css/style.css"> -->

<!-- Use the minified version files listed below for better performance and remove the files listed above -->
<!-- <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
 <link rel="stylesheet" href="assets/css/plugins/plugins.min.css"> -->
<link rel="stylesheet" href={{asset('assets/css/style.min.css')}}>
<!-- <link rel="stylesheet" href="../css/style.css" /> -->

<style>
   
    a:hover{
        color: #000 !important;
        /* border: 1px solid #000 !important; */
        background-color: #f0f0f0;
        border-radius: 30px;
    }
    .cd-select:hover{
        color: #fff !important; font-weight: 700;
        background-color: #000;
    }
</style>


@yield('css')

{{-- <link rel="stylesheet" href={{asset('dist/css/adminlte.min.css')}}> --}}









