<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/* HomePage */
use App\Http\Controllers\Inicio;

/* Artista */

use App\Http\Controllers\ArtistaController;
/* Admin */
use App\Http\Controllers\AdministradorController;

use App\Http\Controllers\PerfilesController;

/* Imagenes */
use App\Http\Controllers\ImagenController;

Route::get('/crear_cuenta',[PerfilesController::class,'store'])->name('bienvenida.crearUsuario');
/* Publico */

Route::get('/',[Inicio::class,'index'])->name('bienvenida.index');
Route::get('/login',[Inicio::class,'logout'])->name('bienvenida.login');
Route::post('cuentas/login',[UserController::class,'login'])->name('cuenta.login');
Route::get('cuentas/logout',[UserController::class,'logout'])->name('cuenta.logout');

/* Admin */
Route::get('/admin',[AdministradorController::class,'index'])->name('admin.admin');

/* Artista */
Route::get('/artista',[ArtistaController::class,'index'])->name('artista.artista');
Route::get('/artista/Fotos',[ArtistaController::class,'listadoFotos'])->name('artista.index');
Route::get('/artista/Fotos_Baneadas',[ArtistaController::class,'FotosBan'])->name('artista.FotosBan');

/* Route::get('/'); */

/* Imagenes */
Route::get('/artista/subirfoto',[ImagenController::class,'subirfoto'])->name('artista.subirfoto');
Route::post('/artista/subirfoto',[ImagenController::class,'store'])->name('artista.subirfoto');