<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadModel extends Model
{
	use HasFactory;
	protected $table = 'lead_master';
	protected $fillable = [
		'lead_id',
		'lead_date',
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
		'assign_to',
		'notes',
		'lead_type',
		'action',
		'active',
		'lead_status',
		'post_followup_status',
	];

	public function leadType(){
		return $this->hasOne(TypeModel::class, 'id', 'lead_type');
	}

	public function leadOwner(){
		return $this->hasOne(User::class, 'id', 'lead_owner');
	}

	public function getAssignTo(){
		return $this->hasOne(User::class, 'id', 'assign_to');
	}

	public function actionRequired(){
		return $this->hasOne(TypeModel::class, 'id', 'action');
	}

	public function leadStatus(){
		return $this->hasOne(TypeModel::class, 'id', 'lead_status');
	}
}
