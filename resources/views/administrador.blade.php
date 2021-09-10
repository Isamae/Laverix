@extends('layouts.app')

@section('content')
@include('componentes.nav')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Administrador</div>

                <ul class="nav" id="nav">
                    <li><a class="btn btn-sm btn-primary " href="{{ url('usuario/create') }}"><i class="fa fa-fw fa-eye"></i> Crear Usuario</a></li>
                    <li><a class="btn btn-sm btn-primary " href="{{ url('usuario/show-usuarios') }}"><i class="fa fa-fw fa-eye"></i> Mostrar Usuarios</a></li>
                </ul>
                @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                <div class="card-body">
                    @include('administrador.show-administrador')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
