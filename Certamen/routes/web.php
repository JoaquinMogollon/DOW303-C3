<?php

use Illuminate\Support\Facades\Route;

/* HomePage */
use App\Http\Controllers\Inicio;

/* Artista */
use App\Http\Controllers\ArtistaController;
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

/* Publico */

Route::get('/',[Inicio::class,'index'])->name('bienvenida.index');
Route::get('/login',[Inicio::class,'logout'])->name('bienvenida.login');

/* Admin */
Route::get('/admin',[AdministradorController::class,'index'])->name('admin.admin');



/* Artista */
Route::get('/artista',[ArtistaController::class,'index'])->name('artista.artista');
Route::get('/artista/subirfoto',[ArtistaController::class,'index'])->name('artista.subirfoto');