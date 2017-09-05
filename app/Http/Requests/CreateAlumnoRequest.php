<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateAlumnoRequest extends FormRequest
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
            'email' => 'required|string|email|max:255|unique:users',
            'usuario' => 'required|string|max:255',
            'password'=> 'required|string|min:6',
            'nombre'=> 'required',
            'apellido'=> 'required',
            'escuela_id'=> 'required',
            'dni'=> 'required|unique:post',
            'fecha_nacimiento'=> 'required|date',
            'direccion'=> 'required',
            'ciudad'=> 'required',
            'pais'=> 'required'
        ];
    }
}
