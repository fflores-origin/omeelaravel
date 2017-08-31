<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Alumno;

class AdminController extends Controller
{

	public function __construct() 
	{
		$this->middleware('auth');
	}

    public function index() 
    {
    	return view('administracion.index');
    }

    public function matriculados() {

        $user = auth()->user();

    	$alumnos = $user->isAdmin() ? Alumno::all() : Alumno::where('escuela_id', $user->id)->get();

    	return view('administracion.matriculados', compact('alumnos'));
    }





}
