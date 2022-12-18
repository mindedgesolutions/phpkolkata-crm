<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LeadFollowupModel extends Model
{
	use HasFactory;
	protected $table = 'lead_followup_master';
	protected $fillable = [
		'lead_id',
		'action_type',
		'annotation',
		'next_follow_up_date',
		'lead_status',
		'user_id',
		'action_date',
		'active',
	];

	public function followupBy(){
		return $this->hasOne(User::class, 'id', 'user_id');
	}

	public function followupDoneBy(){
		return $this->hasOne(TypeModel::class, 'id', 'action_type');
	}

	public function currentStatus(){
		return $this->hasOne(TypeModel::class, 'id', 'lead_status');
	}
}