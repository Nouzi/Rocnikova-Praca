<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel;
use \App\Http\Controllers\AddPeople;

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

/**
 * Původní routes
 *
 * Chyby:
 *
 * Auth middleware byl jenom na admin panel, kdokoliv pomocí scan programu by mohl zjistit adresu a i přes nutné oprávnění se mohl dostat do složek tříd
 * Též doporučuji do budoucna model upravit na něco univerzálního než to že vytváříš hromadu modelu a tím zahlcuješ databázi a pak procesy PHP.
 */

/**
 * Route::get('admin-panel/trieda_a', function () {
 * $people = \App\Models\TriedaA::all();
 * return view('trieda_a', [
 * 'people' => $people
 * ]);
 * });
 *
 * Route::get('admin-panel/trieda_b', function () {
 * $people = \App\Models\TriedaB::all();
 * return view('trieda_b', [
 * 'people' => $people
 * ]);
 * });
 *
 * Route::get('/admin-panel', function () {
 * $people = \App\Models\TriedaC::all();
 * return view('admin-panel', [
 * 'people' => $people
 * ]);
 * })->middleware(['auth'])->name('admin-panel');
 *
 * Route::get('admin-panel/trieda_d', function () {
 * $people = \App\Models\TriedaD::all();
 * return view('trieda_d', [
 * 'people' => $people
 * ]);
 * });
 */

/**
 * Úprava - Adalbertus
 *
 * funkce prefix určuje vlastně pseudo cestu že všechno co se bude pak nacházet ve funkci group má být pod tou adresou:
 * Prefix je nastaven jako admin-panel tak laravel bude vědět že má všechno mapovat pak v group takto:
 * -   /admin-panel
 * -   /admin-panel/trieda_a
 * -   /admin-panel/trieda_d
 * -   /admin-panel/trieda_b
 * Zároveň je do groupu implementován middleware který platí pro určitý group, tudíž jsou všechny cesty chráněny auth middlewarem a tím obsah na daných adresách zabezpečen proti spiders, botum a útočníkům.
 */

Route::get('/', function () {
    return view('login');    // úvodná stránka
});

Route::prefix("admin-panel")->middleware(["auth"])->group(function () {
    Route::get("/", [AdminPanel::class, 'index'])->name('Admin_Panel');  // následne dokážem pomocou name použiť funkciu route, ktorá bude ako premenná, v ktorej je celý index route
    Route::get("/trieda_a", [AdminPanel::class, 'triedaA']);
    Route::get("/trieda_d", [AdminPanel::class, 'triedaD']);
    Route::get("/trieda_b", [AdminPanel::class, 'triedaB']);
    Route::get('/', \App\Models\trieda::class, '');

    Route::get('/create', [AddPeople::class, 'create']);
    Route::post('/', [AddPeople::class, 'store']);
    Route::get('/{people}/edit', [AddPeople::class, 'edit']);
    Route::get('/{people}', [AddPeople::class, 'update']);
    Route::get('/{people}', [AddPeople::class, 'destroy']);
});


require __DIR__ . '/auth.php';


