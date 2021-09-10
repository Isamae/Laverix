<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\Usuario;

use Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | Este controlador maneja la autenticación de usuarios para la aplicación y
    | redirigiéndolos a su pantalla de inicio. El controlador usa un trait
    | para proporcionar convenientemente su funcionalidad a sus aplicaciones.
    |
    */
    protected $redirectTo = '/';


    use AuthenticatesUsers;

    /*Devuelve llamandas a los validadores*/
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:usuario')->except('logout');
    }

    /*Devuelve vista Login Administrador*/
    public function showAdminLoginForm()
    {
        return view('auth/login', ['tipoLogin' => 'administrador']);
    }

    /*Verificación de Login Admin*/
    public function adminLogin(Request $request)
    {
        $this->validate($request, [
            'email'   => 'required|email',
            'password' => 'required'
        ]);
        
        if (Auth::guard('usuario')->attempt(['email' => $request->email, 'password' => $request->password])) {
            
            $admin = Usuario::where('email', $request->email)->first();
            session()->put('tipoLogin', 'administrador');
            session()->put('admin', $admin);
            return redirect()->intended('/administrador');

        }
        return back()->withInput($request->only('email', 'remember'));
    }
}
