@extends('layout.app')
@section('title','Administrar TP')
@section('contenido')

<div class="mt-5">
        &nbsp;
    </div> 
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url("/menu")}}">Menu Principal</a></li>
              <li class="breadcrumb-item" aria-current="page"><a href="{{url('/cargo/menu')}}">Menu Descripcion de Cargo</a></li>
              <li class="breadcrumb-item active" aria-current="page">Historial Descripcion de Cargo</li>
            </ol>
          </nav>
    </div> 
    <div class="container mt-5">
        @include('parcials.msg')
    <div class="form-row">
        <div class="form-group col-12 text-center">
            <h5>Descripcion de Cargo</h5>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>N°</th>
                    <th>Descripcion</th>
                    <th >Eliminar</th>
                    <th>Editar</th>
                </tr>
            </thead>
            <tbody>
                @if(count($Tipo))
                    @foreach ($Tipo as $item)
                    <tr>
                        <th scope="row">{{$item->TIP_ID}}</th>
                        <td>{{$item->TIP_DESCRIPCION}}</td>
                        <td >
                        <form action="{{url('/tipo/borrar',$item)}}" method="POST" >
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                             <input type="submit" value="Eliminar" class="btn btn-danger"> 
                            </form>
                        </td> 
                        <td> <a href="{{url('/tipo/editar',$item) }}" class="btn btn-info">Editar</a></td>
                    </tr>
                    @endforeach
   
               @else
               <tr>
                   <td class="h3 text-center font-italic" colspan="4">No Hay Tipos de Usuario Por Mostrar</td>
               </tr>
               @endif
            </tbody>   
        </table>
    </div>
  </div>
@endsection