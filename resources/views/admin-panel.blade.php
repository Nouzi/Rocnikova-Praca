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
    class="flex bg-admin-screen bg-cover h-screen ">  {{--Pozadie je všade avšak treba preto odstrániť všetky ostatné v každom tagu--}}
    {{--Hlavná Časť--}}
    <div class="mainBar w-5/6">

        <div class="flex flex-col justify-center border border-1    h-1/6 px-10">

            <ul
                class="flex gap-4 rounded-lg py-2 px-4 focus:shadow-none focus:border-0 focus:ring-0  w-fit">  {{--tlačítko sa ešte zmenšuje a treba domyslieť ten select--}}
                <li class="list__category rounded-lg py-2 px-4 bg-admin-button hover:bg-admin-button-hover"><a
                        href="/admin-panel/trieda_d"> Trieda 4.D </a></li>
                <li class="list__category rounded-lg py-2 px-4 bg-admin-button hover:bg-admin-button-hover"><a
                        href="/admin-panel/trieda_a"> Trieda 4.A </a></li>
                <li class="list__category rounded-lg py-2 px-4 bg-admin-button hover:bg-admin-button-hover"><a
                        href="/admin-panel/trieda_b"> Trieda 4.B </a></li>


            </ul>


        </div>


        <div class="flex flex-col justify-center  h-5/6">

            <table class="table-auto text-center w-4/6 max-w-screen-md    border border-1 mx-10 bg-gray-600">
                <thead class="border border-1">
                <tr>
                    <th>Meno</th>
                    <th>Priezvisko</th>
                    <th>Trieda</th>
                </tr>
                </thead>

                @foreach($people as $person)
                    <tbody>
                    <tr class="hover:bg-gray-500">
                        <td>{{$person->name}}</td>
                        <td>{{$person->surname}}</td>
                        <td>{{$person->class}}</td>
                    </tr>
                    </tbody>
                @endforeach
            </table>

        </div>
    </div>

    {{--Vedlajšia časť--}}

    <div
        class="sideBar w-1/6 bg-admin-sidePanel text-black text-center absolute right-0 h-admin-sidePanel-Height self-center mr-4 rounded-xl ">
        <div class="mt-5">
            <h1 class="sideBar__mainText font-semibold text-white"> Meno </h1>
            <p class="sideBar__secondaryText mt-4 py-3 bg-admin-button w-5/6 rounded-lg mx-auto"> {{ Auth::user()->name }}</p>
        </div>
        <div class="sideBar__List w-3/6 mx-auto space-y-4 mt-4">


            <div class="absolute bottom-8 left-2/4">
                <div
                    class="sideBar__privilege font-semibold relative -left-2/4 py-2 px-4 bg-admin-button hover:bg-admin-button-hover text-black rounded-lg">


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


