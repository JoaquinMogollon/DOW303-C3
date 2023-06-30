<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function index(){
        return view('artista.artista');
    }

    public function subirfoto(){
        return view('artista.subirfoto');
    }

    public function listadoFotos(){
        return view('artista.index');
    }

    public function FotosBan(){
        return view('artista.FotosBan');
    }
}
