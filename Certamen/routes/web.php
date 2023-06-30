<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/* HomePage */
use App\Http\Controllers\Inicio;

/* Artista */

use App\Http\Controllers\ArtistaController;
/* Admin */
use App\Http\Controllers\AdministradorController;

/* Imagenes */
use App\Http\Controllers\ImagenController;

//Route::post('users/login',[UserController::class,'login'])->name('bienvenida.index');

/* Publico */

Route::get('/',[Inicio::class,'index'])->name('bienvenida.index');
Route::get('/login',[Inicio::class,'logout'])->name('bienvenida.login');
Route::post('user/login',[UserController::class,'login'])->name('user.login');
Route::get('user/logout',[UserController::class,'logout'])->name('user.logout');

/* Admin */
Route::get('/admin',[AdministradorController::class,'index'])->name('admin.admin');

/* Artista */
Route::get('/artista',[ArtistaController::class,'index'])->name('artista.artista');
Route::get('/artista/Fotos',[ArtistaController::class,'listadoFotos'])->name('artista.index');
Route::get('/artista/Fotos_Baneadas',[ArtistaController::class,'FotosBan'])->name('artista.FotosBan');

/* Imagenes */
Route::get('/artista/subirfoto',[ImagenController::class,'subirfoto'])->name('artista.subirfoto');
Route::post('/artista/subirfoto',[ImagenController::class,'store'])->name('artista.subirfoto');