<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin Panel</title>


</head>

<body>

<form method="GET" action="/admin-panel/{{$people->id}}">
    @method('PUT')
    @csrf
    <input type="text" id="name" name="name" value="{{$people->name}}">
    <br>
    <input type="text" id="surname" name="surname" value="{{$people->surname}}">
    <br>
    <input type="text" id="class" name="class" value="{{$people->class}}">
    <br>
    <button class="btn-admin-panel w-fit my-5 mx-4">Aktualizovať</button>
    <a class="btn-admin-panel w-fit bg-gray-500" href="/admin-panel"> Vrátiť sa </a>
</form>

<form action="/admin-panel/{{$people->id}}">
    @csrf
    @method('DELETE')

    <button class="btn-admin-panel w-fit my-5 mx-4 bg-red-500 hover:bg-red-400">Odstrániť</button>


</form>


</body>


</html>
