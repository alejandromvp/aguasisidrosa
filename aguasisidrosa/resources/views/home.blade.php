@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if(Auth::user()->hasRole('admin'))
                        <div>Acceso como administrador</div>
                        {{-- <a href="{!! route('Tipo.index') !!}" class="btn btn-primary">ver registros</a> --}} 
                    @else
                        <div>Acceso usuario</div>
                    @endif
                        <a href="{!! route('registrosARD.index') !!}" class="btn btn-success">Ver registros</a><br><br>
                        <a href="{!! route('variablesARD.index') !!}" class="btn btn-success">Ver variables</a><br><br>
                        @yield('mainA') 
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection
