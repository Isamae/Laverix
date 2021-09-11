@extends('layouts.app')

@include('componentes.nav')

@section('template_title')
    Usuarios
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Usuario') }}
                            </span>

                             <div class="float-right">
                                
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <form class="form-inline" method="GET" action="{{ url('usuario/short-usuarios') }}">
                        <div class="form-group mb-2">
                            <div class="form-group">
                                <label for="filter" class=" ">Filtro</label>
                                <select name="filter" id="filter" class="  form-control" required>
                                    <option value="">Select filtro</option>
                                    <option value="nombre">Nombre</option>
                                    <option value="email">Email</option>
                                    <option value="celular">Celular</option>
                                    <option value="cedula">Cedula</option>
                                </select>
                                <input type="text" class="form-control " id="filter_value" name="filter_value" placeholder="Valor" value="" required>
                            </div>
                            <div class="form-group">
                                <label for="filter_cantidad" class=" ">Numero Paginas</label>
                                <select name="filter_cantidad" id="filter_cantidad" class="form-control " required>
                                    <option value="">Numero Paginas</option>
                                    <option value=2>2</option>
                                    <option value=10>10</option>
                                    <option value=20>20</option>
                                    <option value=50>50</option>
                                </select>
                            </div>

                        </div>

                        <button type="submit" class="btn btn-primary mb-2 ">Filter</button>
                    </form>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
										<th>Nombre</th>
										<th>Apellido</th>
										<th>Teléfono </th>
										<th>Fecha Nacimiento</th>
                                        <th>Rol</th>
                                        <th>Dirección</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($usuarios as $usuario)
                                        <tr>
                                            <td>{{ ++$i }}</td>
											<td>{{ $usuario->nombre }}</td>
                                            <td>{{ $usuario->apellido }}</td>
											<td>{{ $usuario->telefono }}</td>
											<td>{{ $usuario->fechaNacimiento}}</td>
                                            <td>{{ $usuario->rol}}</td>
                                            <td>{{ $usuario->direccion}}</td>

                                            <td>
                                                <form action="{{ url('usuario/destroy',$usuario->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ url('usuario/show',$usuario->id) }}"><i class="fa fa-fw fa-eye"></i> Mostrar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ url('usuario/edit',$usuario->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $usuarios->links() !!}
            </div>
        </div>
    </div>
@endsection
