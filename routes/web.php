<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CerrarCaso;

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
    return view('welcome');
});

Route::get('/casos', function() {
    return view('casos');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cerrar_caso/{id}', [App\Http\Controllers\CerrarCaso::class, 'edit'])->name('cerrar_caso');