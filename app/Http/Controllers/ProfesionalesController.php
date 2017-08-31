<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAlumnoRequest;
use App\Escuela;
use App\User;
use App\Alumno;
use DB;

class ProfesionalesController extends Controller
{

    public function __construct() 
    {
        $this->middleware('auth', ['only' => ['create','store']]);
    }

    public function store(CreateAlumnoRequest $request)
    {
        DB::beginTransaction();
        $d = $request->all();

        $u = new User;
        $u->name = $d['usuario'];
        $u->password = bcrypt($d['password']);
        $u->role_id = 3;
        $u->email = $d['email'];
        $u->nombre = $d['nombre'];
        $u->apellido = $d['apellido'];
        $u->save();

        $a = new Alumno;

        $a->id = $u->id;
        $a->escuela_id = $d['escuela_id'];
        $a->dni = $d['dni'];
        $a->fecha_nacimiento = $d['fecha_nacimiento'];
        $a->direccion = $d['direccion'];
        $a->ciudad = $d['ciudad'];
        $a->codigo_postal = $d['codigo_postal'];
        $a->pais = $d['pais'];
        $a->horarios = $d['horarios'];
        $a->save();

        DB::commit();
        return back()->with('info',' Nuevo alumno :' . $u->nombre . ' ' . $u->apellido .', dado de alta correctamente. Nº Matricula :<strong>' . $a->id . '</strong>');


    }

    public function index()
    {
        
        $data = Alumno::get();
        
    	return view('profesionales.index',compact('data'));
    }

    public function create() 
    {
        $escuelas = Escuela::all();

        return view('profesionales.create', compact('escuelas'));

    }


}
