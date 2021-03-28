<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BusController extends Controller
{
     public function store(Request $request)
    {
        
        $bus = new Bus();
        $bus->nombre = $request->nombre;
        $bus->descripcion = $request->descripcion;
        $bus->modelo = $request->modelo;
        $bus->capacidad = $request->capacidad;
        $bus->estado = $request->estado;
        $bus->id = $id->id;
        $bus->id_ruta = $request->id_ruta;
        $bus->save();
        
    
    }
}
