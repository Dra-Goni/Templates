<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'correo'=>'required|email|unique:USUARIO,USU_MAIL',
            'tipo_usu'=>'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation'=>'required'
        ];
    }

    public function messages()
{
    return [
        'correo.required' => 'El correo Electronico es requerido',
        'correo.unique' => 'El correo Electronico no puede ser repetido',
        'tipo_usu.required'  => 'El Tipo de Usuario es requerido',
        'password.required' => 'La contraseña es requerida',
        'password.confirmed' => 'Las contraseñas no coinciden',
        'password.min' => 'La contraseñas debe tener minimo 6 caracteres',
        'password_confirmation.required' => 'La confirmacion de contraseña es requerida',
    ];
}
}
