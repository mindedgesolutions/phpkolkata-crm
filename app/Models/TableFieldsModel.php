<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TableFieldsModel extends Model
{
	use HasFactory;
	protected $table = 'table_fields_master';
	protected $fillable = [
		'field',
		'active',
	];
}
