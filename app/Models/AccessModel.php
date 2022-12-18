<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccessModel extends Model
{
	use HasFactory;
	protected $table = 'access_master';
	protected $fillable = [
		'user_id',
		'menu_id',
		'p_list',
		'p_read',
		'p_write',
		'p_delete',
	];
}
