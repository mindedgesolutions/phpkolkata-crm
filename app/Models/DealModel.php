<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DealModel extends Model
{
	use HasFactory;
	protected $table = 'deal_master';
	protected $fillable = [
		'deal_id',
		'deal_date',
		'lead_pk',
		'lead_owner',
		'owner_type',
		'business_name',
		'location',
		'contact_person',
		'job_title',
		'contact_no',
		'whatsapp_no',
		'email',
		'lead_source',
		'notes',
		'active',
	];
}
