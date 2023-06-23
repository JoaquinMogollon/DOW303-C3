<?php

use Illuminate\Support\Facades\Route;

/* HomePage */
use App\Http\Controllers\Inicio;

/* Alumno */
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;

/* Admin */

use App\Http\Controllers\AdministradorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/bienvenida', function () {
    return view('index');
});
 */

Route::get('/',[Inicio::class,'index'])->name('bienvenida.index');

Route::get('/admin',[AdministradorController::class,'index'])->name('admin.admin');