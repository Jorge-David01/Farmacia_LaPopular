@extends('plantilla.principalpag')
@section('pestania', 'Lista de proveedores')
@section('contenido')


<style>
  td {
    text-align: center;
  }
</style>

@if (session('Mensaje'))
<div class="alert alert-danger">
  {{session('Mensaje')}}
</div>
@endif


</style>




<div class="clearfix"></div>
<div class="content-wrapper">
  <div class="container-fluid">

    <h1 style=" margin-left: 2%; margin-bottom: 3%;"> Lista de proveedores </h1>



    @if (session('mensaje'))
<div class="alert alert-success">
  {{session('mensaje')}}
</div>
@endif

@if (session('msj'))
<div class="alert alert-success">
  {{session('msj')}}
</div>
@endif

    <div style="float: right;margin-right: 10px; width: 250px">
      <center><a class="btn btn-danger" href="{{route('proveedores.pdf')}}">Descargar PDF</a></center>
    </div>
    

    <a class="btn btn-warning" href="proveedor/nuevo">Nuevo proveedor</a>

    <form action="{{route('funt')}}" method="POST" style="margin-top: 1%; width: 78%; margin-bottom:2%; ">
      @csrf
      <input type="text" name="search" id="search" placeholder="Busqueda">
      <input style="margin-left: 15px" type="submit" value="Buscar" class="btn btn-success">
    </form>





    <div class="row">
      <div class="col-12 col-lg-12">
        <div class="card">

          <div class="table-responsive">
            <table class="table align-items-center table-flush table-borderless">



              <tr style="background: #0088cc; text-align: center; border: 2px solid #dddddd;">
                <th>Nombre del proveedor</th>
                <th>Nombre del distribuidor</th>
          
                <th>Catálogo</th>
                <th>Ver detalles</th>
              </tr>

              <tbody>
                @if (count($pro)<=0) <tr>
                  <td colspan="6">No hay resultados</td>
                  </tr>
                  @endif
              </tbody>

              @forelse($pro as $prove)

              <tr style="border: 2px solid #dddddd;">

                <td>{{$prove->Nombre_del_proveedor}}</td>
                <td>{{$prove->Nombre_del_distribuidor}}</td>
            
                <td> <a class="btn btn-info" href="Archivos/{{$prove->Archivo}}" target="blank_">Documentos</a></td>
                <td> <a class="btn btn-success" href="/Verprovee/{{$prove->id}}">Detalles</a></td>
               
              </tr>

              @empty

              @endforelse

              </tbody>

            </table>

            {{$pro-> links() }}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>






@section('pie_pagina', 'Copyright © 2022. FARMACIA LA POPULAR.')
@endsection