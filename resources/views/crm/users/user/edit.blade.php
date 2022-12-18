@extends('crm.layout')

@section('title', 'Edit User | CRM - PHPKolkata')

@section('content')

@php
if (isset($menus)){
	$menuImplode = '';

	foreach ($menus as $menu) {
		$menuImplode .= $menu->id . ',';
	}
	$menuImplode = rtrim($menuImplode, ',');
	$menuArray = explode(',', $menuImplode);
}
@endphp

<div class="page">
	<div class="page-header">
		<h1 class="page-title">Edit user</h1>
		<ol class="breadcrumb mt-10">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="{{ route('user.index') }}">User list</a></li>
			<li class="breadcrumb-item active">Edit user</li>
		</ol>
	</div>

	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-md-8">
				<!-- Panel Static Labels -->
				<div class="panel">
					<div class="panel-body container-fluid">

						<form method="post" action="{{ route('user.update', $data->id) }}" autocomplete="off" onsubmit="return validateFormUser()">
							@csrf

							<input type="hidden" name="oldEmail" value="{{ $data->email }}" />

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $data->name }}" autofocus />
									<span class="text-danger">@error('name'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="email">Email</label>
									<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ $data->email }}" />
									<span class="text-danger">@error('email'){{ $message }}@enderror</span>
								</div>
								
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="mobile">Mobile</label>
									<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="{{ $data->mobile }}" onkeyup="return numbersonly(this)" />
									<span class="text-danger">@error('mobile'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row">
								<div class="example table-responsive">
									<table class="table table-bordered table-striped table-hover">
										<thead>
											<tr>
												<th>Menu</th>
												<th>List</th>
												<th>View</th>
												<th>Add / Edit</th>
												<th>Delete</th>
											</tr>
										</thead>
										<tbody>
											@foreach ($menus as $menu)

											<tr>

												<td class="col-4">{{ $menu->menu }}</td>

												@php
												$list = App\Models\AccessModel::where('user_id', $data->id)->where('menu_id', $menu->id)->pluck('p_list');
												@endphp

												<td class="col-2">
													<div class="checkbox-custom checkbox-primary float-left">
														<input type="checkbox" name="access[]" 
																										id="list_{{ $menu->id }}" 
																										value="list_{{ $menu->id }}"
																										@if (isset($list[0]) && $list[0]==true)@checked(true)@endif /><label></label>
													</div>
												</td>

												@php
												$view = App\Models\AccessModel::where('user_id', $data->id)->where('menu_id', $menu->id)->pluck('p_read');
												@endphp

												<td class="col-2">
													<div class="checkbox-custom checkbox-primary float-left">
														<input type="checkbox" name="access[]" 
																										id="view_{{ $menu->id }}" 
																										@if (isset($view[0]) && $view[0]==true)@checked(true)@endif 
																										value="view_{{ $menu->id }}" /><label></label>
													</div>
												</td>

												@php
												$write = App\Models\AccessModel::where('user_id', $data->id)->where('menu_id', $menu->id)->pluck('p_write');
												@endphp

												<td class="col-2">
													<div class="checkbox-custom checkbox-primary float-left">
														<input type="checkbox" name="access[]" 
																										id="edit_{{ $menu->id }}" 
																										@if (isset($write[0]) && $write[0]==true)@checked(true)@endif 
																										value="edit_{{ $menu->id }}" /><label></label>
													</div>
												</td>

												@php
												$delete = App\Models\AccessModel::where('user_id', $data->id)->where('menu_id', $menu->id)->pluck('p_delete');
												@endphp

												<td class="col-2">
													<div class="checkbox-custom checkbox-primary float-left">
														<input type="checkbox" name="access[]" 
																										id="delete_{{ $menu->id }}" 
																										@if (isset($delete[0]) && $delete[0]==true)@checked(true)@endif 
																										value="delete_{{ $menu->id }}" /><label></label>
													</div>
												</td>
											</tr>

											@endforeach
										</tbody>
									</table>
								</div>
							</div>
							<div class="row mt-30">
								<button type="submit" class="btn btn-primary btn-sm mr-20">Save Details</button>
								<a href="{{ route('user.index') }}"><button type="button" class="btn btn-default btn-sm">Back to List</button></a>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection