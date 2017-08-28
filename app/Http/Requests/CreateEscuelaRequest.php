<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateEscuelaRequest extends FormRequest
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
            'razon_social' => 'required',
            'nombre_escuela' => 'required', 
            'tipo_id' => 'required',
            'nombre' => 'required',
            'apellido' => 'required',
            'direccion' => 'required',
            'codigo_postal' => 'required',
            'provincia' => 'required',
            'pais' => 'required',
            'telefono' => 'required',
            'email' => 'required|string|email|max:255|unique:users',
            'usuario' => 'required|string|max:255',
            'password'=> 'required|string|min:6',
            
        ];
    }
}
