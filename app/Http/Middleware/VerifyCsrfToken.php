<?php namespace App\Http\Middleware;

use Closure;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as BaseVerifier;

class VerifyCsrfToken extends BaseVerifier {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		return parent::handle($request, $next);
	}

//	protected function tokensMatch($request)
//{
    // Don't validate CSRF when testing.
  //  if(env('APP_ENV') === 'testing') {
    //    return true;
    //}
 
    //return parent::tokensMatch($request);
//}

}
