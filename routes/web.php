<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnosController;
use App\Http\Controllers\CarrerasController;
use App\Http\Controllers\MaestrosController;
use App\Http\Controllers\GradoMaestroController;
use App\Http\Controllers\Plan_EstudioController;
use App\Http\Controllers\PlanEstudioController;

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
Route::resource('servicios', App\Http\Controllers\ServiciosController::class);
Route::resource('registrop', App\Http\Controllers\RegistroPagosController::class);
Route::apiResource('apiCarreras',CarrerasController::class);

// AQUI SE VAN A ENRUTAR TODAS LAS VISTAS

// RUTAS DE OSCAR

// RUTAS DE DAVID
Route::view('Alumnos','prueb.alumnos');
// RUTAS DE HECTOR

// RUTAS DE PANCHO


// AQUI SE VAN A ENRUTAR TODAS LAS APIS (CONTROLADORES)

// RUTAS DE OSCAR

// RUTAS DE DAVID
Route::get('/apiAlumnos',[AlumnosController::class,'index']);
Route::get('/apiMaestros',[MaestrosController::class,'index']);
Route::get('/apiGradoMae',[GradoMaestroController::class,'index']);
// RUTAS DE HECTOR

// RUTAS DE PANCHO
// Route::apiResource('apiCarrera', CarrerasController::class);
// Route::apiResource('apiPlan',PlanEstudioController::class);

Route::resource('carreras',CarrerasController::class);
Route::resource('planEstudios',PlanEstudioController::class);