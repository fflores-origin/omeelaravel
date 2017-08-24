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

    	$this->validate($request, [
    		'apyn' => 'required',
    		'correo' => ['required','email'],
    		'mensaje' => ['required','min:5']
    		]);

    	$data = $request->all();

        return back()
            ->with('info','Tu mensaje ha sido enviado correctamente !');
    }
}
