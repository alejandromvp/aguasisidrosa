@extends('home') 

@section('mainA') 

<h1>Editar nombre:  {{ $tipo_recinto->nombre_arduino }} </h1>
	<form action="{{ route('Tipo_recinto.update', $tipo_recinto->tipo_recinto_id) }}" method="POST" autocomplete="off">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for="desc_recinto" class="form-label">
		Nombre tipo recinto
		<input type="text" name="desc_recinto" id="desc_recinto" value="{{$tipo_recinto->tipo_recinto_nombre}}" class="form-control">

		<a class="btn btn-danger" href="{!! route('Tipo_recinto.index') !!}">Cancelar</a>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop