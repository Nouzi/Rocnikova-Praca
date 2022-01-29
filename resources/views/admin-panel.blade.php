{{--<x-app-layout>
    <x-slot name="header">

    </x-slot>--}}

    <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin Panel</title>


</head>

<body class="bg-enter-screen bg-cover">
<main
    class="flex bg-admin-screen bg-cover h-screen">  {{--Pozadie je všade avšak treba preto odstrániť všetky ostatné v každom tagu--}}
    {{--Hlavná Časť--}}
    <div class="mainBar w-5/6">

        <div class="flex flex-col justify-center border border-1    h-1/6 px-10">

            <select
                class="rounded-lg py-2 px-4 bg-gray-500 focus:shadow-none focus:border-0 focus:ring-0  w-fit">  {{--tlačítko sa ešte zmenšuje a treba domyslieť ten select--}}
                <option class="list__category rounded-lg py-2 px-4 bg-gray-500">Trieda 4.C</option>
                <option class="list__category rounded-lg py-2 px-4 bg-gray-500">Trieda 4.D</option>
                <option class="list__category rounded-lg py-2 px-4 bg-gray-500">Trieda 4.A</option>
                <option class="list__category rounded-lg py-2 px-4 bg-gray-500">Trieda 4.B</option>
            </select>
            {{--
                        <select name="cars" id="cars">
                            <option value="volvo">Volvo</option>
                            <option value="saab">Saab</option>
                            <option value="opel">Opel</option>
                            <option value="audi">Audi</option>
                        </select>--}}

        </div>


        <div class="flex flex-col justify-center h-5/6">

            <x-ludia-database :list="$ludia"/>

        </div>
    </div>

    {{--Vedlajšia časť--}}

    <div
        class="sideBar w-1/6 bg-admin-sidePanel text-white text-center absolute right-0 h-admin-sidePanel-Height self-center mr-4 rounded-xl ">
        <div class="mt-5">
            <h1 class="sideBar__mainText font-semibold"> Meno </h1>
            <p class="sideBar__secondaryText mt-4 py-3 bg-gray-500 w-5/6 rounded-lg mx-auto"> {{ Auth::user()->name }}</p>
        </div>
        <div class="sideBar__List w-3/6 mx-auto space-y-4 mt-4">
            <h1 class="list__mainText font-semibold"> Zoznam </h1>
            <p class="bg-gray-500 rounded-lg py-2">
                <a class="list__category" href="#">Tried</a>
            </p>

            <div class="absolute bottom-8 left-2/4">
                <div class="sideBar__privilege  font-semibold relative -left-2/4 py-2 px-4 bg-gray-500 rounded-lg">


                {{--Formulár na odhlásenie --}}
                <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <a href="route('logout')"
                           onclick="event.preventDefault();
                           this.closest('form').submit();">
                            Odhlásiť sa
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>


</main>
</body>

</html>
{{--</x-app-layout>--}}
