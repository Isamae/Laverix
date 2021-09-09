<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;
use Auth;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];


     /*Redireccionamiento cuando se quiere acceder a una pagina y no esta logueado o el logueo sale mal*/
     protected function unauthenticated($request, AuthenticationException $exception)
     {
         if ($request->expectsJson()) {
             return response()->json(['error' => 'Unauthenticated.'], 401);
         }
         if ($request->is('login')) {
             
             return redirect()->guest('/');
         }
         if ($request->is('administrador') || $request->is('administrador/*')) {
             
             return redirect()->guest('/login/administrador');
         }
         return redirect()->guest('/');
     }
}
