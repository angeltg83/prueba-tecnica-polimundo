<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    //
    public function index()
    {
        try {
            $mascotas = Mascota::where(['estado_registro' => 1])->get();
            return response()->json(['mascotas' => $mascotas, 'count' => count($mascotas)], 200);
        } catch (\Exception $e) {
            return  response()->json(['data' => [], 'err' => $e->getMessage(), 'msg' => 'Error obteniendo datos'], 500);
        }
    }
}
