<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Carreras;

class CarrerasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return Carreras::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $carrera=new Carreras();
        $carrera->id=$request->get('id');
        $carrera->nombre=$request->get('codigo');
        $carrera->precio=$request->get('nombre_carrera');
        $carrera->cantidad=$request->get('id_plan');

        $carrera->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        return Carreras::find($id);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $carrera= Carreras::find($id);
        $carrera->id=$request->get('id');
        $carrera->nombre=$request->get('codigo');
        $carrera->precio=$request->get('nombre_carrera');
        $carrera->cantidad=$request->get('id_plan');

        $carrera->update();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $carrera= Carreras::find($id);
        $carrera->delete();
    }
}
