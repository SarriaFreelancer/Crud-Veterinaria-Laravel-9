<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;

class APICitasController extends Controller
{
  
    public function index()
    {   
        $eventos = array();
        $citas = Citas::all();
        foreach ($citas as $cita) {
            $eventos[] = [
                'fecha' => $cita->fecha,
                'hora' => $cita->hora,
                'codigo_mascota' => $cita->codigo_mascota
            ];
        }
        return $citas;
    }

  
    public function store(Request $request)
    {
        Citas::create($request->all());
    }

    public function show($id)
    {
        //
    }

 
    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

        //Total de Registros con un Array Where
       
}
