@extends('home') 

@section('mainA') 

<h1>Editar datos variable:  {{ $variable->desc_variables }} </h1>
	<form action="{{ route('variablesARD.update', $variable->id_variable) }}" method="POST" autocomplete="off">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for="desc_variable" class="form-label">
		Descripcion variable
		<input type="text" name="desc_variable" id="desc_variable" value="{{$variable->desc_variables}}" class="form-control">

		<a class="btn btn-danger" href="{!! route('variablesARD.index') !!}">Cancelar</a>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop