@extends('home') 

@section('mainA') 
<h1>Datos variable actualizado correctamente</h1>
<div class="card">
	<table class="table table-condensed" role="grid">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable">descripcion variable</th>
			</tr>
		</thead>
		<tbody>
			<tr class="odd">
				<td>{{ $variable->desc_variables}}</td>
			</tr>
		</tbody>
	</table>
</div>
	<a href="{{route('variablesARD.index')}}" class="btn btn-primary">Regresar al inicio</a>
@stop
