<?php

use App\Http\Controllers\MainController;
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
*/

Route::get('/', function () {
    return view('home');
})->name("home");

Route::get('/hobby', [MainController::class, "hobby"])->name("hobby");

Route::get('/Programma', [MainController::class, "Programma"])->name("Programma");

Route::get('/WieBenIk', [MainController::class, "WieBenIk"])->name("WieBenIk");

