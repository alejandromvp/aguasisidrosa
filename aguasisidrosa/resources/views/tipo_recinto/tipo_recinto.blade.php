@extends('home') 

@section('mainA') 
    <div class="card">
		<div class="card-header">
			<h3 class="card-title">Tipo recinto <small></small></h3>
			<div class="clearfix"></div>
		</div>
		<div class="card-body p-0">
			<div class="table-responsive">
				<table id="datatable" class="table table-striped table-sm">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable"> Id tipo recinto</th>
				<th class="sorting" aria-controls="datatable"> Nombre tipo recinto</th>
			</tr>
		</thead>
		<tbody>
			@foreach($tipo_recintos as $tipo_recinto)
			<tr class="odd">
				<td >{{ $tipo_recinto->tipo_recinto_id }}</td>
				<td >{{ $tipo_recinto->tipo_recinto_nombre }}</td>
				<td><a href="{{route('Tipo_recinto.edit', $tipo_recinto->tipo_recinto_id)}}" class="btn btn-info btn-xs">Editar</a></td>
				<td>
				<form method="POST" action="{{route('Tipo_recinto.destroy', $tipo_recinto->tipo_recinto_id)}}" style="display:inline;">
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