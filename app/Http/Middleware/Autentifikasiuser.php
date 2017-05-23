<?php namespace App\Http\Middleware;

use Closure;

class Autentifikasiuser
{
	private $auth;

	public function __construct()
	{
		$this->auth = app('auth');
	}

	public function handle($request, Closure $next)
	{
		if($this->auth->check())
		{
			return $next($request);
		}
		return redirect('loginadmin')->withErrors('silahkan login terlebih dahulu');
	}
	
}