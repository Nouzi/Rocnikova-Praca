<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Ročníková práca</title>


</head>

<body class="bg-gray-500">
<main class="flex h-screen">
    {{--Hlavná Časť--}}
<div class="mainBar w-5/6  bg-gray-400">

</div>

    {{--Vedlajšia časť--}}
<div class="sideBar w-1/6 bg-gray-600 text-center absolute right-0 h-screen">
    <div class="mt-5">
<h1 class="sideBar__mainText font-semibold"> Meno </h1>
    <p class="sideBar__secondaryText mt-4 py-3 bg-gray-500 w-5/6 rounded-lg mx-auto"> Jožko Mrkvička</p>
    </div>
    <div class="sideBar__List w-3/6 mx-auto space-y-4 mt-4">
    <h1 class="list__mainText font-semibold"> Zoznam </h1>
        <p class="bg-gray-500 rounded-lg py-2">
            <a class="list__category" href="#">Tried</a>
        </p>
        <p class="bg-gray-500 rounded-lg py-2">
            <a class="list__category" href="#"> Majstrov </a>
        </p>
<div class="absolute bottom-8 left-2/4">
        <p class="sideBar__privilege  font-semibold relative -left-2/4 py-2 px-8 bg-gray-500 rounded-lg"> Majster </p>
</div>
    </div>
</div>

</main>
</body>

</html>
