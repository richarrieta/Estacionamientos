<?php namespace Estacionamiento\Http\Middleware;

use Closure;

class DbTransaction {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		DB::beginTransaction();
		$next($request);
		DB::commit();
		return;
	}

}
