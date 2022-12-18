<div class="modal fade" id="reason_{{ $deal->id }}" aria-hidden="true" aria-labelledby="reason_{{ $deal->id }}" role="dialog">
	<div class="modal-dialog modal-simple modal-top">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span>
				</button>
				<h4 class="modal-title" id="exampleModalTitle">End status : {{ $deal->lead_id }}</h4>
			</div>
			<div class="modal-body">
				<div class="row mt-20">
					<div class="col-md-12">
						<label>Status <span class="text-danger">*</span></label><br>

						<div class="form-check form-check-inline mr-10">
							<input class="form-check-input" type="radio" name="action" id="action_22" value="22" checked>
							<label class="form-check-label mt-3 ml-5 mr-10" for="action_22">Cancelled</label>

							<input class="form-check-input" type="radio" name="action" id="action_21" value="21">
							<label class="form-check-label mt-3 ml-5 mr-10" for="action_21">Further follow-up needed</label>
						</div>
						<span class="text-danger">@error('comments'){{ $message }}@enderror</span>
					</div>
				</div>

				<div class="row mt-20">
					<div class="col-md-12">
						<label for="comments">Comments</label>
						<textarea class="form-control" name="comments" id="comments" cols="30" rows="5"></textarea>
						<span class="text-danger">@error('comments'){{ $message }}@enderror</span>
					</div>
				</div>
			</div>
			<div class="modal-footer mt-30">
				<button type="button" class="btn btn-default btn-sm" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary btn-sm" onclick="approveDeal(0, {{ $deal->id }})">Save changes</button>
			</div>
		</div>
	</div>
</div>