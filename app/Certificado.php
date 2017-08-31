<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificado extends Model
{
    

    public function preguntas() 
    { 
    	return $this->hasMany(Pregunta::class); 
    }
    

}
