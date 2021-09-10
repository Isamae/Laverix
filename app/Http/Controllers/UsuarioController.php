<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    /**
     * Muestra una lista de recursos de usuario
     */
    public function index()
    {
        $usuarios = Usuario::paginate(10);

        return view('usuario/show-usuarios', compact('usuarios'))->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());
    }

    /**
     * Muestra el formulario para crear un registro.
     */
    public function create()
    {
        $usuario = new Usuario();
        return view('usuario.create', compact('usuario'));
    }

    /**
     * Guarda un registro creado en vista y lo almacena en la BD
     */
    public function store(Request $request)
    {
        request()->validate([
            'email' => 'required|string|email|max:255|unique:usuarios',
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'password' => 'required|string|min:8|confirmed',
            'telefono' => 'required|string|min:10|max:10',
            'fechaNacimiento' => 'required|date',
            'direccion' => 'required|string|max:100',
            'rol' => 'required|string',
        ]);

        $usuario = Usuario::create($request->all());

        return redirect()->intended('/administrador')->with('success', 'Usuario created successfully.');
    }

     /** 
     * Filtrado de datos
     */
    public function indexFiltering(Request $request)
    {
        $filter = $request->filter;
        $value = $request->value;
        $numero_paginas = $request->filter_cantidad;

        if (!empty($filter)) {
            $usuarios = Usuario::sortable()
                ->where("usuario.$filter", 'like', '%'.$value.'%')
                ->paginate($numero_paginas);
            return view('usuario/show-usuarios', compact('usuarios'))->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());
        } else {
            $usuarios = Usuario::sortable()
                ->paginate(10);

            return view('usuario/show-usuarios', compact('usuarios'))->with('i', (request()->input('page', 1) - 1) * $usuarios->perPage());
        }
    }


    /**
     * Mustra un recuros especifico
     * 
     */
    public function show($id)
    {
        $usuario = Usuario::find($id);

        return view('usuario/show', compact('usuario'));
    }

    /**
     * Muestra el formulario para editar un archivo especifio
     */
    public function edit($id)
    {
        $usuario = Usuario::find($id);

        return view('usuario/edit', compact('usuario'));
    }

    /**
     * Actualiza un recurso especifico en la base de datos
     */
    public function update(Request $request, Usuario $usuario)
    {
        request()->validate([
            'nombre' => 'required|string|max:100',
            'apellido' => 'required|string|max:100',
            'direccion' => 'required|string',
            'rol' => 'required|string',
            'password' => 'required|string|min:8',
            'telefono' => 'required|string|min:10|max:10',
            'fechaNacimiento' => 'required|date',
        ]);

        $usuario->update($request->all());

        return redirect()->intended('/administrador')->with('success', 'Usuario actualizado successfully.');
    }

    /**
     * Elimina un recurso especifico
     */
    public function destroy($id)
    {
        $usuario = Usuario::find($id)->delete();

        $usuarios = Usuario::paginate();

        return redirect()->intended('/administrador')->with('success', 'Usuario eliminado successfully.');
    }
}
