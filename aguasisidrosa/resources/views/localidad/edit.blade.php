@extends('home') 

@section('mainA') 

<h1>Editar datos localidad:  {{ $localidad->localidad_nombre }} </h1>
	<form action="{{ route('Localidades.update', $localidad->localidad_id) }}" method="POST" autocomplete="off">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for="cod_localidad" class="form-label">
		Codigo Localidad
		<input type="text" name="cod_localidad" id="cod_localidad" value="{{$localidad->localidad_codigo}}" class="form-control">

		<label for="nom_localidad" class="form-label">
		Nombre localidad
		<input type="text" name="nom_localidad" id="nom_localidad" value="{{$localidad->localidad_nombre}}" class="form-control">

		<label for="orden_localidad" class="form-label">
		Orden localidad
		<input type="number" name="orden_localidad" id="orden_localidad" value="{{$localidad->localidad_orden}}" class="form-control">

		<a class="btn btn-danger" href="{!! route('Localidades.index') !!}">Cancelar</a>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop