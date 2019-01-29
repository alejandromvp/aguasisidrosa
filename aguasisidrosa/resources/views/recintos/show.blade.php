@extends('home') 

@section('mainA') 
<h1>Datos recinto actualizado correctamente</h1>
<div class="card">
	<table class="table table-condensed" role="grid">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable">nombre recinto</th>
				<th class="sorting" aria-controls="datatable">orden recinto</th>
				<th class="sorting" aria-controls="datatable">id localidad</th>
				<th class="sorting" aria-controls="datatable">id tipo recinto</th>
				<th class="sorting" aria-controls="datatable">id arduino</th>
			</tr>
		</thead>
		<tbody>
			<tr class="odd">
				<td>{{ $recinto->recinto_nombre }}</td>
				<td>{{ $recinto->recinto_orden }}</td>
				<td>{{ $recinto->localidad_id }}</td>
				<td>{{ $recinto->tipo_recinto_id }}</td>
				<td>{{ $recinto->arduino_id }}</td>
			</tr>
		</tbody>
	</table>
</div>
	<a href="{{route('Recintos.index')}}" class="btn btn-primary">Regresar al inicio</a>
@stop
