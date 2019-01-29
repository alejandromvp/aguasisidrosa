@extends('home') 

@section('mainA') 

<h1>Editar nombre:  {{ $arduino->nombre_arduino }} </h1>
	<form action="{{ route('Arduino.update', $arduino->arduino_id) }}" method="POST" autocomplete="off">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for="desc_arduino" class="form-label">
		nombre arduino
		<input type="text" name="desc_arduino" id="desc_arduino" value="{{$arduino->nombre_arduino}}" class="form-control">

		<label for="desc_tag" class="form-label">
		tag arduino
		<input type="text" name="desc_tag" id="desc_tag" value="{{$arduino->tag}}" class="form-control">

		<a class="btn btn-danger" href="{!! route('Arduino.index') !!}">Cancelar</a>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop