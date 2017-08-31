<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Escuela extends Model
{
    protected $fillable = [
        'id',
        'razon_social', 
        'nombre_escuela', 
        'tipo_escuela_id',
        // 'nombre',
        // 'apellido',
        'direccion',
        'codigo_postal',
        'provincia',
        'pais',
        'telefono'
    ];



    public function user()
    {
        return $this->hasOne('App\User','id','id');
    }

    public function tipo()
    {
        return $this->hasOne('App\TipoEscuela','tipo_escuela_id','id');
    }

    
}
