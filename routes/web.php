<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel;
use \App\Models\person;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
| app/Providers/RouteServiceProvider.php pre zmenu redirectu pri logine
|
| register view je priamo prepísaný v app/Http/Controllers/Auth/RegisteredUserController.php
|
| ak sa pokúsime prihlásiť priamo cez url na admin-panel.blade.php,
| tak nás to presmeruje naspäť na login ak sme sa ešte neprihlásili
*/

Route::get('/', function () {
    return view('login');    // úvodná stránka
});


Route::get('/triedy', function () {
    return view('welcome');
});



Route::get('admin-panel/trieda_a', function () {
    $people = \App\Models\TriedaA::all();
    return view('trieda_a', [
        'people' => $people
    ]);
});

Route::get('admin-panel/trieda_b', function () {
    $people = \App\Models\TriedaB::all();
    return view('trieda_b', [
        'people' => $people
    ]);
});

/*  admin panel zobrazuje tabulku C   */
Route::get('/admin-panel', function () {
    $people = \App\Models\TriedaC::all();
    return view('admin-panel', [
        'people' => $people
    ]);
})->middleware(['auth'])->name('admin-panel');

Route::get('admin-panel/trieda_d', function () {
    $people = \App\Models\TriedaD::all();
    return view('trieda_d', [
        'people' => $people
    ]);
});





require __DIR__.'/auth.php';


