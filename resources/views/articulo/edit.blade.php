@extends('adminlte::page')

@section('title', 'Editar')

@section('content_header')

@stop

@section('content')
<h2>EDITAR PRODUCTOS</h2>
<form action="/articulos/{{$articulo->id}}" method="POST">
@csrf
@method('PUT')
<div class="mb-3">
  <label for="" class="form-label">Código</label>
  <input id="codigo" name="codigo" type="text" class="form-control" value="{{$articulo->codigo}}">
</div>

<div class="mb-3">
  <label for="" class="form-label">Descripción</label>
  <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{$articulo->descripcion}}">
</div>

<div class="mb-3">
  <label for="" class="form-label">Cantidad</label>
  <input id="cantidad" name="cantidad" type="number" class="form-control" value="{{$articulo->cantidad}}">
</div>

<div class="mb-3">
  <label for="" class="form-label">Precio</label>
  <input id="precio" name="precio" type="number"step="any" value="0.00" class="form-control" value="{{$articulo->precio}}">
</div>

<a href="/articulos" class="btn btn-secondary" tabindex="5">Cancelar</a>
<button type="submit" class="btn btn-primary" tabindex="4">Guardar</button>

</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    
@stop
