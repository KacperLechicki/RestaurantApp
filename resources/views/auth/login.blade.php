<x-guest-layout>
    <link rel="stylesheet" href="{{asset('/css/stylesFront.css')}}">

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="min-h-screen flex flex-col justify-center items-center">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" placeholder="admin@gmail.com" class="form-input-login block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" placeholder="password" class="form-input-login block text-xl mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-8">

            <x-primary-button class="form-button-login ml-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </form>

    <footer class="footer">
        <div class="wrapper">
        </div>
        <p class="footer__bottom-text">&copy; <span class="footer__year">2023</span> Bite Me</p>
    </footer>
</x-guest-layout>
