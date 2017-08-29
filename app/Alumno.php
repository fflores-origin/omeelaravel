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


     public function user()
    {
        return $this->hasOne('App\User','id','id');
    }

    public function certificados() 
    {
    	retrun $this->hasMany('App\Certificado');
    }
}
