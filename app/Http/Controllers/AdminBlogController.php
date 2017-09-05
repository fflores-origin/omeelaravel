<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminBlogController extends Controller
{
    
	public function index()
	{
		return view('administracion.blog.index');
	}


}
