<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use App\Certificado;
use App\Alumno;
use App\Examene;

class AdminExamenesController extends Controller
{

	public function __construct() 
	{
		$this->middleware(['auth','roles:admin,escuela']);
	}


    //examenes-index
    public function index() 
    {
    	return view('administracion.examenes');
    }

    public function certificar($id) 
    {
    	$certificados = Certificado::all();
    	$alumno = Alumno::where('id',$id)->first();

    	return view('administracion.certificar', compact('certificados','alumno'));
    }

    public function store(Request $request)
    {
    	$d = $request->all();

    	$e = new Examene;
    	$e->alumno_id = $d['alumno_id'];
    	$e->certificado_id = $d['certificado_id'];
    	$e->aprobado = 0;
    	$e->intentos = 0;
    	$e->created_at = Carbon::now();
    	$e->updated_at = Carbon::now();
    	$e->save();
    	
    	return redirect()
    		->route('admin-profesionales')
    		->with('info', 'Ha generado un nuevo examen para alumno matricula :'.$e->alumno_id . '.');

    }

}
