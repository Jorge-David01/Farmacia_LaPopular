@extends('plantilla.principalpag')
@section('pestania', 'Lista de productos')
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
@if (session('msj'))
<div class="alert alert-success">
  {{session('msj')}}
</div>
@endif




<div class="clearfix"></div>
  <div class="content-wrapper">
  <div class="container-fluid">


<h1 style=" margin-bottom: 3%; "> Lista de productos </h1>

<div style="float: right;margin-right: 10px; width: 250px">
  <center><a class="btn btn-danger" href="{{route('productos.pdf')}}">Descargar PDF</a></center>

</div>


<a class="btn btn-warning" href="/productos/nuevo">Nuevo Producto</a>

<form action="{{route('producto.busqueda')}}" method="POST" style="margin-top: 1%; width: 78%;">
@csrf
<input type="text" name="busca" id="busca" placeholder="Busqueda">
<input style="margin-left: 15px" type="submit" value="Buscar" class="btn btn-success">
<a style="margin-left: 4%;" class="btn btn-warning" href="/Producto">Limpiar</a>

</form>
<h1 style="margin-bottom: 2%;"></h1>

	<div class="row" >
	<div class="col-12 col-lg-12">
	<div class="card" >
		 
	<div class="table-responsive">
  <table class="table align-items-center table-flush table-borderless">

<tr style="background: #0088cc; text-align: center; border: 2px solid #dddddd;">
<th>Nombre del proveedor</th>
<th>Nombre del producto</th>
<th>Principio activo</th>
<th>Ver detalles</th>
</tr>

<tbody>
    @if (count($produc)<=0)
        <tr>

            <td colspan="6">No hay resultados</td>
    </tr>
    @endif
</tbody>

@forelse($produc as $producto)

<tr style="border: 2px solid #dddddd;">
<td>{{$producto->proveedores->Nombre_del_proveedor}}</td>
<td>{{$producto->nombre_producto}}</td>
<td>{{$producto->principio_activo}}</td>
<td > <a  class="btn btn-success" href="/Detallesproduct/{{$producto->id}}"> Detalles </a></td>
</tr>




@empty

@endforelse


{{$produc -> links() }}


</tbody>

</table>

                
</div>
</div>
</div>
</div>



@section('pie_pagina', 'Copyright © 2022. FARMACIA LA POPULAR.')
@endsection

