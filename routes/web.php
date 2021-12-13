<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () { return view('welcome'); });

// ---------------------VISTA SALONES--------------------

Route::name('salon')->get('salon/', 'SalonController@salon');

//---------------------ALTA SALONES------------------------------

Route::name('nuevos')->get('nuevos/', 'SalonController@nuevo');
Route::name('guardars')->post('guardars/', 'SalonController@guardar');

//---------------------DETALLE SALONES------------------------------

Route::name('detalles')->get('detalles/{id}', 'SalonController@detalle');

//---------------------EDITAR SALONES------------------------------

Route::name('editars')->get('editars/{id}', 'SalonController@editar');
Route::name('salvars')->put('salvars/{id}', 'SalonController@salvar');

//---------------------BORRAR SALONES------------------------------

Route::name('borrars')->get('borrars/{id}', 'SalonController@borrar');





// ---------------------VISTA MATERIAS--------------------

Route::name('materia')->get('materia/', 'MateriaController@materia');

//---------------------ALTA MATERIAS------------------------------

Route::name('nuevom')->get('nuevom/', 'MateriaController@nuevo');
Route::name('guardarm')->post('guardarm/', 'MateriaController@guardar');

//---------------------DETALLE MATERIAS------------------------------

Route::name('detallem')->get('detallem/{id}', 'MateriaController@detalle');

//---------------------EDITAR MATERIAS------------------------------

Route::name('editarm')->get('editarm/{id}', 'MateriaController@editar');
Route::name('salvarm')->put('salvarm/{id}', 'MateriaController@salvar');

//---------------------BORRAR MATERIAS------------------------------

Route::name('borrarm')->get('borrarm/{id}', 'MateriaController@borrar');




// ---------------------VISTA ESTUDIANTES--------------------

Route::name('estudiante')->get('estudiante/', 'EstudianteController@estudiante');

//---------------------ALTA ESTUDIANTES------------------------------

Route::name('nuevoe')->get('nuevoe/', 'EstudianteController@nuevo');
Route::name('guardare')->post('guardare/', 'EstudianteController@guardar');

//---------------------DETALLE ESTUDIANTES------------------------------

Route::name('detallee')->get('detallee/{id}', 'EstudianteController@detalle');

//---------------------EDITAR ESTUDIANTES------------------------------

Route::name('editare')->get('editare/{id}', 'EstudianteController@editar');
Route::name('salvare')->put('salvare/{id}', 'EstudianteController@salvar');

//---------------------BORRAR ESTUDIANTES------------------------------

Route::name('borrare')->get('borrare/{id}', 'EstudianteController@borrar');