<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminExamenesController extends Controller
{
    //examenes-index
    public function index() 
    {
    	return view('administracion.examenes');
    }

}
