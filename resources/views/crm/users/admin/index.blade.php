@extends('crm.layout')

@section('title', 'List of Admins | CRM - PHPKolkata')

@section('content')

<div class="page">
	<div class="page-header">
		<h1 class="page-title">List of Admins</h1>
		<ol class="breadcrumb mt-10 mb-10">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li class="breadcrumb-item active">List of Admins</li>
		</ol>
		<span class="text-danger font-size-12">* Default password is welcome123</span>
		<div class="page-header-actions">
			<div class="btn-group btn-group-sm">
				<a href="{{ route('admin.create') }}"><button type="button" class="btn btn-primary btn-sm">Add new</button></a>
			</div>
		</div>
	</div>

	{{-- @php
	$allMenu = App\Models\AccessModel::where('user_id', Auth::user()->id)
													->where('user_id', Auth::user()->id)
													->where(function($query){
														$query->where('p_list', true)
																	->orWhere('p_read', true)
																	->orWhere('p_write', true)
																	->orWhere('p_delete', true);
													})->pluck('menu_id');
	$menuArray = $allMenu->toArray();
	dump($menuArray);
	@endphp --}}

	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="card card-shadow table-row">
					<div class="card-block bg-white table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Name</th>
									<th>Email</th>
									<th>Mobile</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								@if ($users->total() > 0)
								
								@foreach ($users as $id => $user)

								@php
								$mobile = $user->mobile ? $user->mobile : '---';
								@endphp

								<tr>
									<td>{{ $users->firstItem() + $id }}.</td>
									<td>{{ $user->name }}</td>
									<td>{{ $user->email }}</td>
									<td>{{ $mobile }}</td>
									<td>
										<a href="javascript:void(0)" data-target="#viewUser_{{ $user->id }}" data-toggle="modal"><button type="button" class="btn btn-outline btn-primary btn-xs mr-5" title="View"><i class="icon wb-folder" aria-hidden="true"></i></button></a>

										<a href="{{ route('admin.edit', $user->id) }}"><button type="button" class="btn btn-outline btn-warning btn-xs mr-5" title="Edit"><i class="icon wb-pencil" aria-hidden="true"></i></button></a>
										
										<button type="button" class="btn btn-outline btn-danger btn-xs" title="Delete" onclick="deleteUser({{ $user->id }})"><i class="icon wb-trash" aria-hidden="true"></i></button>
									</td>
								</tr>

								@include('crm.users.user.view-modal')

								@endforeach

								@else
								
								<tr>
									<td colspan="5" class="text-center">No record found</td>
								</tr>

								@endif
								
							</tbody>
						</table>

						{{ $users->withQueryString()->links() }}
					</div>
				</div>
			</div>
			
		</div>
	</div>
</div>

@endsection