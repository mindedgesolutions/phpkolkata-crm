<?php

namespace App\Exports;

use App\Models\LeadModel;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromQuery;

class LeadExport implements FromQuery
{
	use Exportable;

	public function __construct($tableFields = null)
	{
		$this->tableFields = $tableFields;
	}

	/**
	* @return \Illuminate\Support\Collection
	*/
	public function query()
	{
		return LeadModel::query()->select($this->tableFields);
	}

	public function headers()
	{
	// 	return [
	// 		'Sl. No.',
	// 		'Lead ID',
	// 		'Lead Date',
	// 		'Lead Owner',
	// 		'Owner Type',
	// 		'Business Name',
	// 		'Location',
	// 		'Contact Person',
	// 		'Job Title',
	// 		'Contact No',
	// 		'Whatsapp No',
	// 		'Email',
	// 		'Lead Source'.
	// 		'Assign To',
	// 		'Notes',
	// 		'Lead Type',
	// 		'Action',
	// 		'Active',
	// 		'Created At',
	// 		'Updated At',
	// 	];
	}
}
