<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\Alumno;

class AdminController extends Controller
{
    public function index() 
    {
    	return view('administracion.index');
    }

    public function matriculados() {

    	//$alumnos = DB::table('alumnos')->get();

    	$alumnos = Alumno::all();

    	return view('administracion.matriculados', compact('alumnos'));
    }
}
