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



<h1 style="margin-left: 4% ; margin-bottom: 3%;"> Listado de compras realizadas </h1>

<a style="margin-left: 4%;" class="btn btn-warning" href="/compra/nuevo">Ingresar compra</a>

<form action="{{route('buscador')}}" method="POST" style="margin-top: 1%; width: 78%; margin-left: 4%">
@csrf
<input type="text" name="missing" id="missing" placeholder="Busqueda">
<input style="margin-left: 15px" type="submit" value="Buscar" class="btn btn-success">
</form>



<table  style="margin-top: 1%; width: 80%; margin-left: 4%;" >

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



@section('pie_pagina', 'Copyright © 2022. FARMACIA LA POPULAR.')
@endsection
