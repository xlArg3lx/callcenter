<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CerrarCaso;
use App\Models\Agentes;
use App\Models\Llamadas;
use App\Models\LlamadasBanco;
use Carbon\Carbon;

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

Route::get('/registros-banco', function() {
    $today = Carbon::now()->format('Y-m-d');
    $today_count = LlamadasBanco::where('fecha', $today)->count();
    $agenda_today_count = LlamadasBanco::where([
        'agendado' => 'SI',
        'fecha' => $today
    ])->count();
    $llamadas_count = LlamadasBanco::all()->count();
    $agentes = Agentes::all();
    $agendado =  LlamadasBanco::where('agendado', 'SI')->count();
    $agente =  LlamadasBanco::where('agente_id', 2)->count();
    $agente_dos = LlamadasBanco::where('agente_id', 1)->count();
    $agente_tres = LlamadasBanco::where('agente_id', 3)->count();
    $agente_cuatro = LlamadasBanco::where('agente_id', 4)->count();
    $total_llamadas = LlamadasBanco::all()->count();
    $registros = LlamadasBanco::all();
    return view('banco_sangre.registro-llamadas', compact('today', 'agenda_today_count', 'llamadas_count', 'today_count', 'agendado', 'agentes', 'agente', 'agente_dos', 'agente_tres', 'agente_cuatro', 'total_llamadas', 'registros'));
})->name('banco_sangre');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('/cerrar_caso/{id}', [App\Http\Controllers\Caso::class, 'edit'])->name('cerrar_caso');
Route::get('/borrar_caso/{id}', [App\Http\Controllers\Caso::class, 'delete'])->name('borrar_caso');
Route::post('/guardar', [App\Http\Controllers\LlamadasBancoController::class, 'store'])->name('guardar_registro_banco');

Route::post('/contactar', [App\Http\Controllers\EmailController::class, 'contact'])->name('contact');

Route::get('/contactar', function () {
    $today = Carbon::now()->format('Y-m-d');
    return view('email', compact('today'));
});

Route::get('/test', function () {
    $today = Carbon::now()->format('Y-m-d');
    $call_today_count_rf = Llamadas::where('fecha', $today)->count();
    $agendado =  LlamadasBanco::where([
        'agendado' => 'SI',
        'fecha' => $today
    ])->count();
    $call_today_count = LlamadasBanco::where([
        'fecha' => $today
    ])->count();
    return view('test', compact('today', 'call_today_count', 'call_today_count_rf', 'agendado'));
})->name('cierre_actividades'); //Esta ruta la ponemos en la raiz para que nada mas ejecutar nuestra aplicación aparezca nuestro formulario