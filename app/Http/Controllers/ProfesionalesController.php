<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Escuela;

class ProfesionalesController extends Controller
{

    public function store(Request $request)
    {
        return $request->all();
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
