<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Estudiante;
use App\Salon;
use App\Materia;
use Faker\Generator as Faker;

$factory->define(Estudiante::class, function (Faker $faker) {
    return [
        'matricula'=> $faker->word,
        'nombre'=> $faker->name,
        'app'=> $faker->name,
        'apm'=> $faker->name,
        /* definos nuestra llaves foraneas */
        'salon_id'=> Salon::all()->random()->id,
        'materia_id'=> Materia::all()->random()->id
    ];
});
