<?php

namespace App\Http\Middleware;

use Closure;

class CheckLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(\Session::get('TokenLoggin') != 'trues'){
         
            return redirect()->guest('/LoginUser')->withErrors(['InputUsuario' => 'Debe Iniciar Sesión para Ingresar a Esta Parte del Sistema']);

        }
        else{
            return $next($request);
        }
        
        
    }
}
