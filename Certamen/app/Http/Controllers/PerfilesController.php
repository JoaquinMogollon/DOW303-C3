<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerfilesController extends Controller
{
    public function artistas(){
        return view('artista.index');
    }

    public function artistaFotosBan(){
        return view('artista.FotosBan');
    }
}
