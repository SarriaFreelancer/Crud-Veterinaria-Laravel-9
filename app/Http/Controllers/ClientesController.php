<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Clientes;

class ClientesController extends Controller
{
    
    public function index()
    {
        $clientes = Clientes::all();
        return view('clientes', compact('clientes'));
    }

   
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        $request-> validate([
            'documentoid' => 'required|max:10',
            'nombre' => 'required|max:100',
            'telefono' => 'required|max:15',
            'email' => 'required|max:50'
        ]);

        $cliente = new Clientes($request->input());
        $cliente->saveOrFail();
        return redirect('clientes');
    }

   
    public function show($id)
    {
        $clientes = Clientes::find($id);
        return view('editCliente',compact('clientes'));
    }


    public function edit($id)
    {
        //
        $clientes = Clientes::find($id);
        return view('editCliente',compact('clientes'));
    }


    public function update(Request $request, $id)
    {
        $cliente = clientes::find($id);
        $cliente->fill($request->input())->saveOrFail();
        return redirect('clientes');
    }

    public function destroy($id)
    {
        $cliente = clientes::find($id);
        $cliente->delete();
        return redirect('clientes');
    }
}
