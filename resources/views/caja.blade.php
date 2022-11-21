@extends('plantilla.principalpag')
@section('pestania', 'Caja de Alivio')
@section('contenido')
@section('TituloPlantillas', 'Caja de alivio')


<style>
  td {
    text-align: center;
  }
</style>





<div class="content-wrapper">
  <div class="container-fluid">


    @if (session('mensaje'))
    <div class="alert alert-success">
      {{session('mensaje')}}
    </div>
    @endif

    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
        <li>
          {{$error}}
        </li>
        @endforeach
      </ul>
    </div>
    @endif


<h1 style="margin-bottom: 6%;"></h1>
<div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
       

    </div>

    <h1 style="margin-bottom: 4%;"></h1>
    <div class="row">
      <div class="col-12 col-lg-12">
        <div class="card">
          <!--
    <form action="{{route('caja.answer')}}" method="POST">
    @csrf
    <div>
<label for="">¿Desea vaciar la caja de alivio?</label>
</div>
</div>



<div class="row">
            <div class="col-12 col-lg-12">
                <div class="card">
                    <div class="card-body">



                        <ul class="nav nav-tabs nav-tabs-primary  nav-justified">





<form action="{{route('caja.buscador')}}" method="post" >

@csrf
<div class="form-row">

  <div class="col-sm-8">
    <input type="text" class="form-control" name="search" id="search" placeholder="Busqueda">

  </div>

  <li class="nav-item">
<input style="margin-left:1%" type="submit" value="Buscar" class="btn btn-success">
</li>
         
         </div>
</form>


<li>
<a style="margin-left: 2%;" class="btn btn-warning" href="/CajaAlivio">Limpiar</a>
</li>

        </div>
      </div>
    </div>

    <a class="btn btn-warning" style="margin-bottom: 2%" href="/CajaPregunta/respuesta">Vaciar caja de alivio</a>



<li class="nav-item">
<a  class="btn btn-warning float-right" style="margin-bottom: 1%" href="/CajaPregunta/respuesta">Vaciar caja de alivio</a>
</li>

</ul>

</div>
</div>
</div>
</div>

    <div class="row">
      <div class="col-12 col-lg-12">
        <div class="card">


   
   
          <table style="text-align: center; " class="table table-bordered align-items-center table-flush table-borderless">


            <tr style="background: #0088cc; text-align: center; border: 2px solid #dddddd;">
            <th>#</th>
              <th>Descripción</th>
              <th>Vez #</th>
              <th>Fecha</th>
            </tr>

      


            @forelse($cajadatos as $datos)



            <tr style="border: 2px solid #dddddd;">
            <td>{{$cajadatos->perPage()*($cajadatos->currentPage()-1)+$loop->iteration}}</td>
              <td>{{$datos->Descripcion}}</td>
              <td>{{$datos->id}}</td>
              <td>{{$datos->Fecha}}</td>
            </tr>


            @empty

            @endforelse
            
            


            </tbody>
          </table>



        </div>
        {{$cajadatos -> links() }}
   
      
      </div>
    </div>



    @section('pie_pagina', 'Copyright © 2022. FARMACIA LA POPULAR.')
    @endsection