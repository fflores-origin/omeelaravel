<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $fillable = [
    	'id',
		'nombre',
		'apellido',
		'escuela_id',
		'dni',
		'fecha_nacimiento',
		'direccion',
		'ciudad',
		'codigo_postal',
		'pais',
		'horarios'
    ];
}
