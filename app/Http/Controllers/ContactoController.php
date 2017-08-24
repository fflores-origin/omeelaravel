<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactoController extends Controller
{

	// protected $request;

	// public function __construct(Request $request) 
	// {
	// 	$this->request = $request;
	// }

    public function mensaje(Request $request)
    {
    	return $request->all();
    }
}
