<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Imagenes;
use Illuminate\Support\Facades\Storage;

class ImagenController extends Controller
{
    public function subirfoto(){
        $imagenes =Imagenes::all();
        return view('artista.subirfoto');
    }
    public function store(Request $request){
        $imagen = new Imagenes();
        $imagen->titulo = $request->titulo;
        $imagen->archivo = $request->archivo->store('public/imagenes');
        //$imagen->baneada = $request->baneada;
        $imagen->motivo_ban = $request->motivo_ban;
        $imagen->cuenta_user = $request->cuenta_user;
        $imagen->save();
        return redirect()->route('artista.index');

    }

}