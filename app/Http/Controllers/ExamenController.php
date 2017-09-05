<?php

namespace App\Http\Controllers;

use App\Examene;
use App\Respuesta;
use App\Pregunta;
use App\Alumno;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamenController extends Controller
{

    function __construct()
    {
        $this->middleware(['auth', 'roles:admin,alumno']);
    }


    public function index()
    {

        if(!auth()->user()->hasRoles(['alumno']))
            return redirect('/');

        $userId = auth()->user()->id;

        $alumno = Alumno::where('id', $userId)->first();

        $data = [];

        if($alumno)
        {
            $data = Examene::where([
                ['alumno_id', $alumno->id],
                ['intentos','<',3],
                ['aprobado', 0]
            ])
            ->get();
            
        }

        return view('examenes.index', compact('data'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }



    
    public function show($id)
    {        
        $examen =  Examene::where('id', $id)->first();

        return view('examenes.show', compact('examen'));

    }

    public function examinar(Request $request)
    {
        $data = $request->all();

        $respuestas = $data;
        unset($respuestas['_token']);


        $puntaje = 0;

        foreach ($respuestas as $p => $r) {


            $preg = Pregunta::where('id',$p)->first();
            $res = Respuesta::where('id',$r)->first();


            if($res->correcta)
                $puntaje = $puntaje + $preg->valor;

        }

        if($puntaje > 70)
        {

            //inserto en tabla alumno_certificado
            dd($puntaje);
        }

        return 'desaprobado';

    }

    
    
    public function update(Request $request, Examen $examen)
    {
        //
    }

    

}
