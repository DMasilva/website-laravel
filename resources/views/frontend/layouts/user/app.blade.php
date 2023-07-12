<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('page_title') - {{ config('app.name', 'SNB') }} - Efficiently Manage Your Sacco and Groups</title>

    <link rel="shortcut icon" href="{{ Vite::asset('resources/assets/images/favicon.ico') }}" type="image/x-icon">
    <link rel="icon" href="{{ Vite::asset('resources/assets/images/favicon.ico') }}" type="image/x-icon">

    <script src="https://code.jquery.com/jquery-3.6.2.min.js"></script>

    <script src="https://unpkg.com/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" /> --}}

    @vite(['resources/css/app.scss', 'resources/js/app.js'])

    @livewireStyles
</head>

<body>

    <div class="page-wrapper">

        <div class="preloader"></div>

        @include('frontend.includes.user.navigation-menu')

        {{ $slot }}

        @include('frontend.includes.user.footer')

        @include('frontend.includes.user.search-popup')

    </div>

    <div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-long-arrow-up fa-fw"></span>
    </div>

    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->

</body>

</html>
