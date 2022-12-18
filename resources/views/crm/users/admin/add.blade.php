@extends('crm.layout')

@section('title', 'Add Admin | CRM - PHPKolkata')

@section('content')

<div class="page">
	<div class="page-header">
		<h1 class="page-title">Add admin</h1>
		<ol class="breadcrumb mt-10">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Admin list</a></li>
			<li class="breadcrumb-item active">Add admin</li>
		</ol>
	</div>

	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-md-8">
				<!-- Panel Static Labels -->
				<div class="panel">
					<div class="panel-body container-fluid">

						<form method="post" action="{{ route('admin.store') }}" autocomplete="off" onsubmit="return validateFormUser()">
							@csrf

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="name">Name</label>
									<input type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ old('name') }}" autofocus />
									<span class="text-danger">@error('name'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="email">Email</label>
									<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" />
									<span class="text-danger">@error('email'){{ $message }}@enderror</span>
								</div>
								
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="mobile">Mobile</label>
									<input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile" value="{{ old('mobile') }}" onkeyup="return numbersonly(this)" />
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

												<td class="col-2">
													<div class="checkbox-custom checkbox-primary float-left">
														<input type="checkbox" name="access[]" 
																										id="list_{{ $menu->id }}" 
																										value="list_{{ $menu->id }}" checked /><label></label>
													</div>
												</td>

												<td class="col-2">
													<div class="checkbox-custom checkbox-primary float-left">
														<input type="checkbox" name="access[]" 
																										id="view_{{ $menu->id }}" 
																										value="view_{{ $menu->id }}" checked /><label></label>
													</div>
												</td>

												<td class="col-2">
													<div class="checkbox-custom checkbox-primary float-left">
														<input type="checkbox" name="access[]" 
																										id="edit_{{ $menu->id }}" 
																										value="edit_{{ $menu->id }}" checked /><label></label>
													</div>
												</td>

												<td class="col-2">
													<div class="checkbox-custom checkbox-primary float-left">
														<input type="checkbox" name="access[]" 
																										id="delete_{{ $menu->id }}" 
																										value="delete_{{ $menu->id }}" checked /><label></label>
													</div>
												</td>
											</tr>

											@endforeach
										</tbody>
									</table>

									<span class="text-danger">@error('access'){{ $message }}@enderror</span>
								</div>
							</div>
							<div class="row mt-30">
								<button type="submit" class="btn btn-primary btn-sm mr-20">Create User</button>
								<a href="{{ route('admin.index') }}"><button type="button" class="btn btn-default btn-sm">Back to List</button></a>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection