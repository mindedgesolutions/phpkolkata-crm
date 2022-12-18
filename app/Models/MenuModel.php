<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuModel extends Model
{
	use HasFactory;
	protected $table = 'menu_master';
	protected $fillable = [
		'menu',
		'parent_id',
		'has_child',
		'route',
		'active',
	];
}
