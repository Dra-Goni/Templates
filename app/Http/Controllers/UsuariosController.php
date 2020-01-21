<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;

class UsuariosController extends Controller
{
    public function Crear()
    {
        $Rol = Rol::all();
        return view("usuarios.crear", ['Rol' => $Rol]);
    }


    public function Create(Request $request)
    {
        dd($request);
    }
}
