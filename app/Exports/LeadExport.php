<?php

namespace App\Exports;

use App\Models\LeadModel;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class LeadExport implements FromView
{
	public function __construct($leads, $excelHeaders, $tableFields)
	{
		$this->leads = $leads;
		$this->excelHeaders = $excelHeaders;
		$this->tableFields = $tableFields;
	}
	/**
	* @return \Illuminate\Support\Collection
	*/
	public function view(): View
	{
		return view('crm.leads.export-leads', ['leads' => $this->leads, 'excelHeaders' => $this->excelHeaders, 'tableFields' => $this->tableFields]);
	}
}