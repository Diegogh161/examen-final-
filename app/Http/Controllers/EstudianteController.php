<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Estudiante;
use App\Salon;
use App\Materia;
use App\Http\Requests\ValidarEstudianteRequest;

class EstudianteController extends Controller
{
    // VISTA USUARIO

    public function estudiante(){
        $estudiantes = Estudiante::all();
        $salones = Salon::all();
        
        return view("estudiantes.estudiantes")
            ->with(['estudiantes' => $estudiantes])
            ->with(['salones' => $salones]);
    }

    // VISTA AGREGAR USUARIO
    public function nuevo(){
        $salones = Salon::all();
        $materias = Materia::all();
        return view("estudiantes.agregar_estudiante")
            ->with(['materias' => $materias])
            ->with(['salones' => $salones]);
    }

    //GUARDAR INFORMACION

    public function guardar(ValidarEstudianteRequest $request){
        $est = Estudiante::create(array(
            'matricula'   => $request->input('matricula'),
            'nombre'      => $request->input('nombre'),
            'app'         => $request->input('app'),
            'apm'         => $request->input('apm'),
            'salon_id'    => $request->input('salon_id'),
            'materia_id'  => $request->input('materia_id'),
        ));
            
        return redirect()->route('estudiante')->with('info', 'El estudiante se creo satisfactoriamente');
    }

    //DETALLE ESTUDIANTE
    public function detalle(Estudiante $id){
        $salones = Salon::all();
        $materias = Materia::all();
        return view("estudiantes.detalle_estudiante")
            ->with(['estudiante' => $id])
            ->with(['materias' => $materias])
            ->with(['salones' => $salones]);
    }

    //BORRAR ESTUDIANTE
    public function borrar($id){
        $id = Estudiante::find($id);
        $id->delete();
        return redirect()->route('estudiante')->with('info', 'El estudiante se elimino satisfactoriamente');
    }

    //EDITAR MATERIA
    public function editar(Estudiante $id){
        $estudiantes = Estudiante::all();
        $salones = Salon::all();
        $materias = Materia::all();

        return view("estudiantes.editar_estudiante")
            ->with(['estudiante' => $id])
            ->with(['materias' => $materias])
            ->with(['salones' => $salones]);;
    }
    //GUARDAR Materia
    public function salvar(Estudiante $id, ValidarEstudianteRequest $request){
        $con = Estudiante::find($id->id);
            $con -> matricula = $request -> matricula;
            $con -> nombre = $request -> nombre;
            $con -> app = $request -> app;
            $con -> apm = $request -> apm;
            $con -> salon_id = $request -> salon_id;
            $con -> matricula_id = $request -> matricula_id;
        $con -> save();
        
        return redirect()->route('estudiante')->with('info', 'El estudiante se edito satisfactoriamente');
        
    }
}
