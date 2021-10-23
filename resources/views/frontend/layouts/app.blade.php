<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Meditation') }}- @yield('title')</title>

        <!------- FONTS ------->
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/fonts/fonts.css">
        <!----- CSS HERE ----->
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/swiper-bundle.min.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/bootstrap-grid.min.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/style.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/reuseble-code.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/header.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/footer.css" />
        <link rel="stylesheet" href="{{ asset('') }}asset/frontend/css/responsive.css" />
</head>

<body>


    <main>

        @yield('content')

    </main>
    @include('frontend.include.footer')

    @include('frontend.include.back-to-top')

    <!------------ JS HERE ------------>
    @include('frontend.include.script')


</body>

</html>
