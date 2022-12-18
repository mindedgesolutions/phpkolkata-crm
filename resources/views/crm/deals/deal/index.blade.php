@extends('crm.layout')

@section('title', 'List of Deals | CRM - PHPKolkata')

@section('content')

<div class="page">
	<div class="page-header">
		<h1 class="page-title">List of Deals</h1>
		<ol class="breadcrumb mt-10">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li class="breadcrumb-item active">List of Deals</li>
		</ol>
		<div class="page-header-actions">
			<div class="btn-group btn-group-sm">
				<a href="{{ route('deal.active.create') }}"><button type="button" class="btn btn-primary btn-sm">Add new deal</button></a>
			</div>
		</div>
	</div>

	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="tab-content">

					<form method="get">

					{{-- <div class="card-block bg-white table-responsive">
						<div class="row">
							<div class="form-group form-material col-md-3" data-plugin="formMaterial">
								<label class="form-control-label">Lead type</label>
								<select name="leadType" id="leadType" class="form-control" data-plugin="select2" data-placeholder="Select lead type" data-allow-clear="true">
									<option value=""></option>
									@foreach ($leadTypes as $leadType)
									<option value="{{ $leadType->id }}" @if (request()->query('leadType')==$leadType->id)@selected(true)@endif>{{ $leadType->type }}</option>
									@endforeach
								</select>
							</div>
							
							<div class="form-group form-material col-md-3" data-plugin="formMaterial">
								<label class="form-control-label" for="start_date">Lead from date</label>
								<input type="date" class="form-control" id="start_date" name="start_date" placeholder="Select lead start date" value="{{ request()->query('start_date') }}" />
							</div>
							
							<div class="form-group form-material col-md-3" data-plugin="formMaterial">
								<label class="form-control-label" for="end_date">Lead to date</label>
								<input type="date" class="form-control" id="end_date" name="end_date" placeholder="Select lead end date" value="{{ request()->query('end_date') }}" />
							</div>

							<div class="form-group form-material col-md-3" data-plugin="formMaterial">
								<label class="form-control-label" for="leadId">Lead ID (complete / partial)</label>
								<input type="text" class="form-control" id="leadId" name="leadId" placeholder="Lead ID" value="{{ request()->query('leadId') }}" />
							</div>
						</div>

						<div class="row">
							<div class="form-group form-material col-md-3" data-plugin="formMaterial">
								<label class="form-control-label">Assign to</label>
								<select name="assignTo" id="assignTo" class="form-control" data-plugin="select2" data-placeholder="Select assign to" data-allow-clear="true">
									<option value=""></option>
									@foreach ($users as $user)
									<option value="{{ $user->id }}" @if (request()->query('assignTo')==$user->id)@selected(true)@endif>{{ $user->name }}</option>
									@endforeach
								</select>
							</div>
							
							<div class="form-group form-material col-md-3" data-plugin="formMaterial">
								<label class="form-control-label" for="businessName">Business name (complete / partial)</label>
								<input type="text" class="form-control" id="businessName" name="businessName" placeholder="Business name" value="{{ request()->query('businessName') }}" />
							</div>

							<div class="form-group form-material col-md-3" data-plugin="formMaterial">
								<label class="form-control-label" for="lead_source">Action reqd.</label>
								<select name="actionReqd" id="actionReqd" class="form-control" data-plugin="select2" data-placeholder="Select action required" data-allow-clear="true">
									<option value=""></option>
									@foreach ($actions as $action)
									<option value="{{ $action->id }}" @if (request()->query('actionReqd')==$action->id)@selected(true)@endif>{{ $action->type }}</option>
									@endforeach
								</select>
							</div>
						</div>

						<div class="col-md-12 text-center mt-20">
							<button type="submit" class="btn btn-primary btn-sm mr-20">Filter Data</button>
							
							<a href="javascript:void(0)" data-target="#chooseFields" data-toggle="modal"><button type="button" class="btn btn-success btn-sm mr-20">Export Data</button></a>

							<a href="{{ route('lead.index') }}"><button type="button" class="btn btn-default btn-sm">Clear Filter</button></a>
						</div>
					</div> --}}

					</form>
				</div>
			</div>
		</div>

		@include('crm.leads.fields-modal')
		
		<div class="row">
			<div class="col-lg-12">
				<div class="card card-shadow table-row">
					<div class="card-block bg-white table-responsive">
						<table class="table table-striped table-hover font-size-12">
							<thead>
								<tr>
									<th>#</th>
									<th>Deal ID</th>
									<th>Business Name</th>
									<th>Contact</th>
									<th>Action</th>
									<th>Stage</th>
								</tr>
							</thead>
							<tbody>
								@if ($deals->total() > 0)

								@foreach ($deals as $id => $deal)

								<tr>
                  <td>{{ $deals->firstItem() + $id }}.</td>
                  <td>{{ $deal->deal_id }}</td>
									<td>{{ $deal->business_name }}</td>
									<td>{{ $deal->contact_person }} (<span class="text-success"><i class="fab fa-whatsapp"></i></span>: {{ $deal->whatsapp_no }})</td>
									<td>
										<a href=""><button type="button" class="btn btn-outline btn-primary btn-xs mr-5" title="View"><i class="fas fa-folder"></i></button></a>

										<a href=""><button type="button" class="btn btn-outline btn-warning btn-xs mr-5" title="Edit"><i class="fas fa-pen"></i></button></a>
										
										<button type="button" class="btn btn-outline btn-danger btn-xs" title="Delete"><i class="fas fa-trash"></i></button>
									</td>
									<td class="col-md-2">
										<div class="contextual-progress">
											<div class="clearfix">
												<div class="progress-label">50</div>
											</div>
											<div class="progress" data-goal="60" data-plugin="progress">
												<div class="progress-bar progress-bar-success" aria-valuemin="5" aria-valuemax="100" aria-valuenow="10" role="progressbar">
												</div>
											</div>
										</div>
									</td>
								</tr>

								@endforeach
								
								@else
								
								<tr>
									<td colspan="11" class="text-center">No record found</td>
								</tr>

								@endif
								
							</tbody>
						</table>

						{{ $deals->withQueryString()->links() }}

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection