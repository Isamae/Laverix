@extends('layouts.app')

@section('template_title')
    {{ $usuario->name ?? 'Show Usuario' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Usuario</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ url('usuario/show-usuarios') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $usuario->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Apellido:</strong>
                            {{ $usuario->apellido }}
                        </div>
                        <div class="form-group">
                            <strong>Email:</strong>
                            {{ $usuario->email }}
                        </div>
                        <div class="form-group">
                            <strong>Teléfono:</strong>
                            {{ $usuario->telefono }}
                        </div>
                        <div class="form-group">
                            <strong>Fechanacimiento:</strong>
                            {{ $usuario->fechaNacimiento }}
                        </div>
                        <div class="form-group">
                            <strong>Rol:</strong>
                            {{ $usuario->rol }}
                        </div>
                        <div class="form-group">
                            <strong>Dirección:</strong>
                            {{ $usuario->direccion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
