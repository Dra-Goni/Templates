@extends('layout.app')
@section('title','Crear Usuarios')
@section('contenido')

<div class="mt-5">
    &nbsp;
</div> 
<div class="container mt-5">
<form  method="POST" action="{{ url('/usuario/crear') }}"  >
    @csrf
    <div class="form-row text-center">
        <div class="form-group col-12">
            <h3>Crear Nuevo Usuario</h3>
            <hr>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label>Correo Electronico</label>
           <input type="email"  class="form-control" name="correo">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label>Tipo De Usuario</label>
            <select class="form-control "name="tipo_usu" required>
            
                @foreach ($Rol as $ro)
            <option value="{{$ro->ROL_ID}}">{{$ro->ROL_DESCRIPCION}}</option>
                @endforeach  
        </select>
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label>Contraseña</label>
           <input type="password"  class="form-control" name="contraseña">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-12">
            <label>Repetir Contraseña</label>
           <input type="password"  class="form-control" name="contraseña_rep">
        </div>
    </div>

    <div class="form-row">
        <div class="form-group col-12">
            <input type="submit" class="btn btn-secondary btn-lg btn-block" name="fileSubmit" value="Crear Usuario" >
        </div>
    </div>


  </form>  
</div>

@endsection