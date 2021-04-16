<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EquiposController;
use App\Http\Controllers\AuditoriaController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\listController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//Rutas de los controladores
Route::resource('admin/users', UserController::class);
Route::resource('admin/equipment', EquiposController::class);
Route::resource('admin/auditoria', AuditoriaController::class);
Route::resource('admin/prestamos', PrestamosController::class);
Route::get('admin/pdf/invoice', [listController::class, 'exportInvoice']);
