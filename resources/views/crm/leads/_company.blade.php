<div class="col-md-3">
	<div class="card card-shadow text-center">
		<div class="card-block">
			<h4 class="profile-user">{{ $data->business_name }}</h4>
			<p class="profile-job">
				{{ $data->contact_person }} <br>

				<span class="mr-5"><i class="fas fa-mobile-alt"></i> {{ $data->contact_no }}</span> | <span class="ml-5"><span class="text-success"><i class="fab fa-whatsapp-square"></i></span> {{ $data->whatsapp_no }}</span>  <br>

				{{ $data->email }}
			</p>

			<p>{!! nl2br($data->location) !!}</p>
		</div>
	</div>

	<div class="card card-shadow text-center">
		<div class="card-block">
			<div class="profile-social text-left">
				<p>Go to other lead</p>
				<select name="otherLead" id="otherLead" class="form-control col-md-12">
					<option value="">-- Select --</option>
					@foreach ($otherLeads as $otherLead)
					<option value="{{ $otherLead->id }}">{{ $otherLead->business_name }}</option>
					@endforeach
				</select>
			</div>
			<button type="button" class="btn btn-primary btn-sm mt-20 float-left" onclick="goToLead('/lead/')">Go to Lead</button>
		</div>
	</div>
</div>