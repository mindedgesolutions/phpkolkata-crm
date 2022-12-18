<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadDisapproveReason extends Model
{
	use HasFactory;
	protected $table = 'lead_disapprove_reasons';
	protected $fillable = [
		'lead_id',
		'final_status',
		'comments',
	];
}
