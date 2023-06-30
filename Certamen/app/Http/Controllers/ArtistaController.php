<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagenes;
use App\Models\Cuenta;

class ArtistaController extends Controller
{
    public function index(){
        return view('artista.artista');
    }

    public function listadoFotos(){
        $imagenes=Imagenes::all();
        return view('artista.index',compact('imagenes'));
    }

    public function FotosBan(){
        return view('artista.FotosBan');
    }

    public function editar(){
        $cuentas=Cuenta::all();
        return view('artista.editar',compact('imagen','cuentas'));
    }

    public function update(Imagenes $imagen,Resquest $request){
        $imagen->titulo = $request->titulo;

        $imagen->save();
        return redirect()->route('artista.index');
    }
}
