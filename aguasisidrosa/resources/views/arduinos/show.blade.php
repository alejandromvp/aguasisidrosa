@extends('home') 

@section('mainA') 
<h1>Datos arduino actualizada correctamente</h1>
<div class="card">
	<table class="table table-condensed" role="grid">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable">nombre arduino</th>
				<th class="sorting" aria-controls="datatable">tag</th>
			</tr>
		</thead>
		<tbody>
			<tr class="odd">
				<td>{{ $arduino->nombre_arduino }}</td>
				<td>{{ $arduino->tag }}</td>
			</tr>
		</tbody>
	</table>
</div>
	<a href="{{route('Arduino.index')}}" class="btn btn-primary">Regresar al inicio</a>
@stop
