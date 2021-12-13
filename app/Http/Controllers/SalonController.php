<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Salon;
use App\Http\Requests\ValidarSalonRequest;

class SalonController extends Controller
{
    // SALONES
    public function salon(){
        $salones = Salon::all();

        return view("salones.salones")
            ->with(['salones' => $salones]);
    }

    // AGREGAR SALON
    public function nuevo(){
        return view("salones.agregar_salon");
    }
    
    public function guardar(ValidarSalonRequest $request){
    $sal = Salon::create(array(
        'nombre' => $request->input('nombre')
    ));
       
        return redirect()->route('salon')->with('info', 'El salón se creo satisfactoriamente');
    }
    //DETALLE SALON
    public function detalle(Salon $id){
        return view("salones.detalle_salon")
            ->with(['salon' => $id]);
    }
    //EDITAR SALON
    public function editar(Salon $id){
        return view("salones.editar_salon")
            ->with(['salon' => $id]);
    }
    //GUARDAR SALON
    public function salvar(Salon $id, ValidarSalonRequest $request){
        $con = Salon::find($id->id);
            $con -> nombre = $request -> nombre; 
        $con -> save();
        
        return redirect()->route('salon')->with('info', 'El salón se edito satisfactoriamente');
        
    }

    //BORRAR SALON
    public function borrar(Salon $id){
        $id->delete();
        return redirect()->route('salon')->with('info', 'El salón se elimino satisfactoriamente');
    }
}
