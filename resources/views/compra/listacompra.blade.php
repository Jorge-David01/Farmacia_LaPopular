@extends('plantilla.principalpag')
@section('pestania', 'Lista de compras')
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


<h1 style="margin-bottom: 2%; margin-left: 2%;"> Listado de compras realizadas </h1>

<div style="float: right;margin-right: 10px; width: 250px">
    <center><a class="btn btn-danger" href="{{route('compras.pdf')}}">Descargar PDF</a></center>
  </div>

<a class="btn btn-warning" href="/compra/nuevo">Ingresar compra</a>

<form action="{{route('buscador')}}" method="POST" style="margin-top: 1%; width: 78%;">
@csrf
<input type="text" name="missing" id="missing" placeholder="Busqueda">
<input style="margin-left: 15px" type="submit" value="Buscar" class="btn btn-success">
<a style="margin-left: 2%;" class="btn btn-warning" href="/listacompra">Limpiar</a>

</form>
    
<h1 style="margin-bottom: 2%;"></h1>

	<div class="row" >
	<div class="col-12 col-lg-12">
	<div class="card" >

  <div class="table-responsive">

    <table class="table align-items-center table-flush table-borderless">

<tr style="background: #0088cc; text-align: center; border: 2px solid #dddddd;">
<th>Número de factura</th>

<th>Fecha de pago</th>
<th>Detalles de compra</th>
</tr>

<tbody>
    @if (count($lista)<=0)
        <tr>
            <td colspan="6">No hay resultados</td>
    </tr>
    @endif
</tbody>

@forelse($lista as $list )

<tr style="border: 2px solid #dddddd;">
<td> {{$list->numero_factura}} </td>

<td>  {{$list->fecha_pago}}             </td>

<td > <a  class="btn btn-success" href="/detallescompra/{{$list->id}}"> Detalles </a></td>
</tr>





@empty



@endforelse



{{$lista -> links() }}

</tbody>

</table>

                
</div>
</div>
</div>
</div>

@section('pie_pagina', 'Copyright © 2022. FARMACIA LA POPULAR.')
@endsection
