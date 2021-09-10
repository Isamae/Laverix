@extends('layouts.app')

@section('template_title')
    Update Usuario
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                @includeif('partials.errors')

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title">Actualizar Usuario</span>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('usuario/update')}}"  role="form" enctype="multipart/form-data" method="GET">
                            @csrf
                            @include('usuario.form-edit')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
