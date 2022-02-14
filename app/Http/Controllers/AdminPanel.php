<?php

namespace App\Http\Controllers;

use App\Models\trieda;
use App\Models\TriedaC;
use App\Models\TriedaA;
use App\Models\TriedaD;
use App\Models\TriedaB;
use Illuminate\Http\Request;

class AdminPanel extends Controller
{

    public function index()
    {
        $model = TriedaC::all();
        return view("admin-panel", ["people" => $model]);
    }

    public function triedaA()
    {
        $model = TriedaA::all();
        return view("trieda_a", ["people" => $model]);
    }

    public function triedaD()
    {
        $model = TriedaD::all();
        return view("trieda_d", ["people" => $model]);
    }

    public function triedaB()
    {
        $model = TriedaB::all();
        return view("trieda_b", ["people" => $model]);
    }

    public function trieda()
    {
        $model = trieda::find(1)->user;
        return dd($model);
    }

}
