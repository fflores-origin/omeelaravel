<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escuela;
use App\User;
use App\Alumno;

class ProfesionalesController extends Controller
{

    public function store(Request $request)
    {
        
        $d = $request->all();

        $u = new User;
        $u->name = $d['usuario'];
        $u->password = $d['password'];
        $u->email = $d['email'];
        //$u->save();

        $a = new Alumno;

        $a->id = $u->id;
        $a->nombre = $d['nombre'];
        $a->apellido = $d['apellido'];
        $a->escuela_id = $d['escuela_id'];
        $a->dni = $d['dni'];
        $a->fecha_nacimiento = $d['fecha_nacimiento'];
        $a->direccion = $d['direccion'];
        $a->ciudad = $d['ciudad'];
        $a->codigo_postal = $d['codigo_postal'];
        $a->pais = $d['pais'];
        $a->horarios = $d['horarios'];
        //$a->save();

        return back()->with('info',' Nuevo alumno ' . $a->nombre . ' ' . $a->apellido .' Cargado . Nº Matricula : ' . $a->id );


    }

    public function index()
    {
    	return view('profesionales.index');
    }

    public function create() 
    {
        $escuelas = Escuela::all();

        return view('profesionales.create', compact('escuelas'));

    }


}
