<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\Mascotas;

class CitasController extends Controller
{
    public function index()
    {
        $citas = Citas::all();
        $mascotas = Mascotas::all();
        return view('citas', compact('citas', 'mascotas'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request-> validate([
            'fecha' => 'required|max:10',
            'hora' => 'required|max:10',
            'codigo_mascota' => 'required|max:15'
        ]);

        $cita = new Citas($request->input());
        $cita->saveOrFail();
        return redirect('citas');
    }

   
    public function show($id)
    {
        $citas = Citas::find($id);
        $mascotas = Mascotas::all();
        return view('editCita',compact('citas', 'mascotas'));
    }


    public function edit($id)
    {
        //
        $citas = Citas::find($id);
        return view('editCita',compact('citas'));
    }


    public function update(Request $request, $id)
    {
        $cita = Citas::find($id);
        $cita->fill($request->input())->saveOrFail();
        return redirect('citas');
    }

    public function destroy($id)
    {
        $cita = Citas::find($id);
        $cita->delete();
        return redirect('citas');
    }
}
