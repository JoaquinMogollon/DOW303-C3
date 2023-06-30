<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'user'=>'required|min:1|max:20|unique:cuentas,user',
            'password'=>'required|min:6|max:100',
            'nombre'=>'required|min:2|max:20',
            'apellido'=>'required|min:2|max:20',
        ];
    }

    public function messages(){
        return[
            
            /* Col User */
            'user.required'=>'Ingrese un nombre para USUARIO',
            'user.min'=>'El USUARIO tiene que tener como minio 1 letra',
            'user.max'=>'El USUARIO tiene que tener como maximo 20 letras',
            'user.unique'=>'El USUARIO ya existe. Favor de intentar con otro',

            /* Col password */
            'password.required'=>'Ingrese una Contraseña',
            'password.min'=>'La CONTRASEÑA es muy pequeña. Ingrese por lo menos 6 caracteres',
            'password.max'=>'La CONTRASEÑA es exede el largo de 100 caracteres. Favor de intentar con otra',

            /* Col nombre */
            'nombre.required'=>'Ingrese un NOMBRE',
            'nombre.min'=>'El NOMBRE tiene que tener como minimo 2 letras',
            'nombre.max'=>'El NOMBRE tiene que tener como maximo 20 letras',
            
            /* Col apellido */
            'apellido.required'=>'Ingrese un Apellido',
            'apellido.min'=>'El APELLIDO tiene que tener como minimo 2 letras',
            'apellido.max'=>'El APELLIDO tiene que tener como maximo 20 letras'

        ];
    }
}
