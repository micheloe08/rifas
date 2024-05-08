<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\ClientesFront;
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

Route::view('principal', 'Principal.index')
    ->name('principal');

Route::get('/venta', function () {
    return view('clientesfront.index');
});
Route::get('/metodos', function () {
    return view('livewire.ClientesFront.metodos');
});
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::view('sorteos', 'sorteos.index')
    ->name('sorteos');
    Route::view('clientes', 'clientes.index')
    ->name('clientes');
    Route::view('dash', 'livewire.dashboard')
    ->name('dash');
    Route::view('apartado', 'apartado.index')
    ->name('apartado');
});
