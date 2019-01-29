@extends('home') 

@section('mainA') 
    <div class="card">
		<div class="card-header">
			<h3 class="card-title">Localidad <small></small>
			<a href="{!! route('Localidades.create') !!}" class="btn btn-primary">agregar localidad</a>
			</h3>
			<div class="clearfix"></div>
		</div>
		<div class="card-body p-0">
			<div class="table-responsive">
				<table id="datatable" class="table table-striped table-sm">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable"> Id localidad</th>
				<th class="sorting" aria-controls="datatable"> Codigo Localidad</th>
				<th class="sorting" aria-controls="datatable"> Localidad Nombre</th>
				<th class="sorting" aria-controls="datatable"> Orden Localidad</th>
			</tr>
		</thead>
		<tbody>
			@foreach($localidades as $localidad)
			<tr class="odd">
				<td >{{ $localidad->localidad_id }}</td>
				<td >{{ $localidad->localidad_codigo }}</td>
				<td >{{ $localidad->localidad_nombre }}</td>
				<td >{{ $localidad->localidad_orden }}</td>
				<td><a href="{{route('Localidades.edit', $localidad->localidad_id)}}" class="btn btn-info btn-xs">Editar</a></td>
				<td>
				<form method="POST" action="{{route('Localidades.destroy', $localidad->localidad_id)}}" style="display:inline;">
					{{method_field('DELETE')}}
					{{csrf_field()}}
					<button type="submit" class="btn btn-danger">Eliminar</button>
				</form>
				</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div> {{-- div clase tabla responsiva --}}
</div> {{-- fin card --}}
@endsection 