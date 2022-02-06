<?php

namespace App\Http\Controllers;

use App\Models\TriedaC;
use App\Models\TriedaA;
use App\Models\TriedaD;
use App\Models\TriedaB;
use Illuminate\Http\Request;
use App\Models\ludia;

class AdminPanel extends Controller{

    public function index(){
        $model = TriedaC::all();
        return view("admin-panel", ["people" => $model]);
    }



    public function triedaA(){
        $model = TriedaA::all();
        return view("trieda_a", ["people" => $model]);
    }

    public function triedaD(){
        $model = TriedaA::all();
        return view("trieda_a", ["people" => $model]);
    }

    public function triedaB(){
        $model = TriedaA::all();
        return view("trieda_a", ["people" => $model]);
    }

}
