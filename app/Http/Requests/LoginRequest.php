<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'usuario' => 'required|string',
            'password' => 'required|string',
        ];
    }

    public function messages() {
        return [
            'usuario.required' => 'El campo usuario es obligatorio',
            'password.required' => 'La campo contraseña es obligatorio',
        ];
    }
}
