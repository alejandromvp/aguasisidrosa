@extends('home') 

@section('mainA') 

<h1>Editar nombre:  {{ $recintos->recinto_nombre }} </h1>
	<form action="{{ route('Recintos.update', $recintos->recinto_id) }}" method="POST" autocomplete="off">
	{{csrf_field()}}
	{{method_field('PUT')}}
		<label for="tipo" class="form-label">
		Recinto nombre
		<input type="text" name="desc_recinto_nombre" id="desc_recinto_nombre" value="{{$recintos->recinto_nombre}}" class="form-control">

		<label for="rec_orden" class="form-label">
		recinto orden
		<input type="text" name="rec_orden" id="rec_orden" value="{{$recintos->recinto_orden}}" class="form-control">

		<label for="localidad_id" class="form-label">
		localidad
		<select class="form-control" name="localidad_id">
			<option value="{{$localidad->localidad_id}}">{{$localidad->localidad_nombre}}</option>
			@foreach ($localidades as $localidad)
                <option value="{{$localidad->localidad_id}}">{{$localidad->localidad_nombre}}</option>
            @endforeach
		</select>

		<label for="rec_orden" class="form-label">
		tipo recinto 	
		<select class="form-control" name="tipo_recinto_id">
			<option value="{{$tipo_recinto->tipo_recinto_id}}">{{$tipo_recinto->tipo_recinto_nombre}}</option>
			@foreach ($tipo_recintos as $tipo_recint)
                <option value="{{$tipo_recint->tipo_recinto_id}}">{{$tipo_recint->tipo_recinto_nombre}}</option>
            @endforeach
		</select>


		<label for="arduino_id" class="form-label">Tag arduino:</label>
		<select class="form-control" name="arduino_id">
			<option value="{{$recintos->arduino_id}}">{{$recintos->tag}}</option>
			<option value="">Recinto sin arduino</option>
			@foreach ($arduinos as $arduino)
                <option value="{{$recintos->arduino_id}}">{{$arduino->tag}}</option>
            @endforeach
		</select>

		 <a class="btn btn-danger" href="{!! route('Recintos.index') !!}">Cancelar</a>
		<input type="submit" value="enviar" class="btn btn-primary">
	</form>
@stop