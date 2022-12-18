@extends('crm.layout')

@section('title', 'View Pending Lead | CRM - PHPKolkata')

@section('content')

<div class="page">

  <input type="hidden" id="leadId" value="{{ $data->id }}" />

	<div class="page-header">
		<h1 class="page-title">Details of Lead: {{ $data->lead_id }}</h1>
		<ol class="breadcrumb mt-10">
			<li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
			<li class="breadcrumb-item"><a href="{{ route('deal.pending.index') }}">Pending Lead list</a></li>
			<li class="breadcrumb-item active">Lead details</li>
		</ol>
		<div class="page-header-actions">
			<div class="btn-group btn-group-sm">
				<button type="button" class="btn btn-success btn-sm mr-10" onclick="approveDeal(1, {{ $data->id }})">Approve</button>
				<a href="javascript:void(0)" data-target="#reason" data-toggle="modal"><button type="button" class="btn btn-danger btn-sm mr-10">Disapprove</button></a>
				<a href="{{ route('deal.pending.index') }}"><button type="button" class="btn btn-default btn-sm">Back to list</button></a>
			</div>
		</div>
	</div>

	@include('crm.deals.pending.reason-modal')

	<div class="page-content container-fluid">
		<div class="row">
			
			@include('crm.deals.pending._company')

			<div class="col-lg-9">
				<!-- Panel -->
				<div class="panel">
					<div class="panel-body nav-tabs-animate nav-tabs-horizontal" data-plugin="tabs">
						<ul class="nav nav-tabs nav-tabs-line" role="tablist">
							<li class="nav-item" role="presentation"><a class="active nav-link" data-toggle="tab" href="#activities"
									aria-controls="activities" role="tab">Updates</a></li>
							<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#profile" aria-controls="profile"
									role="tab">Lead Info</a></li>
							<li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#messages" aria-controls="messages"
									role="tab">Notes</a></li>
							<li class="nav-item dropdown">
								<a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#" aria-expanded="false">Menu </a>
								<div class="dropdown-menu" role="menu">
									<a class="active dropdown-item" data-toggle="tab" href="#activities" aria-controls="activities"
										role="tab">Updates <span class="badge badge-pill badge-danger">5</span></a>
									<a class="dropdown-item" data-toggle="tab" href="#profile" aria-controls="profile"
										role="tab">Lead Info</a>
									<a class="dropdown-item" data-toggle="tab" href="#messages" aria-controls="messages"
										role="tab">Notes</a>
								</div>
							</li>
						</ul>

						<div class="tab-content">
							<div class="tab-pane active animation-slide-left" id="activities" role="tabpanel">
								<ul class="list-group">

									@php
									$comments = App\Models\LeadFollowupModel::where('active', true)
																														->where('lead_id', $data->id)
																														->orderBy('created_at', 'desc')->get();

									$commentCount = App\Models\LeadFollowupModel::where('active', true)->where('lead_id', $data->id)->count();
									@endphp

									@if ($commentCount > 0)
									
									@foreach ($comments as $comment)

									<li class="list-group-item">
										<div class="media border-bottom">
											<div class="media-body">
												<h5 class="mt-0 mb-5">{{ $comment->followupBy->name }}
													<small class="ml-5">{!! date('h:i A d/m/y', strtotime($comment->action_date)) !!}</small>
												</h5>
												<small>Follow-up by : {{ $comment->followupDoneBy->type }}</small>
												<div class="profile-brief mt-10">
													<div class="media">
														<div class="media-body">
															<h4 class="mt-0 mb-10">{{ $comment->currentStatus->type }}</h4>
															<p>{!! nl2br($comment->annotation) !!}</p>
														</div>
													</div>
												</div>
											</div>
										</div>
									</li>

									@endforeach

									@else
									
									<li class="list-group-item">
										<div class="media">
											<div class="media-body">
												<p class="mt-0 mb-5">No follow-ups found</p>
											</div>
										</div>
									</li>

									@endif
									
								</ul>
							</div>

							<div class="tab-pane animation-slide-left" id="profile" role="tabpanel">

								@include('crm.deals.pending._other-info')

							</div>

							<div class="tab-pane animation-slide-left" id="messages" role="tabpanel">
								
								@include('crm.deals.pending._notes')

							</div>
						</div>
					</div>
				</div>
				<!-- End Panel -->
			</div>
		</div>
	</div>
</div>

@endsection