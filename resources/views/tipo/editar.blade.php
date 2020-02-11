@extends('layout.app')
@section('title','Editar  TP')
@section('contenido')

<div class="mt-5">
    &nbsp;
</div> 

<div class="container mt-5">
    @include('parcials.msg')

<form  method="POST" action="{{ url('/tipo/editar/'.$Tipo->TIP_ID.'') }}"  >
    <input name="_method" type="hidden" value="PUT">
    @csrf
    <div class="form-row text-center">
        <div class="form-group col-12">
            <h3>Editar Tipo de Usuario</h3>
            <hr>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label>Descripcion</label>
            <textarea  class="form-control" rows="4" name="descripcion"  placeholder="Escribir explicacion generica...">{{$Tipo->TIP_DESCRIPCION}}</textarea>
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-12">
            <input type="submit"  class="btn btn-secondary btn-lg btn-block" name="enviar" value="Editar Tipo de Usuario" >
        </div>
    </div>


  </form>  
</div>

@endsection