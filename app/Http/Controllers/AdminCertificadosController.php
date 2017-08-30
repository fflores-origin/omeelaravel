<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminCertificadosController extends Controller
{
    
	public function index()
	{
		return view('administracion.certificados');
	}

}
