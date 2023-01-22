<x-guest-layout>
    <link rel="stylesheet" href="{{asset('./css/stylesFront.css')}}">


    <!-- <div class="container w-full px-5 py-6 mx-auto">
        <div class="grid lg:grid-cols-4 gap-y-6">
            @foreach($menus as $menu)
            <div class="max-w-xs mx-4 mb-2 rounded shadow-lg">
                <img src="{{Storage::url($menu->image)}}" alt="image" class="">
                <div class="px-6 py-4">
                    <h4 class="mb-3 text-xl font-semibold tracking-tight uppercase">{{$menu->name}}</h4>
                    <p class="leading-normal">{{$menu->description}}</p>
                </div>
                <div class="flex items-center justify-between p-4">
                    <span class="text-xl">${{$menu->price}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div> -->

    <div class="container w-full px-5 py-6 mx-auto">
        <div class="card-container">
            @foreach($menus as $menu)
            <div class="card max-w-xs">
                <div class="card-img-wrapper">
                    <img src="https://foka.umg.edu.pl/~s47524/RestaurantApp{{Storage::url("app/$menu->image")}}" alt="image" class="card-img">
                </div>
                <div class="card-text">
                    <h4 class="card-name">{{$menu->name}}</h4>
                    <p class="card-description">{{$menu->description}}</p>
                </div>
                <div class="card-price">
                    <span class="card-price-amount">${{$menu->price}}</span>
                </div>
            </div>
            @endforeach
        </div>
    </div>


    <footer class="footer">
        <div class="wrapper">
        </div>
        <p class="footer__bottom-text">&copy; <span class="footer__year">2023</span> Bite Me</p>
    </footer>
</x-guest-layout>