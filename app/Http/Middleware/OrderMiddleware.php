<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Laracasts\Flash\Flash;

class OrderMiddleware {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		if (Session::has('dishIds')) {
			if (count(Session::get('dishIds')) > 0) {
				return $next($request);
			}
		}

		Flash::error('Dear customer, please order on the menu here first.');
		return redirect('menu');
	}

}
