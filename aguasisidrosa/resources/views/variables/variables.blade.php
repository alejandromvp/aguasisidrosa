@extends('home') 

@section('mainA') 
    <div class="card">
		<div class="card-header">
			<h3 class="card-title">Registros <small></small>
				<a href="{!! route('variablesARD.create') !!}" class="btn btn-primary">agregar variable</a>
			</h3>
			<div class="clearfix"></div>
		</div>
		<div class="card-body p-0">
			<div class="table-responsive">
				<table id="datatable" class="table table-striped table-sm">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable">Id variable</th>
				<th class="sorting" aria-controls="datatable">info</th>
				<th class="sorting" aria-controls="datatable">Eliminar</th>
			</tr>
		</thead>
		<tbody>
			@foreach($variables as $variable)
			<tr class="odd">
				<td >{{ $variable->id_variable }}</td>
				<td >{{ $variable->variables }}</td>
				<td>
					<form method="POST" action="{{route('variablesARD.destroy', $variable->id_variable)}}" style="display:inline;">
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