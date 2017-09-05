<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;

class AdminEscuelasController extends Controller
{
    
    public function index()
    {
    	return view('administracion.escuelas.index');
    }

    public function activar($id)
    {
    	$e = User::where('id',$id)->first();
    	$e->active = 1;
    	$e->update();
    }
}
