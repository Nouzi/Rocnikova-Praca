<table class="table-auto text-center w-4/6 max-w-screen-md    border border-1 mx-10 bg-gray-600">
    <thead class="border border-1">
    <tr>
        <th>Meno</th>
        <th>Priezvisko</th>
        <th>Trieda</th>
    </tr>
    </thead>

    @foreach($list as $person)
        <tbody>
        <tr class="hover:bg-gray-500">
            <td>{{$person->name}}</td>
            <td>{{$person->surname}}</td>
            <td>{{$person->class}}</td>
        </tr>
        </tbody>
    @endforeach
</table>
