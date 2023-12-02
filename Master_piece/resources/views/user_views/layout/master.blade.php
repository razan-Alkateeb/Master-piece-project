<!DOCTYPE html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('user_views.layout.head')
</head>

<body>


    @include('user_views.layout.navbar')


    <div class="offcanvas-overlay"></div>


    @yield('content')



    @include('user_views.layout.footer')


    @include('user_views.layout.script')

</body>

</html>
