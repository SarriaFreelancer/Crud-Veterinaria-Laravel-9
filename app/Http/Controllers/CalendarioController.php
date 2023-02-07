<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Citas;
use App\Models\Calendario;

class CalendarioController extends Controller
{
    public function index()
    {
        
        return view('calendario');
    }

     public function store(Request $request)
    {
       
    }
   
    public function create()
    {
        //
    }

   
    public function show($id)
    {
        
    }


    public function edit($id)
    {
        //
       
    }


    public function update(Request $request, $id)
    {
        
    }

    public function destroy($id)
    {
      
    }
}
