<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Pregunta;

class Examene extends Model
{
    

	public function certificado()
	{
		return $this->hasOne('App\Certificado','id','certificado_id');
	}

	public function preguntas()
	{
		return $this->hasMany('App\Pregunta', 'certificado_id','certificado_id');
	}


}
