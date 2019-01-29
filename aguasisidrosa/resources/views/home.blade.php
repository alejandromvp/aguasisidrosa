@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    @if(Auth::user()->hasRole('admin'))
                        <div>Acceso como administrador</div>
                    @else
                        <div>Acceso usuario</div>
                    @endif</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="row justify-content-md-center">
                        <a href="{!! route('registrosARD.index') !!}" class="btn btn-success">Ver registros</a><br><br>
                        <a href="{!! route('variablesARD.index') !!}" class="btn btn-warning">Ver variables</a><br><br>
                        <div class="dropdown">
                          <button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Sectorizacion
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a href="{!! route('Localidades.index') !!}" class="dropdown-item">Localidades</a>
                            <a href="{!! route('Recintos.index') !!}" class="dropdown-item">Recintos</a>
                            <a href="{!! route('Tipo_recinto.index') !!}" class="dropdown-item">Tipo recintos</a>
                        </div>

                        </div> {{-- fin dropdawn --}}
                        <a href="{!! route('Arduino.index') !!}" class="btn btn-primary">Arduinos</a><br><br>
                    </div>{{-- fin lista de botones --}}
                    <br><br>
                    @yield('mainA') 
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
