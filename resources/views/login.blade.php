<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Prihlásenie</title>


</head>

<body class=" ">
<div class="bg-enter-screen bg-cover  h-screen  text-white flex">
    {{-- Prihlasovacie okno --}}
    <div class="bg-sky-blue rounded-2xl w-4/12 xl:w-3/12 flex flex-col justify-center self-center mx-auto ">

        <h1 class="text-center font-semibold text-2xl mt-10 mb-6"> Prihlásenie </h1>

        {{--form login--}}
        <form class="flex flex-col relative" method="POST" action="{{ route('login') }}">
        @csrf  {{--token na autorizáciu prihlásenia--}}
        <!-- Email Address -->
            <div class="md:w-4/6 mx-auto px-4 md:px-0 opacity-100">

                <p class="mb-0.5"> Email </p>
                <input id="email" class="w-full p-2 rounded-lg mx-auto mb-4 text-black" type="email" name="email"
                       required autofocus/>
            </div>

            <!-- Password -->
            <div class="md:w-4/6 mx-auto px-4 md:px-0 opacity-100">

                <p class="mb-0.5"> Heslo </p>
                <input id="password" class="w-full p-2 rounded-lg mx-auto mb-4 text-black"
                       type="password"
                       name="password"
                       required autocomplete="current-password"/>
            </div>

            <label class="flex mt-10 py-2 rounded-xl bg-gray-100 w-3/6 mx-auto opacity-100">
                <input class=" font-semibold mx-auto text-black " type="submit" value="Odoslať">
            </label>

            <a class="underline w-fit mx-auto my-4 text-sm text-gray-300 hover:text-white opacity-100"
               href="{{ route('register') }}">
                Ešte si neni prihlásený?
            </a>
        </form>

        <div class="absolute bottom-2 left-2/4">
            <p class="relative -left-2/4  ">Verzia 0.3</p>
        </div>
    </div>

</div>


</body>
</html>
