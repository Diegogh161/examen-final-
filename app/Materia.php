<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{

    protected $table = 'materias';
    protected $fillable = [
            'nombre',
    ];

    //Relacion uno a muchos inversa
    public function estudiante()
    {
        return $this->belongsTo('App\Estudiante','foreing_key','materia_id');
    }
}
