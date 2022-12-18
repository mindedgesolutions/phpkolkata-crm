@php
$notes = $data->notes ? $data->notes : 'No data found';
@endphp

<ul class="list-group">
	<li class="list-group-item">
		<div class="media">
			<div class="media-body">
				<div class="profile-brief">{!! nl2br($notes) !!}</div>
			</div>
		</div>
	</li>
</ul>