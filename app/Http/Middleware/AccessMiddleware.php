<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\AccessModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AccessMiddleware
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
	 * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
	 */
	public function handle(Request $request, Closure $next)
	{
		$menus = AccessModel::where('user_id', Auth::user()->id)
													->where(function($query){
														$query->where('p_list', true)
																	->orWhere('p_read', true)
																	->orWhere('p_write', true)
																	->orWhere('p_delete', true);
													})->pluck('menu_id');
		$menus = $menus->toArray();

		$request->request->add(['menus' => $menus]);

		return $next($request);
	}
}