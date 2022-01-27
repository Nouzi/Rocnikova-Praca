<!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <title>Registrácia</title>


    </head>

    <body class="">
    {{--Pozadie--}}
    <main class="bg-gray-800 h-screen  text-white flex">

        {{--Pozadie formuláru --}}
<div class="bg-sky-blue rounded-2xl w-4/12 xl:w-3/12 h-fit mx-auto my-auto px-10 pt-10 pb-5 ">

    <h1 class="text-center font-semibold text-2xl pb-5">Registrácia</h1>

        <form class="h-fit mx-auto my-auto" method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
            <div>
                <p class="">Meno</p>
                <input id="name" class="block mt-1 w-full p-2 rounded-lg text-black" type="text" name="name"  required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <p>Emailová adresa</p>
                <input id="email" class="block mt-1 w-full p-2 rounded-lg text-black" type="email" name="email"  required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <p>Heslo</p>
                <input id="password" class="block mt-1 w-full p-2 rounded-lg text-black"
                         type="password"
                         name="password"
                         required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <p>Potvrdenie hesla</p>
                <input id="password_confirmation" class="block mt-1 w-full p-2 rounded-lg text-black"
                         type="password"
                         name="password_confirmation" required />
            </div>

            {{--Odoslanie--}}
            <label class="flex mt-10  py-2 rounded-xl bg-gray-100 w-3/6 mx-auto ">
                <input class=" font-semibold mx-auto text-black " type="submit" value="Odoslať">
            </label>

        </form>
    <a class="flex  underline w-fit mx-auto mt-2   text-sm text-gray-200 hover:text-gray-900" href="{{ route('login') }}">
        Už si zaregistrovaný?
    </a>
</div>

        <div class="absolute bottom-2 left-2/4">
            <p class="bg-gray-800 relative -left-2/4  ">Verzia 0.2</p>
        </div>
    </main>
    </body>

    </html>

