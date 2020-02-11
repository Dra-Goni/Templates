<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rol;
use App\User;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUser;
class UsuariosController extends Controller
{
    public function Crear()
    {
        $Rol = Rol::all();
        return view("usuarios.crear", ['Rol' => $Rol]);
    }


    public function store(StoreUser $request)
    {
         
         $Usuario= new User();
         $Usuario->USU_MAIL= $request->correo;
         $Usuario->USU_ROL= $request->tipo_usu;
         $Usuario->USU_PASSWORD= Hash::make($request->password);
         $Usuario->save();
         return redirect('/usuario/crear')->with('msg', 'Usuario creado correctamente');
    }
}
