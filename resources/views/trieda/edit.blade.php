<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin Panel</title>


</head>

<body>

<div class="bg-enter-screen bg-cover  h-screen  text-white flex">

<form class="bg-sky-blue rounded-2xl w-4/12 xl:w-3/12 flex flex-col justify-center self-center mx-auto " method="GET"
      action="/admin-panel/{{$people->id}}">
    @method('PUT')
    @csrf
    <div class="md:w-4/6 mx-auto px-4 mt-6 md:px-0 opacity-100">
        <p class="mb-0.5"> Meno </p>
        <input class="w-full p-2 rounded-lg mx-auto mb-4 text-black" type="text" id="name" name="name"
               value="{{$people->name}}">
    </div>
    <div class="md:w-4/6 mx-auto px-4 md:px-0 opacity-100">
        <p class="mb-0.5"> Priezvisko </p>
        <input class="w-full p-2 rounded-lg mx-auto mb-4 text-black" type="text" id="surname" name="surname"
               value="{{$people->surname}}">
    </div>

    <div class="md:w-4/6 mx-auto px-4 md:px-0 opacity-100">
        <p class="mb-0.5"> Trieda </p>
        <input class="w-full p-2 rounded-lg mx-auto mb-4 text-black" type="text" id="class" name="class"
               value="{{$people->class}}">
    </div>

    <div class="flex justify-center items-center ">
        <button class="btn-admin-panel w-fit my-5 mx-4">Aktualizovať</button>
        <a class="btn-admin-panel w-fit bg-gray-500" href="/admin-panel"> Vrátiť sa </a>

        <form action="/admin-panel/{{$people->id}}">
            @csrf
            @method('DELETE')

            <button class="btn-admin-panel w-fit my-5 mx-4 bg-red-500 hover:bg-red-400">Odstrániť</button>


        </form>
    </div>
</form>

</div>


</body>


</html>
