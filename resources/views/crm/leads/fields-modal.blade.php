<form method="post" action="{{ route('lead.export') }}">
@csrf

<input type="hidden" name="leadType" value="{{ request()->query('leadType') }}">
<input type="hidden" name="start_date" value="{{ request()->query('start_date') }}">
<input type="hidden" name="end_date" value="{{ request()->query('end_date') }}">
<input type="hidden" name="leadId" value="{{ request()->query('leadId') }}">
<input type="hidden" name="assignTo" value="{{ request()->query('assignTo') }}">
<input type="hidden" name="businessName" value="{{ request()->query('businessName') }}">
<input type="hidden" name="actionReqd" value="{{ request()->query('actionReqd') }}">

<div class="modal fade" id="chooseFields" aria-hidden="true" aria-labelledby="chooseFields" tabindex="-1" role="dialog">
	<div class="modal-dialog modal-simple modal-top">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="exampleModalTitle">Select fields that you want to export</h4>
			</div>
			<div class="modal-body">
					@php
					$fields = App\Models\TableFieldsModel::select(['field', 'field_label'])->where('table_name', 'lead_master')->where('active', true)->get();
					@endphp

					@foreach ($fields as $field)
					
					<div class="col-md-6">
						<div class="checkbox-custom checkbox-primary">
							<input type="checkbox" name="fields[]" id="{{ $field->field }}" value="{{ $field->field.'|'.$field->field_label }}" /> 
							<label for="{{ $field->field }}">{{ $field->field_label }}</label>
						</div>
					</div>

					@endforeach
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
				<button type="submit" class="btn btn-primary btn-sm">Export Data</button>
			</div>
		</div>
	</div>
</div>

</form>