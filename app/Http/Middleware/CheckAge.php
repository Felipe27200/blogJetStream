<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

// Clase del Middleware creado
class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

    // Este método se encarga de filtrar las solicitudes HTTP
    public function handle(Request $request, Closure $next)
    {
        /*
            La variable age de request se envía mediante la url
            de esta forma: .../prueba?age=valor

            Así el request ya tiene la propiedad y la puede usar para establecer la validación.
        */
        
        if ($request->age >= 18)
        {
            /* Esto permite que la solicitud HTTP continúe sin ninguna 
            validación */
            return $next($request);
        }
        else
            return redirect('no-autorizado');
    }
}
