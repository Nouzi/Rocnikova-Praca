<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TriedaC;

class AddPeople extends Controller
{
    public function edit(TriedaC $people) {

        return view('trieda.edit', ['people' => $people]);
    }
}

