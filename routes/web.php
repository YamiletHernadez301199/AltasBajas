<?php

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

Route::get('/', [Informacion::class,'index']) ->name('datos.index');
Route::get('/create', [Informacion::class,'create']);
Route::post('/store',[Informacion::class,'store']);
Route::delete('/eliminar/{id}',[Informacion::class,'destroy']) ->name('datos.delete');
Route::get('/edit/{id}', [Informacion::class, 'edit'])->name('edit');
Route::put('/update/{id}', [Informacion::class, 'update'])->name('update');