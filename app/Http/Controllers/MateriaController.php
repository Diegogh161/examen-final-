<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ValidarMateriaRequest;

use App\Materia;

class MateriaController extends Controller
{
    // MATERIAS
    public function materia(){
        $materias = Materia::all();

        return view("materias.materias")
            ->with(['materias' => $materias]);
    }

    // AGREGAR MATERIA
    public function nuevo(){
        return view("materias.agregar_materia");
    }
    
    public function guardar(ValidarMateriaRequest $request){
    $mat = Materia::create(array(
        'nombre' => $request->input('nombre')
    ));
       
        return redirect()->route('materia')->with('info', 'La materia se creo satisfactoriamente');
    }
    //DETALLE MATERIA
    public function detalle(Materia $id){
        return view("materias.detalle_materia")
            ->with(['materia' => $id]);
    }
    //EDITAR MATERIA
    public function editar(Materia $id){
        return view("materias.editar_materia")
            ->with(['materia' => $id]);
    }
    //GUARDAR Materia
    public function salvar(Materia $id, ValidarMateriaRequest $request){
        $con = Materia::find($id->id);
            $con -> nombre = $request -> nombre; 
        $con -> save();
        
        return redirect()->route('materia')->with('info', 'La materia se edito satisfactoriamente');
        
    }

    //BORRAR MATERIA
    public function borrar(Materia $id){
        $id->delete();
        return redirect()->route('materia')->with('info', 'La materia se elimino satisfactoriamente');
    }
}
