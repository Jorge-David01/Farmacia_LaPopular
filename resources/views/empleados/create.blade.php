@extends('plantilla.principalpag')
@section('pestania', 'Formulario de empleados')

@section('contenido')

<div class="x_content">

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $mensaje)
                    <li>
                        {{$mensaje}}
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    <style>
        input{
            border-radius: 0px !important;
        }
    </style>

     <h1 style="margin-left: 4% ;  margin-bottom: 3%; "> Creación de Empleados </h1>

    <form style="margin-left: 3%;" method="post" enctype="multipart/form-data">
        @csrf

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Nombre Completo: <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input maxlength="110" type="text" id="nombre_completo" name="nombre_completo" required="required" class="form-control "
                value="{{old('nombre_completo')}}"
                placeholder="Ingrese el nombre completo">
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Identidad: <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input maxlength="13" type="text" id="dni" name="dni" required="required" class="form-control"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                value="{{old('dni')}}"
                pattern="[0-1]{1}[0-9]{1}[0-2]{1}[0-8]{1}[0-9]{9}"
                title="Ingrese un numero de identidad valido"
                placeholder="Ingrese la identidad sin guiones">
            </div>
        </div>
        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Número de celular: <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input maxlength="8" type="tel" id="numero_cel" name="numero_cel" required="required" class="form-control"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                value="{{old('numero_cel')}}"
                pattern="[9,8,3]{1}[0-9]{7}"
                title="Ingrese un numero de celular que inicie con 3,8 o 9 y que sea de 8 digitos"
                placeholder="Ingrese el número de celular">
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Teléfono fijo: <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input maxlength="8" type="tel" id="numero_tel" name="numero_tel" required="required" class="form-control"
                oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                value="{{old('numero_tel')}}"
                pattern="[2]{1}[0-9]{7}"
                title="Ingrese el telefono fijo que inicie con 2 y que sea de 8 digitos"
                placeholder="Ingrese el teléfono fijo">
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Dirección: <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <textarea maxlength="200" placeholder="Ingrese la dirección" name="direccion" id="direccion" name="direccion" cols="1" rows="3" required="required"
                class="form-control">{{old('direccion')}}</textarea>
            </div>
        </div>

        <div class="item form-group">
            <label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Correo Electrónico: <span class="required"></span>
            </label>
            <div class="col-md-6 col-sm-6 ">
                <input maxlength="60" type="email" id="email" name="email" required="required" class="form-control"
                value="{{old('email')}}"
                placeholder="Ingrese el correo electrónico"
                pattern="^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$"
                title="Ingrese un punto seguido de un dominio como por ejemplo .com .es .org">
            </div>
        </div>



                <div class="ln_solid"></div>
                <div class="item form-group">
                    <br><br>
                    <div style="margin-left: 0%;" class="col-md-6 col-sm-6 offset-md-3">
                        <button class="btn btn-danger" type="button" onclick="window.location='/empleados'">Cancelar</button>
                        <a type="button" href="javascript:location.reload()" class="btn btn-warning">Limpiar</a>
                        <button type="submit" class="btn btn-success">Guardar</button>
                    </div>
                </div>

    </form>
</div>


@section('pie_pagina', 'Copyright © 2022. FARMACIA LA POPULAR.')
@endsection
