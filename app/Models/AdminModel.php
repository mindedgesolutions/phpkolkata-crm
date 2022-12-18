<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
	use HasFactory;
	protected $table = 'admin_master';
	protected $fillable = [
		'name',
		'email',
		'mobile',
		'password',
		'remember_token',
		'role',
		'profile_photo_path',
		'active',
	];
}
