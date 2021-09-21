<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CerrarCaso;
use App\Models\Agentes;
use App\Models\Llamadas;

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
    $agentes = Agentes::all();
    $agente = Llamadas::where('agente', 'Keyla Roca')->count();
    $agente_dos = Llamadas::where('agente', 'Paula Roca')->count();
    $agente_tres = Llamadas::where('agente', 'Keren Bermudez')->count();
    $agente_cuatro = Llamadas::where('agente', 'Argenedis Alvarez')->count();
    return view('welcome', compact('agentes', 'agente', 'agente_dos', 'agente_tres', 'agente_cuatro'));
});

Route::get('/casos', function() {
    return view('casos');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/cerrar_caso/{id}', [App\Http\Controllers\CerrarCaso::class, 'edit'])->name('cerrar_caso');