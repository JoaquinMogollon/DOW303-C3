<?php

namespace App\Http\Controllers;

use App\Models\{Cuenta,Perfil};
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Auth;
use Gate;

class UserController extends Controller
{
    public function index()
    {
        /* if (Gate::denies('usuarios-listar')){
            return redirect()->route('bienvenida.index');
        } */

        $cuentas = Cuenta::all();
        return view('user.index',compact('user'));
    }

    public function create()
    {
        
    }

    public function store(UsuariosRequest $request){
        //dd($request->entrenador);
        $equipo = new Equipo();
        $equipo->nombre = $request->nombre;
        $equipo->entrenador = $request->entrenador;
        $equipo-> save(); //esto es lo mismo que ....insert into
        return redirect()->route('equipos.index');

    }

    public function show(Usuario $usuario)
    {
        //
    }

    public function edit(Usuario $usuario)
    {
        //  
    }
    public function update(Request $request, Usuario $usuario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function destroy(Usuario $usuario)
    {
        //
    }

    public function login(Request $request){
        //dd($request->only('email','password'));
        $credenciales = $request->only('email','password');

        if (Auth::attempt($credenciales)){
            //credenciales correctas
            $usuario = Usuario::where('email',$request->email)->first();
            $usuario->registrarUltimoLogin();
            return redirect()->route('home.index');
        }
        else{
            //credenciales incorrectas
            return back()->withErrors('Credenciales Incorrectas');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('home.login');
    }
}
