<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::view('index','index');

Route::view('login','login');

//En esta parte está enrutado la plantilla que esta dentro de la carpeta layaout

Route::view('plantilla','layaout.plantilla');

//En esta parte estaá enrutado todos los modulos de altas, estan dentro de la carpeta altas

Route::view('altamaestro','altas.altaMaestro');
Route::view('altaalumno','altas.altaAlumnos');
Route::view('altamatricula','altas.altaMatricula');
Route::view('altaasignatura','altas.altaAsignatura');
Route::view('altacarrera','altas.altaCarrera');
Route::view('vistamodal','altas.vistamodal');
