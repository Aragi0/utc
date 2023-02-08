<?php

namespace App\Http\Controllers;

use App\Models\Registro_pagos;

use Illuminate\Http\Request;
use App\Models\Servicios;
class RegistroPagosController extends Controller
{

    public function index()
    {
        //
        $servicios = Servicios::all();
        $registro_pagos = Registro_pagos::select('registro_pagos.id','id_servicio','id_matricula','estado','nombre_serv')
        ->join('servicios','servicios.id','=','registro_pagos.id_servicio')->get();
        return view('servicios.pagoserv',compact('registro_pagos','servicios'));
        
    }

  
    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        //
        $registro_pago = new Registro_pagos($request->input());
        $registro_pago->saveOrFail();
        return redirect('registrop');

    }

  
    public function show($id)
    {
        //
       $registro_pago = Registro_pagos::find($id);
       $servicios = Servicios::all();
        return view('servicios.edtPago',compact('registro_pago','servicios'));
    }

   
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        // 
        $registro_pago = Registro_pagos::find($id);
        $registro_pago->fill($request->input())->saveOrFail();
        return redirect('registrop');
    }

 
    public function destroy($id)
    {
        //
        $registro_pago = Registro_pagos::find($id);
        $registro_pago->delete();
        return redirect('registrop');
    }
}
