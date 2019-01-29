@extends('home') 

@section('mainA') 

	<div class="col-md-10 offset-md-1 col-xs-12 offset-xs-1">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> agregar localidad</h3>
				<div class="clearfix"></div>
			</div>
			<div class="card-body">
				<form action="{{ route('Localidades.store')}}" method="POST" role="form" style="width: 60%; margin: 0 auto;" autocomplete="off">
					{{csrf_field()}}
					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="cod_localidad" class="form-label">Codigo localidad:</label>
						<input type="text" name="cod_localidad" id="cod_localidad" value="{{old('cod_localidad')}}" class="form-control">
						@if ($errors->has('cod_localidad'))
							<span class="help-block"> <strong>{{ $errors->first('cod_localidad') }}</strong> </span>
						@endif
					</div>

					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="nom_localidad" class="form-label">Nombre localidad:</label>
						<input type="text" name="nom_localidad" id="nom_localidad" value="{{old('nom_localidad')}}" class="form-control">
						@if ($errors->has('nom_localidad'))
							<span class="help-block"> <strong>{{ $errors->first('nom_localidad') }}</strong> </span>
						@endif
					</div>

					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="orden_localidad" class="form-label">orden localidad:</label>
						<input type="text" name="orden_localidad" id="orden_localidad" value="{{old('orden_localidad')}}" class="form-control">
						@if ($errors->has('orden_localidad'))
							<span class="help-block"> <strong>{{ $errors->first('orden_localidad') }}</strong> </span>
						@endif
					</div>
					
					<div class="card-footer text-right">
	                	<div class="btn-list text-right">
		                    <a class="btn btn-danger" href="{!! route('Localidades.index') !!}">Cancelar</a>
							<button type="submit" class="btn btn-success">Aceptar</button>
						</div>
	                </div>
				</form>
			</div>
		</div>
	</div>
@endsection