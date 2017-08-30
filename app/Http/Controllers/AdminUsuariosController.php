<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUsuariosController extends Controller
{

	public function __construct() 
	{
		$this->middleware('auth');
	}	

    //usuarios-index
    public function index()
    {
    	return view('administracion.usuarios');
    }

}
