@extends('home') 

@section('mainA') 
<h1>Datos localidad actualizado correctamente</h1>
<div class="card">
	<table class="table table-condensed" role="grid">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable">Codigo localidad</th>
				<th class="sorting" aria-controls="datatable">Nombre localidad</th>
				<th class="sorting" aria-controls="datatable">Orden localidad</th>
			</tr>
		</thead>
		<tbody>
			<tr class="odd">
				<td>{{ $localidad->localidad_codigo}}</td>
				<td>{{ $localidad->localidad_nombre}}</td>
				<td>{{ $localidad->localidad_orden}}</td>
			</tr>
		</tbody>
	</table>
</div>
	<a href="{{route('Localidades.index')}}" class="btn btn-primary">Regresar al inicio</a>
@stop
