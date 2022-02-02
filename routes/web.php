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


/*Route::get('ludia-database', [ShowPeople::class, 'show'] );*/
Route::get('/triedy', function () {
    return view('welcome');
});


/*wild card trieda pod stránka */
/*Route::get('admin-panel/{class}', function ($trieda) {
    $class = file_get_contents(__DIR__ . "/../resources/triedy/{$trieda}.html");

    return view('admin-panel', [
        'class' => $trieda
    ]);
});*/

Route::get('admin-panel/trieda_a', function () {
    return view('trieda_a');
});

Route::get('admin-panel/trieda_b', function () {
    return view('trieda_b');
});

Route::get('admin-panel/trieda_d', function () {
    return view('trieda_d');
});



Route::get('/admin-panel', [AdminPanel::class, 'index'])->middleware(['auth'])->name('admin-panel');

require __DIR__.'/auth.php';


