<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Admin Panel</title>


</head>

<body>

<form method="POST" action="/admin-panel">
    @csrf
    <input type="text" id="name" name="name" value="">
    <br>
    <input type="text" id="surname" name="surname" value="">
    <br>
    <input type="text" id="class" name="class" value="">
    <br>
    <button class="btn-admin-panel w-fit my-4 mx-4">Pridať žiaka</button>
    <a class="btn-admin-panel w-fit bg-gray-500" href="/admin-panel"> Vrátiť sa </a>

</form>


</body>


</html>
