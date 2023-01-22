<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

    <link rel="stylesheet" href="{{asset('./css/stylesFront.css')}}">
    <link rel="icon" href="{{asset('./favicon.ico')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <header>
        <div class="rest">
            <a href="/~s47524/RestaurantApp/public">
                <img src="{{url('./jpgs/logo.png')}}" alt="Bite Me logo">
                <div class="logo">Bite Me</div>
            </a>
        </div>
        <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>

        <nav class="nav-bar">
            <ul class="wrapper">
                <li class="nav__item">
                    <a href="/~s47524/RestaurantApp/public">Home</a>
                </li>
                <li class="nav__item">
                    <a href="{{route('menus.index')}}">Menu</a>
                </li>
                <li class="nav__item">
                    <a href="{{route('reservation.step.one')}}">Make Reservation</a>
                </li>
                <li class="nav__item">
                    <a href="{{route('admin.index')}}">Admin</a>
                </li>
            </ul>
        </nav>
    </header>

    <div class="w-full">
        {{ $slot }}
    </div>

    <script src="{{asset('./js/mainFront.js')}}"></script>
</body>

</html>