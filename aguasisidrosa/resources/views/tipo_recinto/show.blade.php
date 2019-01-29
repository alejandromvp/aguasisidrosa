@extends('home') 

@section('mainA') 
<h1>Nombre tipo recinto actualizado correctamente</h1>
<div class="card">
	<table class="table table-condensed" role="grid">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable">Nombre tipo recinto</th>
			</tr>
		</thead>
		<tbody>
			<tr class="odd">
				<td>{{ $tipo_recinto->tipo_recinto_nombre }}</td>
			</tr>
		</tbody>
	</table>
</div>
	<a href="{{route('Tipo_recinto.index')}}" class="btn btn-primary">Regresar al inicio</a>
@stop
