<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RutaController extends Controller
{
    public function store(Request $request)
    {
        
        $ruta = new Ruta();
        $ruta->nombre = $request->nombre;
        $ruta->descripcion = $request->descripcion;
        $ruta->lat_ini = $request->lat_ini;
        $ruta->genero = $request->genero;
        $ruta->long_ini = $request->long_ini;
        $ruta->lat_fin = $request->lat_fin;
        $ruta->long_fin = $request->long_fin;
        $ruta->id = $id->id;
        $ruta->save();
    
    }
}
