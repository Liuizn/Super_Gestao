<?php

namespace App\Http\Middleware;

use Closure;

use App\LogAcesso;
use Facade\FlareClient\Http\Response;

class LogAcessoMiddleware
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
        $ip = $request->server->get('REMOTE_ADDR');
        LogAcesso::create(array('log'=> "camarada tentou passar aqui tlg?, ip do mano: {$ip}"));

        return Response('Vasco');
    }
}
