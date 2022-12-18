<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IdStoreModel extends Model
{
	use HasFactory;
	protected $table = 'id_store';
	protected $fillable = [
		'last_id',
		'id_num',
		'id_type',
	];
}
