@php
	$badgeColor = 'badge-primary';

	switch ($badgeColor) {
		case $data->leadType->type=='Hot':
			$badgeColor = 'badge-danger';
			break;
		case $data->leadType->type=='Warm':
			$badgeColor = 'badge-success';
			break;
		default:
			$badgeColor = 'badge-primary';
			break;
	}
	@endphp

<ul class="list-group mt-10">
	<li class="list-group-item">
		<div class="profile-brief">
			<table class="table table-striped table-hover col-md-6">
				<tr>
					<td class="col-md-3">Job title:</td>
					<td class="col-md-8"><span>{{ $data->job_title }}</span></td>
				</tr>
				<tr>
					<td class="col-md-3">Lead owner:</td>
					<td class="col-md-8"><span>{!! strtoupper($data->leadOwner->name) !!}</span></td>
				</tr>
				<tr>
					<td class="col-md-3">Lead date:</td>
					<td class="col-md-8"><span>{!! date('h:i A d/m/Y', strtotime($data->lead_date)) !!}</span></td>
				</tr>
				<tr>
					<td class="col-md-3">Lead source:</td>
					<td class="col-md-8"><span>{{ $data->lead_source }}</span></td>
				</tr>
				<tr>
					<td class="col-md-3">Lead type:</td>
					<td class="col-md-8"><span class="badge {{ $badgeColor }} font-size-12">{{ $data->leadType->type }}</span></td>
				</tr>
				<tr>
					<td class="col-md-3">Lead action:</td>
					<td class="col-md-8">{{ $data->actionRequired->type }}</td>
				</tr>
				<tr>
					<td class="col-md-3">Assigned to:</td>
					<td class="col-md-8">{{ $data->getAssignTo->name }}</td>
				</tr>
			</table>
		</div>
	</li>
</ul>