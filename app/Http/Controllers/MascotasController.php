<?php

namespace App\Http\Controllers;
use App\Models\Mascotas;
use App\Models\Clientes;

use Illuminate\Http\Request;

class MascotasController extends Controller
{
    
    public function index()
    {
        $mascotas = Mascotas::all();
        $clientes = Clientes::all();
        return view('mascotas', compact('mascotas', 'clientes'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {   
        $request-> validate([
            'codigo_mascota' => 'required|max:10',
            'nombre_mascota' => 'required|max:50',
            'tipo_mascota' => 'required|max:10',
            'documentoid' => 'required|max:15'
        ]);

        $mascota = new Mascotas($request->input());
        $mascota->saveOrFail();
        return redirect('mascotas');
    }

   
    public function show($id)
    {
        $mascotas = Mascotas::find($id);
        $clientes = Clientes::all();
        return view('editMascota',compact('clientes', 'mascotas'));
    }


    public function edit($id)
    {
        //
        $mascotas = Mascotas::find($id);
        return view('editMascota',compact('mascotas'));
    }


    public function update(Request $request, $id)
    {
        $mascota = Mascotas::find($id);
        $mascota->fill($request->input())->saveOrFail();
        return redirect('mascotas');
    }

    public function destroy($id)
    {
        $mascota = Mascotas::find($id);
        $mascota->delete();
        return redirect('mascotas');
    }
}
