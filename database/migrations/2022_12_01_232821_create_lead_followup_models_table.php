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
		Schema::create('lead_followup_master', function (Blueprint $table) {
			$table->id();
			$table->integer('lead_id')->nullable();
			$table->smallInteger('action_type')->nullable();
			$table->text('annotation')->nullable();
			$table->date('next_follow_up_date')->nullable();
			$table->smallInteger('lead_status')->nullable();
			$table->integer('user_id')->nullable();
			$table->dateTime('action_date')->nullable();
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
		Schema::dropIfExists('lead_followup_master');
	}
};
