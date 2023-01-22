<x-guest-layout>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- icons -->
        <script src="https://kit.fontawesome.com/296f8022ec.js" crossorigin="anonymous"></script>">

        <!-- stylesheet -->
        <link rel="stylesheet" href="{{asset('./css/stylesFront.css')}}">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>

    <body class="font-sans antialiased w-full">
        <section class="welcome">
            <div class="hero-img">
                <div class="hero-shadow"></div>
                <!-- <img src="{{url('./jpgs/logo.png')}}" alt="Bite Me logo"> -->
                <h1 class="hero-title">Welcome to <span>Bite Me</span></h1>
                <p class="hero-text">See what delicious we have prepared for you!</p>
                <a href="{{route('menus.index')}}"><button class="hero-btn">Check our menu</button></a>
            </div>
        </section>

        <section id="aboutus" class="aboutus">
            <div class="wrapper">

                <h2 class="section-title">About Us</h2>

                <div class="aboutus__box">
                    <div class="aboutus__box-img"><img src="{{url('./jpgs/chef_small.jpeg')}}" alt="Chef preparing food"
                            class="aboutus__img">
                    </div>
                    <div class="aboutus__box-text">
                        <h3 class="aboutus__title">Food is an art</h3>
                        <p class="aboutus__text">"We treat each prepared dish as a small work of art. We make sure that
                            a
                            meal with us is a unique experience."</p>
                    </div>
                </div>

                <div class="aboutus__box">
                    <div class="aboutus__box-img"><img src="{{url('./jpgs/bakery_small.jpeg')}}"
                            alt="Dough ball in the bakery" class="aboutus__img">
                    </div>
                    <div class="aboutus__box-text">
                        <h3 class="aboutus__title">We care about the details</h3>
                        <p class="aboutus__text">"We make each dough ourselves, and all ingredients come from local
                            suppliers."</p>
                    </div>
                </div>

            </div>
        </section>

        <section id="reviews" class="reviews">
            <div class="wrapper">
                <h2 class="section-title">Reviews</h2>

                <div class="reviews__boxes">

                    <div class="reviews__box">
                        <div class="reviews__box-img">
                            <img src="{{url('./jpgs/man1.jpeg')}}" alt="John Anthony">
                        </div>
                        <div class="reviews__box-info">
                            <div class="reviews__box-quote"><i class="fas fa-quote-right"></i></div>
                            <p class="reviews__box-text">The best food in the world!</p>
                            <strong>John Anthony</strong>
                        </div>
                    </div>

                    <div class="reviews__box">
                        <div class="reviews__box-img">
                            <img src="{{url('./jpgs/woman1.jpeg')}}" alt="Sara Backer">
                        </div>
                        <div class="reviews__box-info">
                            <div class="reviews__box-quote"><i class="fas fa-quote-right"></i></div>
                            <p class="reviews__box-text">I've never experienced anything so wonderful...</p>
                            <strong>Sara Backer</strong>
                        </div>
                    </div>

                    <div class="reviews__box reviews__box-last">
                        <div class="reviews__box-img">
                            <img src="{{url('./jpgs/man2.jpeg')}}" alt="Chris Ball">
                        </div>
                        <div class="reviews__box-info">
                            <div class="reviews__box-quote"><i class="fas fa-quote-right"></i></div>
                            <p class="reviews__box-text">I definitely recommend it.</p>
                            <strong>Chris Ball</strong>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <footer class="mfooter">
        <div class="wrapper">
        </div>
        <p class="footer__bottom-text">&copy; <span class="footer__year">2023</span> Bite Me</p>
        </footer>
</x-guest-layout>