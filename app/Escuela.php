<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Escuela extends Model
{
    protected $fillable = [
        'razon_social', 
        'nombre_escuela', 
        'tipo_id',
        'nombre',
        'apellido',
        'direccion',
        'codigopostal',
        'provincia',
        'pais',
        'telefono'
    ];
}
