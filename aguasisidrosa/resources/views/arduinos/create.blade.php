@extends('home') 

@section('mainA') 

	<div class="col-md-10 offset-md-1 col-xs-12 offset-xs-1">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> agregar arduino</h3>
				<div class="clearfix"></div>
			</div>
			<div class="card-body">
				<form action="{{ route('Arduino.store')}}" method="POST" role="form" style="width: 60%; margin: 0 auto;" autocomplete="off">
					{{csrf_field()}}
					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="desc_arduino" class="form-label">nombre arduino:</label>
						<input type="text" name="desc_arduino" id="desc_arduino" value="{{old('desc_arduino')}}" class="form-control">
						@if ($errors->has('desc_arduino'))
							<span class="help-block"> <strong>{{ $errors->first('desc_arduino') }}</strong> </span>
						@endif
					</div>

					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="desc_tag" class="form-label">Tag:</label>
						<input type="text" name="desc_tag" id="desc_tag" value="{{old('desc_tag')}}" class="form-control">
						@if ($errors->has('desc_tag'))
							<span class="help-block"> <strong>{{ $errors->first('desc_tag') }}</strong> </span>
						@endif
					</div>
					
					<div class="card-footer text-right">
	                	<div class="btn-list text-right">
		                    <a class="btn btn-danger" href="{!! route('Arduino.index') !!}">Cancelar</a>
							<button type="submit" class="btn btn-success">Aceptar</button>
						</div>
	                </div>
				</form>
			</div>
		</div>
	</div>
@endsection