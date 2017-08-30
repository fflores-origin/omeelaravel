<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminExamenesController extends Controller
{

	public function __construct() 
	{
		$this->middleware('auth');
	}


    //examenes-index
    public function index() 
    {
    	return view('administracion.examenes');
    }

}
