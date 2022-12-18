<form action="{{ route('followup.store') }}" method="post" onsubmit="return validateFollowUpForm()">
{{-- <form action="{{ route('followup.store') }}" method="post" id="modalFollowUpForm"> --}}
@csrf

<input type="hidden" name="modalLeadId" value="{{ $data->id }}" />

<div class="modal fade" id="annotation" aria-hidden="true" aria-labelledby="annotation" role="dialog">
	<div class="modal-dialog modal-simple modal-top">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="exampleModalTitle">Follow-up annotation</h4>
			</div>
			<div class="modal-body">
				<div class="row mt-10">
					<div class="col-md-6">
						<label for="actionType">Follow-up action type <span class="text-danger">*</span></label>

						@php
						$followUpActionTypes = App\Models\TypeModel::select(['id', 'type'])->where('parent_id', 23)->where('active', true)->orderBy('type')->get();
						@endphp

						<select class="form-control" name="actionType" id="actionType">
							<option value="">-- Select --</option>
							@foreach ($followUpActionTypes as $followUpActionType)
							
							<option value="{{ $followUpActionType->id }}">{{ $followUpActionType->type }}</option>

							@endforeach
						</select>
						<span class="text-danger">@error('actionType'){{ $message }}@enderror</span>
					</div>
				</div>

				<div class="row mt-20">
					<div class="col-md-12">
						<label for="comments">Comments <span class="text-danger">*</span></label>
						<textarea class="form-control" name="comments" id="comments" cols="30" rows="5"></textarea>
						<span class="text-danger">@error('comments'){{ $message }}@enderror</span>
					</div>
				</div>

				<div class="row mt-20">
					<div class="col-md-6">
						<label for="leadStatus">Lead status <span class="text-danger">*</span></label>
						
						@php
						$allLeadStatus = App\Models\TypeModel::select(['id', 'type'])->where('parent_id', 19)->where('active', true)->get();
						@endphp

						<select class="form-control" name="leadStatus" id="leadStatus">
							<option value="">-- Select --</option>
							@foreach ($allLeadStatus as $leadStatus)
							
							<option value="{{ $leadStatus->id }}">{{ $leadStatus->type }}</option>

							@endforeach
						</select>
						<span class="text-danger">@error('leadStatus'){{ $message }}@enderror</span>
					</div>
					<div class="col-md-6">
						<label for="nextFollowUpDate">Next follow-up date</label>
						<input type="date" class="form-control" name="nextFollowUpDate" id="nextFollowUpDate" />
						<span class="text-danger">@error('nextFollowUpDate'){{ $message }}@enderror</span>
					</div>
				</div>
			</div>
			<div class="modal-footer mt-30">
				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary btn-sm">Save changes</button>
			</div>
		</div>
	</div>
</div>

</form>