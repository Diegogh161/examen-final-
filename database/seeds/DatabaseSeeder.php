<?php

use Illuminate\Database\Seeder;
use App\Salon;
use App\Materia;
use App\Estudiante;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        factory(Salon::class,5)->create();
        factory(Materia::class,5)->create();
        factory(Estudiante::class,5)->create();
    }
}
