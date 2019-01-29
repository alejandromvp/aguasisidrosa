@extends('home') 

@section('mainA') 
    <div class="card">
		<div class="card-header">
			<h3 class="card-title">Arduinos <small></small>
			<a href="{!! route('Arduino.create') !!}" class="btn btn-primary">agregar arduino</a>
			</h3>

			<div class="clearfix"></div>
		</div>
		<div class="card-body p-0">
			<div class="table-responsive">
				<table id="datatable" class="table table-striped table-sm">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable"> Id arduino</th>
				<th class="sorting" aria-controls="datatable"> Nombre_arduino</th>
				<th class="sorting" aria-controls="datatable"> tag</th>
			</tr>
		</thead>
		<tbody>
			@foreach($arduinos as $arduino)
			<tr class="odd">
				<td >{{ $arduino->arduino_id }}</td>
				<td >{{ $arduino->nombre_arduino }}</td>
				<td >{{ $arduino->tag }}</td>
				<td><a href="{{route('Arduino.edit', $arduino->arduino_id)}}" class="btn btn-info btn-xs">Editar</a></td>
				<td>
				<form method="POST" action="{{route('Arduino.destroy', $arduino->arduino_id)}}" style="display:inline;">
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