<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Clientes;
use App\Http\Controllers\Informacion;
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
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/agregarUsuario', [AuthController::class, 'agregarUsuario']);
Route::get('/cliente', [Clientes::class, 'index'])->name('inicio-cliente');
//---------------------------------------------------------------
Route::get('/inicio', [Informacion::class, 'index'])->name('inicio');
Route::get('/create', [Informacion::class,'create']);
Route::post('/store',[Informacion::class,'store']);
Route::delete('/eliminar/{id}',[Informacion::class,'destroy'])->name('datos.delete');
Route::get('/edit/{id}', [Informacion::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Informacion::class, 'update'])->name('update');