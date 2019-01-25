@extends('home') 

@section('mainA') 
    <div class="card">
		<div class="card-header">
			<h3 class="card-title">Registros <small></small></h3>
			<div class="clearfix"></div>
		</div>
		<div class="card-body p-0">
			<div class="table-responsive">
				<table id="datatable" class="table table-striped table-sm">
		<thead>
			<tr>
				<th class="sorting" aria-controls="datatable">id dispositivo </th>
				<th class="sorting" aria-controls="datatable">tipo de medicion </th>
				<th class="sorting" aria-controls="datatable">valor</th>
				<th class="sorting" aria-controls="datatable">fecha registro</th>
			</tr>
		</thead>
		<tbody>
			@foreach($registros as $registro)
			<tr class="odd">
				<td > arduino leopardo #1213</td>
				<td >{{ $registro->variable->desc_variables }}</td>
				<td >{{ $registro->info }}</td>
				<td >{{ $registro->created_at }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
	</div>
</div> {{-- div clase tabla responsiva --}}
</div> {{-- fin card --}}
@endsection 