@extends('home') 

@section('mainA') 

	<div class="col-md-10 offset-md-1 col-xs-12 offset-xs-1">
		<div class="card">
			<div class="card-header">
				<h3 class="card-title"> variables</h3>
				<div class="clearfix"></div>
			</div>
			<div class="card-body">
				<form action="{{ route('variablesARD.store')}}" method="POST" role="form" style="width: 60%; margin: 0 auto;" autocomplete="off">
					{{csrf_field()}}
					<div class="form-group {{ $errors->has('nombre') ? 'has-error' : '' }}">
						<label for="desc_variable" class="form-label">Descripcion variable:</label>
						<input type="text" name="desc_variable" id="desc_variable" value="{{old('desc_variable')}}" class="form-control">
						@if ($errors->has('desc_variable'))
							<span class="help-block"> <strong>{{ $errors->first('desc_variable') }}</strong> </span>
						@endif
					</div>
					
					<div class="card-footer text-right">
	                	<div class="btn-list text-right">
		                    <a class="btn btn-danger" href="{!! route('variablesARD.index') !!}">Cancelar</a>
							          <button type="submit" class="btn btn-success">Aceptar</button>
						       </div>
	         </div>
				</form>
			</div>
		</div>
	</div>
@endsection