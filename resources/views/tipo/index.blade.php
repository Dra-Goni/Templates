@extends('layout.app')
@section('title','Menu TP')
@section('contenido')

<div class=" mt-5">
        &nbsp;
</div> 
    <div class="container mt-5">
        <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url("/")}}">Menu Principal</a></li>
        <li class="breadcrumb-item active " aria-current="page">Menu Tipos de Usuario</li>
      </ol>
    </nav>
        
    <div class="container-fluid">
        <div class="row justify-content-center">

                <div class="col-12 ">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                          <div class="card-body d-flex flex-column align-items-start">
                            <strong class="d-inline-block mb-2 text-primary">Aplicacion de Control de solicitudes</strong>
                            <h3 class="mb-0">
                              <a class="text-dark" href="{{url("/tipo/ver")}}">Administracion de Tipos de Usuario</a>
                            </h3>
                           
                            <p class="card-text mb-auto">Texto explicativo ..........................................................................</p>
                            <a href="{{url("/tipo/ver")}}">Ir al sitio</a>
                          </div>
                          <i class="fas fa-chess fa-10x"></i>
                          &nbsp;&nbsp;
                        </div>
                      </div>
               
              <div class="col-12 ">
                <div class="card flex-md-row mb-4 shadow-sm h-md-250">
                  <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">Aplicacion de Control de solicitudes</strong>
                    <h3 class="mb-0">
                      <a class="text-dark" href="{{url("/tipo/crear")}}">Crear Tipos de Usuario</a>
                    </h3>
                   
                    <p class="card-text mb-auto">Texto explicativo ..........................................................................</p>
                <a href="{{url("/tipo/crear")}}">Ir al sitio</a>
                  </div>
                  <i class="fas fa-chess-queen fa-10x"></i>
                  &nbsp;&nbsp;
                </div>
              </div>
                          
        

        </div>
    </div>
</div>     

@endsection