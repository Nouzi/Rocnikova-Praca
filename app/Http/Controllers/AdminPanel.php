<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ludia;

class AdminPanel extends Controller{
    public function index(){
        $ludia = ludia::all();
        return view("admin-panel", ["ludia" => $ludia]);
    }
}
