<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController; // Import des Controllers

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Verweist auf die index-Methode des MainControllers
Route::get('/', [MainController::class, 'index'])->name('home');
Route::get('/products', [MainController::class, 'index'])->name('products');


/*
Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/niki', function () {
    return view('layouts.standard', ['info' => 'Das ist das Haus von Nikigraus']);
});

// Namensparameter ist notwendig
// http://localhost:8000/hallo/Peter
Route::get('/hallo1/{name}', function ($name) {
    return 'Hallo '.$name;
})->name('hallo1');

// Namensparameter ist optional
// http://localhost:8000/hallo/Peter
Route::get('/hallo2/{name?}', function ($name = 'Unbekannt') {
    return 'Hallo '.$name;
});

//Route::get($url, $callback)
//Route::post
//Route::put
//Route::delete
//etc.

// Erlaubt alle HTTP-Methoden
Route::any('/hallo3', function () {
    return 'Moin';
});

// Erlaubt nur GET und POST
Route::match(['get', 'post'], '/hallo4', function () {
    return 'Moin';
});

// Mit mehreren dynamischen Parametern
Route::get('/user/{uid}/post/{pid}', function ($uid, $pid) {
    return "User: $uid, Post: $pid";
})->where('uid', '[0-9]+'); // Prüfung, ob uid nur Zahlen enthält

// Aufruf einer View ohne anonyme Funktion
Route::view('/w', 'welcome');

// Verweis auf einen Controller
// ControllerName@methodenName
//Route::get('/hallo5', 'MainController@hallo'); // Bis Laravel 7.* nutzbar

Route::get('/hallo5', [MainController::class, 'hallo']); // Ab Laravel 8 nutzbar
Route::get('/hallo6', [MainController::class, 'hi']);
Route::get('/hallo7', [MainController::class, 'doSomething']);

// redirect
// beim Aufruf von http://localhost:8000/welcome landet man auf http://localhost:8000/
Route::redirect('/welcome', '/');

Route::redirect('/welcome', '/', );
*/