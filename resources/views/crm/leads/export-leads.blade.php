@php
$tableFieldCount = sizeof($tableFields);
@endphp

<table>
	<tr>
		@foreach ($excelHeaders as $excelHeader)
		<td>{{ $excelHeader }}</td>
		@endforeach
	</tr>

	@foreach ($leads as $lead)
	<tr>
		@for ($i = 0; $i < $tableFieldCount; $i++)

		@php
		
		if ($tableFields[$i] == 'lead_owner') {
			$ownerName = App\Models\User::where('id', $lead[$tableFields[$i]])->pluck('name');
			$lead[$tableFields[$i]] = $ownerName[0];
		}

		if ($tableFields[$i] == 'assign_to') {
			$assignTo = App\Models\User::where('id', $lead[$tableFields[$i]])->pluck('name');
			$lead[$tableFields[$i]] = $assignTo[0];
		}

		if ($tableFields[$i] == 'lead_type') {
			$leadType = App\Models\TypeModel::where('id', $lead[$tableFields[$i]])->pluck('type');
			$lead[$tableFields[$i]] = $leadType[0];
		}

		if ($tableFields[$i] == 'action') {
			$action = App\Models\TypeModel::where('id', $lead[$tableFields[$i]])->pluck('type');
			$lead[$tableFields[$i]] = $action[0];
		}

		@endphp

		<td>{{ $lead[$tableFields[$i]] }}</td>
		@endfor
	</tr>
	@endforeach
</table>