<x-layouts.admin-panel>

    <x-slot:redirectToTrieda>
        <ul
            class="flex gap-4 rounded-lg py-2 px-4 focus:shadow-none focus:border-0 focus:ring-0  w-fit">  {{--tlačítko sa ešte zmenšuje a treba domyslieť ten select--}}
            <li class="list__category rounded-lg py-2 px-4 bg-admin-button hover:bg-admin-button-hover"><a
                    href="/admin-panel/trieda_d"> Trieda 4.D </a></li>
            <li class="list__category rounded-lg py-2 px-4 bg-admin-button hover:bg-admin-button-hover"><a
                    href="/admin-panel/trieda_a"> Trieda 4.A </a></li>
            <li class="list__category rounded-lg py-2 px-4 bg-admin-button hover:bg-admin-button-hover"><a
                    href="/admin-panel/trieda_b"> Trieda 4.B </a></li>
        </ul>
    </x-slot:redirectToTrieda>


    {{--main slot--}}
    <table class="table-auto text-center w-4/6 max-w-screen-md    border border-1 mx-10 bg-gray-600">
        <thead class="border border-1">
        <tr>
            <th>Meno</th>
            <th>Priezvisko</th>
            <th>Trieda</th>
            <th>Úprava</th>
        </tr>
        </thead>

        @foreach($people as $person)
            <tbody>
            <tr class="hover:bg-gray-500">
                <td>{{$person->name}}</td>
                <td>{{$person->surname}}</td>
                <td>{{$person->class}}</td>
                <td>
                    <a class="text-blue-400 hover:text-blue-200"
                       href="/admin-panel/{{$person->id}}/edit">Edit</a>
                </td>
            </tr>
            </tbody>

        @endforeach
    </table>
</x-layouts.admin-panel>
