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
        $carreras = Carreras::all();
        return view('try.carreras',compact('carreras'));
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
        $carrera = new Carreras($request->input());
        $carrera->saveOrFail();
        return redirect('carreras');
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
        $carrera = Carreras::find($id);
        return view('try.editarCarrera',compact('carrera'));
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
        $carrera = Carreras::find($id);
        $carrera->fill($request->input())->saveOrFail();
        return redirect('carreras');
 
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
        $carrera = Carreras::find($id);
        $carrera->delete();
        return redirect('carreras');
        
    }
}
