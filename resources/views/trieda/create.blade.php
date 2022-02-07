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
    <input type="text" id="name" name="name" value="">
    <br>
    <input type="text" id="surname" name="surname" value="">
    <br>
    <input type="text" id="class" name="class" value="">
    <br>
    <button>Aktualizovať</button>
</form>


</body>


</html>
