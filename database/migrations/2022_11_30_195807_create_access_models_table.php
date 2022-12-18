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
		Schema::create('access_master', function (Blueprint $table) {
			$table->id();
			$table->integer('user_id')->nullable();
			$table->integer('menu_id')->nullable();
			$table->boolean('p_list')->default(0);
			$table->boolean('p_read')->default(0);
			$table->boolean('p_write')->default(0);
			$table->boolean('p_delete')->default(0);
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
		Schema::dropIfExists('access_master');
	}
};
