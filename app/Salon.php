<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salon extends Model
{
    protected $table = 'salones';
    protected $fillable = [
            'nombre',
    ];

    //Relacion uno a muchos inversa
    public function salon()
    {
        return $this->belongsTo('App\Salon','foreing_key','salon_id');
    }
}
