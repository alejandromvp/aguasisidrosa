@extends('home') 

@section('mainA') 
    <div class="card">
		<div class="card-header">
			<h3 class="card-title">Recinto <small></small></h3>
			<a href="{!! route('Recintos.create') !!}" class="btn btn-primary">agregar recinto</a>
			<div class="clearfix"></div>
		</div>
		<div class="card-body p-0">
			<div class="table-responsive">
				<table id="datatable" class="table table-striped table-sm">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable"> Id recinto</th>
				<th class="sorting" aria-controls="datatable"> Nombre recinto</th>
				<th class="sorting" aria-controls="datatable"> Orden recinto</th>
				<th class="sorting" aria-controls="datatable"> Id localidad</th>
				<th class="sorting" aria-controls="datatable"> Id tipo recinto</th>
				<th class="sorting" aria-controls="datatable"> tag arduino</th>
			</tr>
		</thead>
		<tbody>
			@foreach($recintos as $recinto)
			<tr class="odd">
				<td >{{ $recinto->recinto_id }}</td>
				<td >{{ $recinto->recinto_nombre }}</td>
				<td >{{ $recinto->recinto_orden }}</td>
				<td >{{ $recinto->localidad_id }}</td>
				<td >{{ $recinto->tipo_recinto_id }}</td>
				<td >{{ $recinto->tag}}</td>
				<td><a href="{{route('Recintos.edit', $recinto->recinto_id)}}" class="btn btn-info btn-xs">Editar</a></td>
				<td>
				<form method="POST" action="{{route('Recintos.destroy', $recinto->recinto_id)}}" style="display:inline;">
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