<?php

use Illuminate\Support\Facades\Route;

/* HomePage */
use App\Http\Controllers\Inicio;

/* Artista */
use App\Http\Controllers\PerfilesController;

/* Admin */

use App\Http\Controllers\AdministradorController;

Route::get('/',[Inicio::class,'index'])->name('bienvenida.index');
Route::get('/login',[Inicio::class,'logout'])->name('bienvenida.login');

Route::get('/admin',[AdministradorController::class,'index'])->name('admin.admin');

Route::get('/artista',[PerfilesController::class,'artistas'])->name('artista.index');
Route::get('/artista/ban',[PerfilesController::class,'artistaFotosBan'])->name('artista.FotosBan');