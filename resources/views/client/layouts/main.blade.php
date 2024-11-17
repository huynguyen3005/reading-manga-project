<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uiparadox.co.uk/public/templates/animeloop/v2/demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 14:40:47 GMT -->

<head>
    <!-- Meta Data -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Manga Reading</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {{-- web icon --}}
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/media/favicon.png') }}">
    <!-- Site Stylesheet -->
    @include('client.layouts.css')
</head>

<body class="sticky-header">
    <!-- Preloader -->
    @include('client.layouts.preloader')
    <!-- Back To Top Start -->
    @include('client.layouts.back-to-top')
    <!-- Back To Top End -->

    <!-- Main Wrapper Start -->
    <div class="main-wrapper" id="main-wrapper">
        <!--=        Header Area Start       	=-->
        @include('client.layouts.header')
        <!--=        Breadcrumb Area Start       =-->
        @include('client.layouts.breadcrumb')
        <!--=        Main Content Start          =-->
        @yield('content')

        <!--=           Footer Area Start       =-->
        @include('client.layouts.footer')

    </div>
    <!-- Jquery Js -->
    @include('client.layouts.js')
</body>


<!-- Mirrored from uiparadox.co.uk/public/templates/animeloop/v2/demo/home.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 04 Nov 2024 14:40:59 GMT -->

</html>
