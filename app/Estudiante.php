<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{

    protected $table = 'estudiantes';
    protected $fillable = [
            'matricula',
            'nombre',
            'app',
            'apm',
            'salon_id',
            'materia_id',
    ];

    //Relacion uno a muchos

    public function salon(){
        return $this->hasMany('App\Salon', 'foreign_key', 'salon_id');
    }
    
    public function materias(){
        return $this->hasMany('App\Materia', 'foreign_key', 'materia_id');
    }
}
