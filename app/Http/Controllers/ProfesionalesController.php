<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfesionalesController extends Controller
{
        /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
        $escuelas() = array();
        return view('profesionales.create',compact('escuelas'));

    }
}
