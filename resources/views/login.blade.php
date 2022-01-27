<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Prihlásenie</title>


</head>

<body class=" ">
<div class="bg-gray-800 h-screen  text-white flex">
{{-- Prihlasovacie okno --}}
    <div class="bg-sky-blue rounded-2xl w-4/12 xl:w-3/12 flex flex-col justify-center self-center mx-auto ">

    <h1 class="text-center font-semibold text-2xl mt-10 mb-6"> Prihlásenie </h1>

    <form class="flex flex-col relative" method="POST" action="{{ route('login') }}">
    @csrf
        <!-- Session Status -->
    {{--
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

        <!-- Email Address --> {{-- prepracovaná časť z pôvodného laravel loginu --}}
        <div class="md:w-4/6 mx-auto px-4 md:px-0 opacity-100">
{{--
            <x-label for="email" :value="__('Email')" />
--}}
            <p class="mb-0.5"> Email </p>
            <input id="email" class="w-full p-2 rounded-lg mx-auto mb-4 text-black" type="email" name="email" required autofocus />
        </div>

        <!-- Password -->  {{-- prepracovaná časť z pôvodného laravel loginu --}}
        <div class="md:w-4/6 mx-auto px-4 md:px-0 opacity-100">
            {{--
            <x-label for="password" :value="__('Password')" />
            --}}
            <p class="mb-0.5"> Heslo </p>
            <input id="password" class="w-full p-2 rounded-lg mx-auto mb-4 text-black"
                     type="password"
                     name="password"
                     required autocomplete="current-password" />
        </div>
{{--
        <div class="w-4/6 mx-auto">
            <p class="mb-0.5"> Meno</p>
            <input class="w-full p-2 rounded-lg mx-auto mb-4 text-black" name="meno">
        </div>
        <div class="w-4/6 mx-auto">
            <p class="mb-0.5"> Priezvisko </p>
            <input class="w-full p-2 rounded-lg mx-auto text-black" name="priezvisko">
        </div>--}}
        <label class="flex mt-10 py-2 rounded-xl bg-gray-100 w-3/6 mx-auto opacity-100">
        <input class=" font-semibold mx-auto text-black " type="submit" value="Odoslať">
        </label>

        <a class="underline w-fit mx-auto my-4 text-sm text-gray-200 hover:text-gray-900 opacity-100" href="{{ route('register') }}">
            Ešte si neni prihlásený?
        </a>

      {{--  <button type="submit"> Odoslať </button>--}}


    {{--        <div class="flex my-10 py-2 rounded-xl bg-gray-100 w-3/6 mx-auto">
                @if (Route::has('password.request'))

                @endif

                <x-button class="font-semibold mx-auto text-black">
                    Odoslať
                </x-button>
            </div>--}}

    </form>
        <div class="absolute bottom-2 left-2/4">
        <p class="bg-gray-800 relative -left-2/4  ">Verzia 0.2</p>
        </div>
    </div>

</div>


</body>
</html>
