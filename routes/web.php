<?php

use Illuminate\Support\Facades\Route;

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





Route::get('/admin-panel', function () {
    return view('admin-panel');     // stránka po prihlásení sa
})->middleware(['auth'])->name('admin-panel');

require __DIR__.'/auth.php';


