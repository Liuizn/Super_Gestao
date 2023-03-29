<?php

namespace App\Http\Middleware;

use Closure;

class AutenticacaoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $autenticacao)
    {
        echo $autenticacao;

        if (false)
        {
            return $next($request);
        }
        else
        {
            return Response('precisa de autenticação pra acessar aqui pai');
            # code...
        }
        
        
    }
}
