<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    //
    public function show($id)
    {
        try {
            $mascotas = Persona::find($id)->mascotas;
            return response()->json(['mascotas' => $mascotas], 200);
        } catch (\Exception $e) {
            return  response()->json(['data' => [], 'err' => $e->getMessage(), 'msg' => 'Error obteniendo datos'], 500);
        }
    }
}
