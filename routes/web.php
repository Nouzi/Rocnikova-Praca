<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel;
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


Route::get('/admin-panel', [AdminPanel::class, 'index'])->middleware(['auth'])->name('admin-panel');

require __DIR__.'/auth.php';


