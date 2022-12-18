<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		return view('crm.dashboard');
	}

	public function logout(Request $request){
		Auth::guard('web')->logout();
		$request->session()->invalidate();
		$request->session()->regenerateToken();

		$notification = [
			'message' => 'User logged out successfully',
			'alert-type' => 'success',
		];

		return redirect('/login')->with($notification);
	}
}
