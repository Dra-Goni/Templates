@extends('layout.app')
@section('title','Crear Solicitud')
@section('contenido')

<div class="mt-5">
    &nbsp;
</div> 

<div class="container mt-5">
    @include('parcials.msg')

<form  method="POST" action="{{ url('/solicitud/crear') }}"  >
    @csrf
    <div class="form-row text-center">
        <div class="form-group col-12">
            <h3>Crear Solicitud</h3>
            <hr>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label>Tipo de Solicitud</label>
            <select class="form-control "name="carrera" required>
                @foreach ($Tipo as $item)
            <option value="{{$item->TIP_ID}}">{{$item->TIP_DESCRIPCION}}</option>
                @endforeach  
        </select>
           
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label>Descripcion del Problema</label>
            <textarea  class="form-control" rows="4" name="descripcion"  placeholder="Escribir explicacion generica..."></textarea>
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-12">
            <label>Archivo Adjunto</label>
            <input type="file" name="userfile[]" size="20" class="btn btn-secondary btn-lg btn-block" />
        </div>
    </div>
    
    
    <div class="form-row">
        <div class="form-group col-12">
            <input type="submit"  class="btn btn-secondary btn-lg btn-block" name="enviar" value="Crear Solicitud" >
        </div>
    </div>


  </form>  
</div>

@endsection