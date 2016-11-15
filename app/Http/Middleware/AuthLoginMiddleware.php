<?php namespace App\Http\Middleware;

use App\ConstantValues\IApplicationConstant;
use Closure;

class AuthLoginMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		session_start();
		/*if(Session::has('user')){
			return $next($request);
        }else{
            return redirect('auth/login');
        }*/
		if(isset($_SESSION[IApplicationConstant::SESSION_USER])){
			return $next($request);
		}else{
			return redirect('auth/login');
		}


	}

}
