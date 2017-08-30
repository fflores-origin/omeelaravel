<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminUsuariosController extends Controller
{

    //usuarios-index
    public function index()
    {
    	return view('administracion.usuarios');
    }

}
