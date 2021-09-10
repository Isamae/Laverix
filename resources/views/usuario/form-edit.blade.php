<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $usuario->email }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

            <div class="col-md-6">
                <input id="nombre" type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" value="{{ $usuario->nombre }}" required autocomplete="nombre" autofocus>

                @error('nombre')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>

        <div class="form-group row">
            <label for="apellido" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

            <div class="col-md-6">
                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ $usuario->apellido }}" required autocomplete="apellido" autofocus>

                @error('apellido')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>
        
        <div class="form-group row">
            <label for="telefono" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>

            <div class="col-md-6">
                <input id="telefono" type="tel" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ $usuario->telefono }}" required autocomplete="telefono">

                @error('telefono')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="fechaNacimiento" class="col-md-4 col-form-label text-md-right">{{ __('Fecha Nacimiento') }}</label>

            <div class="col-md-6">
                <input id="fechaNacimiento" type="date" class="datepicker form-control @error('fechaNacimiento') is-invalid @enderror" name="fechaNacimiento"  required value="{{ $usuario->fechaNacimiento }}">

                @error('fechaNacimiento')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="direccion" class="col-md-4 col-form-label text-md-right">{{ __('Dirección') }}</label>

            <div class="col-md-6">
                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ $usuario->direccion }}" required>

                @error('direccion')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">

            <label for="rol" class="col-md-4 col-form-label text-md-right">Rol</label>
            <!-- En caso de necesitar un comportamiento determinado se usa la liberia ajax(Jquery)  para establecer comportamiento Asincronico-->
            <div class="col-md-6">
                <select name="rol" id="rol" class="form-control" required value="{{ $usuario->rol }}">
                    <option value="">Seleccion Rol</option>
                    <option value="Administrador">Administrador</option>
                    <option value="Usuario">Usuario</option>
                    <option value="Invitado">Invitado</option>
                </select>
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ $usuario->password }}" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  required autocomplete="new-password" >
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Register') }}
                </button>
            </div>
        </div>

    </div>
</div>

