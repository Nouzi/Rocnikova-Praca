<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin Panel</title>


</head>

<body>

<form method="POST" action="/admin-panel/{{$people->id}}">
    @csrf

    <input type="text" id="name" name="name" value="{{$people->name}}">
    <br>
    <input type="text" id="surname" name="surname" value="{{$people->surname}}">
    <br>
    <input type="text" id="class" name="class" value="{{$people->class}}">
</form>


</body>


</html>
