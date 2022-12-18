@extends('crm.layout')

@section('title', 'Add New Lead | CRM - PHPKolkata')

@section('content')

<div class="page">
	<div class="page-header">
		<h1 class="page-title">New lead</h1>
		<ol class="breadcrumb mt-10">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="{{ route('lead.index') }}">Lead list</a></li>
			<li class="breadcrumb-item active">New lead</li>
		</ol>
	</div>

	<div class="page-content container-fluid">
		<div class="row">
			<div class="col-md-8">
				<!-- Panel Static Labels -->
				<div class="panel">
					<div class="panel-body container-fluid">

						<form method="post" action="{{ route('lead.store') }}" autocomplete="off" onsubmit="return validateLeadForm()">
							@csrf

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="business_name">Business name <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="business_name" name="business_name" placeholder="Business Name" value="{{ old('business_name') }}" autofocus />
									<span class="text-danger">@error('business_name'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="location">Location <span class="text-danger">*</span></label>
									<textarea class="form-control" name="location" id="location" cols="30" rows="3" placeholder="Location">{{ old('location') }}</textarea>
									<span class="text-danger">@error('location'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="contact_person">Contact person <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="contact_person" name="contact_person" placeholder="Contact person" value="{{ old('contact_person') }}" onkeyup="return letterswithspace(this)" />
									<span class="text-danger">@error('contact_person'){{ $message }}@enderror</span>
								</div>
								
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="job_title">Job title <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="job_title" name="job_title" placeholder="Job title" value="{{ old('job_title') }}" />
									<span class="text-danger">@error('job_title'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="contact_no">Contact no. <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="contact_no" name="contact_no" placeholder="Contact person" value="{{ old('contact_no') }}" onkeyup="return numbersonly(this), fillWA()" />
									<span class="text-danger">@error('contact_no'){{ $message }}@enderror</span>
								</div>
								
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="whatsapp_no">WhatsApp no. <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="whatsapp_no" name="whatsapp_no" placeholder="WhatsApp no." value="{{ old('whatsapp_no') }}" onkeyup="return numbersonly(this)" />
									<span class="text-danger">@error('whatsapp_no'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="email">Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="email" name="email" placeholder="Email" value="{{ old('email') }}" />
									<span class="text-danger">@error('email'){{ $message }}@enderror</span>
								</div>
								
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="lead_source">Lead source <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="lead_source" name="lead_source" placeholder="Lead source" value="{{ old('lead_source') }}" />
									<span class="text-danger">@error('lead_source'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="assign_to">Assign to</label>
									<select name="assign_to" id="assign_to" class="form-control" data-plugin="select2" data-placeholder="Select user" data-allow-clear="true">
										<option value=""></option>
										@foreach ($users as $user)
										<option value="{{ $user->id }}">{{ $user->name }}</option>
										@endforeach
									</select>
									<span class="text-danger">@error('assign_to'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="notes">Notes</label>
									<textarea class="form-control" name="notes" id="notes" cols="30" rows="3" placeholder="Notes">{{ old('notes') }}</textarea>
									<span class="text-danger">@error('notes'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row">
								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="lead_type">Lead type <span class="text-danger">*</span></label><br>

									@foreach ($leadTypes as $leadType)
									
									<div class="form-check form-check-inline mr-10">
										<input class="form-check-input" type="radio" name="lead_type" id="lead_type_{{ $leadType->id }}" value="{{ $leadType->id }}">
											<label class="form-check-label mt-3 ml-5 mr-10" for="lead_type_{{ $leadType->id }}">{{ $leadType->type }}</label>
									</div>

									@endforeach
									
									<span class="text-danger">@error('lead_type'){{ $message }}@enderror</span>
								</div>

								<div class="form-group form-material col-md-6" data-plugin="formMaterial">
									<label class="form-control-label" for="action">Action <span class="text-danger">*</span></label><br>

									@foreach ($actions as $action)
									
									<div class="form-check form-check-inline mr-10">
										<input class="form-check-input" type="radio" name="action" id="action_{{ $action->id }}" value="{{ $action->id }}">
											<label class="form-check-label mt-3 ml-5 mr-10" for="action_{{ $action->id }}">{{ $action->type }}</label>
									</div>

									@endforeach
									
									<span class="text-danger">@error('action'){{ $message }}@enderror</span>
								</div>
							</div>

							<div class="row mt-30">
								<button type="submit" class="btn btn-primary btn-sm mr-20">Add Lead</button>
								<a href="{{ route('lead.index') }}"><button type="button" class="btn btn-default btn-sm">Back to List</button></a>
							</div>

						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection