<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('admin_master', function (Blueprint $table) {
			$table->id();
			$table->string('name')->nullable();
			$table->string('email')->unique();
			$table->string('mobile')->nullable();
			$table->string('password')->nullable();
			$table->string('remember_token')->nullable();
			$table->smallInteger('role')->default(2);
			$table->boolean('active')->default(1);
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('admin_master');
	}
};
