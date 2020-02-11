<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tipo;

class TipoController extends Controller
{
    public function Index()
    {
        return view("tipo.index");
    }

    public function crear()
    {
        return view("tipo.crear");
    }

    public function store(Request $request)
    {
        $Tipo= new Tipo();
        $Tipo->TIP_DESCRIPCION= $request->descripcion;
        $Tipo->save();
        return redirect('/tipo/crear')->with('msg', 'Tipo de usuario creado correctamente');
    }

    public function ver()
    {
        $Tipo = Tipo::all();
        return view("tipo.tipos", ['Tipo' => $Tipo]);
    }

    public function delete($id)
    {
        $Tipo= Tipo::where('TIP_ID', $id)->delete();
        return redirect('/tipo/ver')->with('msg', 'Tipo de usuario Eliminado correctamente');
    }

    public function editar($id)
    {
        $Tipo= Tipo::where('TIP_ID', $id)->first();
        return view("tipo.editar", ['Tipo' => $Tipo]);
        
    }

    public function edit($id,Request $request)
    {
        $Tipo = Tipo::findOrFail($id);
        $Tipo->TIP_DESCRIPCION= $request->descripcion;
        $Tipo->save();
        return redirect('/tipo/ver')->with('msg', 'Tipo de usuario editado correctamente');
    }


}
