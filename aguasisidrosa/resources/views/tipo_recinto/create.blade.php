@extends('home') 

@section('mainA') 

	<div class="col-md-10 offset-md-1 col-xs-12 offset-xs-1">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> agregar tipo recinto</h3>
				<div class="clearfix"></div>
			</div>
			<div class="card-body">
				<form action="{{ route('Tipo_recinto.store')}}" method="POST" role="form" style="width: 60%; margin: 0 auto;" autocomplete="off">
					{{csrf_field()}}
					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="Nom_tipo_recinto" class="form-label">Nombre tipo recinto:</label>
						<input type="text" name="Nom_tipo_recinto" id="Nom_tipo_recinto" value="{{old('desc_arduino')}}" class="form-control">
						@if ($errors->has('Nom_tipo_recinto'))
							<span class="help-block"> <strong>{{ $errors->first('Nom_tipo_recinto') }}</strong> </span>
						@endif
					</div>
					
					<div class="card-footer text-right">
	                	<div class="btn-list text-right">
		                    <a class="btn btn-danger" href="{!! route('Tipo_recinto.index') !!}">Cancelar</a>
							<button type="submit" class="btn btn-success">Aceptar</button>
						</div>
	                </div>
				</form>
			</div>
		</div>
	</div>
@endsection