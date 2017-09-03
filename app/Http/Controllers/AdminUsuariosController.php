<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class AdminUsuariosController extends Controller
{

	public function __construct() 
	{
		$this->middleware(['auth', 'roles:admin']);
	}	

    //usuarios-index
    public function index()
    {

    	$users = User::get();

    	return view('administracion.usuarios', compact('users'));
    }

}
