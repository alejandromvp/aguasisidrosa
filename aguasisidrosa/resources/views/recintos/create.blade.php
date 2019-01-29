@extends('home') 

@section('mainA') 

	<div class="col-md-10 offset-md-1 col-xs-12 offset-xs-1">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> Crear recinto</h3>
				<div class="clearfix"></div>
			</div>
			<div class="card-body">
				<form action="{{ route('Recintos.store')}}" method="POST" role="form" style="width: 60%; margin: 0 auto;" autocomplete="off">
					{{csrf_field()}}
					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="nombre_recinto" class="form-label">Nombre Recinto:</label>
						<input type="text" name="nombre_recinto" id="nombre_recinto" value="{{old('nombre_recinto')}}" class="form-control">
						@if ($errors->has('nombre_recinto'))
							<span class="help-block"> <strong>{{ $errors->first('nombre_recinto') }}</strong> </span>
						@endif
					</div>

					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="recinto_orden" class="form-label">Recinto Orden:</label>
						<input type="text" name="recinto_orden" id="recinto_orden" value="{{old('recinto_orden')}}" class="form-control">
						@if ($errors->has('recinto_orden'))
							<span class="help-block"> <strong>{{ $errors->first('recinto_orden') }}</strong> </span>
						@endif
					</div>

					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="localidad_id" class="form-label">Localidad id:</label>
						<select class="form-control" name="localidad_id">
							<option value="">nada seleccionado</option>
							@foreach ($localidades as $localidad)
				                <option value="{{$localidad->localidad_id}}">{{$localidad->localidad_nombre}}</option>
				            @endforeach
						</select>
					</div>

					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="localidad_id" class="form-label">Tipo recinto:</label>
						<select class="form-control" name="tipo_recinto">
							<option value="">nada seleccionado</option>
							@foreach ($tipo_recintos as $tipo_recinto)
				                <option value="{{$tipo_recinto->tipo_recinto_id}}">{{$tipo_recinto->tipo_recinto_nombre}}</option>
				            @endforeach
						</select>
					</div>

					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="arduino_id" class="form-label">Arduino:</label>
						<select class="form-control" name="arduino_id">
							<option value="">nada seleccionado</option>
							@foreach ($arduinos as $arduino)
				                <option value="{{$arduino->arduino_id}}">{{$arduino->tag}}</option>
				            @endforeach
						</select>
					</div>
					
					<div class="card-footer text-right">
	                	<div class="btn-list text-right">
		                    <a class="btn btn-danger" href="{!! route('Recintos.index') !!}">Cancelar</a>
							          <button type="submit" class="btn btn-success">Aceptar</button>
						       </div>
	         </div>
				</form>
			</div>
		</div>
	</div>
@endsection