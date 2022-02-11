<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TriedaC;

class AddPeople extends Controller
{
    public function edit(TriedaC $people)
    {

        return view('trieda.edit', ['people' => $people]);
    }

    public function update(TriedaC $people)
    {

        request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'class' => 'required'
        ]);

        $people->update([
            'name' => request('name'),
            'surname' => request('surname'),
            'class' => request('class'),
        ]);

        return redirect()->route('Admin_Panel');;
    }

    public function create()
    {

        return view('trieda.create');

    }

    public function store()
    {

        request()->validate([
            'name' => 'required',
            'surname' => 'required',
            'class' => 'required'
        ]);

        TriedaC::create([
            'name' => \request('name'),
            'surname' => \request('surname'),
            'class' => \request('class'),
        ]);

        return redirect()->route('Admin_Panel');
    }

    public function destroy(TriedaC $people)
    {

        $people->delete();


        return redirect()->route('Admin_Panel');;
    }


}

