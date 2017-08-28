<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escuela;
use App\User;

class ProfesionalesController extends Controller
{

    public function store(Request $request)
    {
        
        $d = $request->all();

        $u = new User;
        $u->name = $d['usuario'];
        $u->password = $d['password'];
        $u->email = $d['email'];

        return $d;


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
