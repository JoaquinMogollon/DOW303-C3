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
        return view('bienvenida.index',compact('user'));
    }

    public function create()
    {
        
    }

    public function store(UsuariosRequest $request){
        //
    }

    public function show(Cuenta $cuentas)
    {
        //
    }

    public function edit(Cuenta $cuentas)
    {
        //  
    }
    public function update(Request $request, Cuenta $cuentas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cuenta  $cuentas
     * @return \Illuminate\Http\Cuenta
     */
    public function destroy(Cuenta $cuentas)
    {
        //
    }

    public function login(Request $request){
        //dd($request->only('email','password'));
        $credenciales = $request->only('user','password');

        if (Auth::attempt($credenciales)){
            //credenciales correctas
            $cuentas = Cuenta::where('user',$request->user)->first();
            //$cuentas->registrarUltimoLogin();
            return redirect()->route('bienvenida.index');
        }
        else{
            //credenciales incorrectas
            return back()->withErrors('Credenciales Incorrectas');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('bienvenida.login');
    }
}
