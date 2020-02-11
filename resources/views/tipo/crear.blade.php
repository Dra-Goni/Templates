@extends('layout.app')
@section('title','Crear TP')
@section('contenido')

<div class="mt-5">
    &nbsp;
</div> 

<div class="container mt-5">
    @include('parcials.msg')

<form  method="POST" action="{{ url('/tipo/crear') }}"  >
    @csrf
    <div class="form-row text-center">
        <div class="form-group col-12">
            <h3>Crear Tipo de Usuario</h3>
            <hr>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label>Descripcion</label>
            <textarea  class="form-control" rows="4" name="descripcion"  placeholder="Escribir explicacion generica..."></textarea>
        </div>
    </div>
    
    <div class="form-row">
        <div class="form-group col-12">
            <input type="submit"  class="btn btn-secondary btn-lg btn-block" name="enviar" value="Crear Tipo de Usuario" >
        </div>
    </div>


  </form>  
</div>

@endsection