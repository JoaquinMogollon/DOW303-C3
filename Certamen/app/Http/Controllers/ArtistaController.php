<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArtistaController extends Controller
{
    public function index(){
        return view('artista.artista');
    }
}
