<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\MenuModel;
use App\Models\AccessModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		// $users = User::where('role', 2)->where('active', true)->orderBy('name')->paginate(10);

		// Line commented, line added

		$users = User::where('role', 2)->where('active', true)->orderBy('name')->paginate(10);

		return view('crm.users.admin.index', compact('users'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function create()
	{
		$menus = MenuModel::whereNotNull('route')->where('active', true)->orderBy('menu')->get();

		return view('crm.users.admin.add', compact('menus'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @return \Illuminate\Http\Response
	 */
	public function store(Request $request)
	{
		$request->validate([
			'name' => 'required|max:255|regex:/^[a-zA-Z ]+$/u',
			'email' => 'required|max:255|unique:users,email',
			'mobile' => 'nullable|numeric',
			'access' => 'required',
		],[
			'name.required' => 'Name is required',
			'name.max' => 'Max 255 characters are allowed',
			'name.regex' => 'Alphabets only',
			'email.required' => 'Email is required',
			'email.max' => 'Max 255 characters are allowed',
			'email.unique' => 'Email is already taken',
			'mobile.numeric' => 'Mobile no. must be numeric',
			'access.required' => 'Select at least one action',
		]);

		$data = new User;
		$data->name = $request->name;
		$data->email = $request->email;
		$data->password = Hash::make('welcome123');
		$data->mobile = $request->mobile;
		$data->role = 2;
		$data->save();
		$userId = $data->id;
		
		$allMenu = MenuModel::whereNotNull('route')->where('active', true)->get();
		foreach ($allMenu as $menu) {
			$menuData = new AccessModel;
			$menuData->user_id = $userId;
			$menuData->menu_id = $menu->id;
			$menuData->save();
			$menuId = $menuData->id;

			$list = in_array('list_'.$menu->id, $request->access) ? 1 : 0;
			$view = in_array('view_'.$menu->id, $request->access) ? 1 : 0;
			$edit = in_array('edit_'.$menu->id, $request->access) ? 1 : 0;
			$delete = in_array('delete_'.$menu->id, $request->access) ? 1 : 0;

			AccessModel::where('user_id', $userId)->where('menu_id', $menu->id)->update([
				'p_list' => $list,
				'p_read' => $view,
				'p_write' => $edit,
				'p_delete' => $delete,
				'updated_at' => now(),
			]);
		}

		$notification = [
			'message' => 'User added',
			'alert-type' => 'success',
		];

		return redirect()->back()->with($notification);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function edit($id)
	{
		$data = User::findOrFail($id);
		$menus = MenuModel::whereNotNull('route')->orderBy('menu')->get();

		return view('crm.users.admin.edit', compact('data', 'menus'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function update(Request $request, $id)
	{
		$request->validate([
			'name' => 'required|max:255|regex:/^[a-zA-Z ]+$/u',
			'email' => 'required|max:255',
			'mobile' => 'nullable|numeric',
			'access' => 'required',
		],[
			'name.required' => 'Name is required',
			'name.max' => 'Max 255 characters are allowed',
			'name.regex' => 'Alphabets only',
			'email.required' => 'Email is required',
			'email.max' => 'Max 255 characters are allowed',
			'mobile.numeric' => 'Mobile no. must be numeric',
			'access.required' => 'Select at least one action',
		]);

		if ($request->oldEmail != $request->email){
			$request->validate([
				'email' => 'unique:users,email',
			],[
				'email.unique' => 'Email is already taken'
			]);
		}

		$data = User::findOrFail($id);
		$data->name = $request->name;
		$data->email = $request->email;
		$data->mobile = $request->mobile;
		$data->save();

		$allMenu = MenuModel::whereNotNull('route')->where('active', true)->get();
		foreach ($allMenu as $menu) {

			$count = AccessModel::where('user_id', $id)->where('menu_id', $menu->id)->count();
			if ($count == 0){
				$menuData = new AccessModel;
				$menuData->user_id = $id;
				$menuData->menu_id = $menu->id;
				$menuData->save();
			}

			$list = in_array('list_'.$menu->id, $request->access) ? 1 : 0;
			$view = in_array('view_'.$menu->id, $request->access) ? 1 : 0;
			$edit = in_array('edit_'.$menu->id, $request->access) ? 1 : 0;
			$delete = in_array('delete_'.$menu->id, $request->access) ? 1 : 0;

			AccessModel::where('user_id', $id)->where('menu_id', $menu->id)->update([
				'p_list' => $list,
				'p_read' => $view,
				'p_write' => $edit,
				'p_delete' => $delete,
			]);
		}
		$notification = [
			'message' => 'Admin details updated',
			'alert-type' => 'warning',
		];

		return redirect()->route('admin.index')->with($notification);
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function destroy($id)
	{
		$data = User::findOrFail($id);
		$data->active = false;
		$data->updated_at = now();
		$data->save();
	}
}
