<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Restaurant - Admin') }}</title>


    <!-- Fonts -->
    <!-- styles -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <link rel="stylesheet" href="{{asset('/css/stylesAdmin.css')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://kit.fontawesome.com/296f8022ec.js" crossorigin="anonymous"></script>

    <!-- bootstrap cdn
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script> -->
</head>

<body class="font-sans antialiased">

    <nav>
        <ul>
            <li>
                <a href="{{route('admin.menus.index')}}">Menu</a>
            </li>
            <li>
                <a href="{{route('admin.tables.index')}}">Tables</a>
            </li>
            <li>
                <a href="{{route('admin.reservation.index')}}">Reservation</a>
            </li>
            <li>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <a :href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </li>
        </ul>
    </nav>


    <main class="m-2 p-8 w-full">
        <div>
            @if (session()->has('danger'))
            <div class="danger p-4 mb-4 text-sm text-red-700 bg-red-100" role="alert">
                <span class="font-medium"></span> {{session()->get('danger')}}
            </div>
            @endif
            @if (session()->has('success'))
            <div class="success p-4 mb-4 text-sm text-green-700 bg-green-100" role="alert">
                <span class="font-medium"></span> {{session()->get('success')}}
            </div>
            @endif
            @if (session()->has('warning'))
            <div class="warning p-4 mb-4 text-sm text-yellow-700 bg-yellow-100" role="alert">
                <span class="font-medium"></span> {{session()->get('warning')}}
            </div>
            @endif
        </div>
        {{$slot}}
    </main>
</body>

</html>