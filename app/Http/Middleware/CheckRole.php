<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Response;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $role = $request->input('role');//verifico un valor especifico
        if($role == 'admin'){
            
            return $next($request);
            
        }
        
        return Response::json('Error, usuario no valido.');
    }

    /* 
    
    public function handle(Request $request, Closure $next, $permiso)
    {
      $loggedUser = JWTAuth::toUser($request->input('token'));
      if( $loggedUser->tienePermiso($permiso) ){
        return $next($request);
      }else{
        $errorMessage = new stdClass();
        $errorMessage->middleware_validation=  array("El usuario ".$loggedUser->email." debe tener asignado el permiso ".$permiso." para poder realizar esta accion."); 
        $newEntity = new stdClass();
        $newEntity->ValidationErrors = $errorMessage; 
        return Response::json($newEntity);
      }
    }
    
    */
}
