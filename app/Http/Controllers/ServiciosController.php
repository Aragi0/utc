<?php

namespace App\Http\Controllers;

use App\Models\Servicios;
use Illuminate\Http\Request;


class ServiciosController extends Controller
{
 
    public function index()
    {
        //
        $servicios = Servicios::all();
        return view('servicios.servicios',compact('servicios'));

    }

  
    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $servicio = new Servicios($request->input());
        $servicio->saveOrFail();
        return redirect('servicios');


    }

    public function show($id)
    {
        //
        $servicio = Servicios::find($id);
        return view('servicios.edtServ',compact('servicio'));
    }

    public function edit($id)
    {
        //
    }

  
    public function update(Request $request, $id)
    {
        $servicio = Servicios::find($id);
        $servicio->fill($request->input())->saveOrFail();
        return redirect('servicios');
    }


    public function destroy($id)
    {
        //
        $servicio = Servicios::find($id);
        $servicio->delete();
        return redirect('servicios');
    }
}
