<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class SolicitudController extends Controller
{
    public function Index()
    {
        return view("solicitud.index");
    }

    public function crear()
    {
        $Tipo = Tipo::all();
        return view("solicitud.crear", ['Tipo' => $Tipo]);
    }

    public function store(Request $request)
    {
        $fecha=date("Y-m-d");
        dd($request);
    }
}
