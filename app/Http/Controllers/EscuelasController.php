<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateEscuelaRequest;
use App\User;
use App\Escuela;

class EscuelasController extends Controller
{

    public function index()
    {

        $data = Escuela::get();

        return view('escuelas.index', compact('data'));
    }

    public function create()
    {
        return view('escuelas.create');
    }

    public function store(CreateEscuelaRequest $request)
    {
        $d = $request->all();
        
        $u = new User;
        $u->name = $d['usuario'];
        $u->password = bcrypt($d['password']);
        $u->email = $d['email'];
        $u->role_id = 2;
        $u->nombre = $d['nombre'];
        $u->apellido = $d['apellido'];
        $u->save();

        $e = new Escuela;
        $e->razon_social = $d['razon_social'];
        $e->nombre_escuela = $d['nombre_escuela'];
        $e->tipo_escuela_id = $d['tipo_id'];
        $e->direccion = $d['direccion'];
        $e->codigo_postal = $d['codigo_postal'];
        $e->provincia = $d['provincia'];
        $e->pais = $d['pais'];
        $e->telefono = $d['telefono'];
        $e->id = $u->id;
        $e->save();

        return back()->with('info',' Tu escuela ya forma parte de nuestro Sitio.');

    }

    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
