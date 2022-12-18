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
		Schema::create('lead_master', function (Blueprint $table) {
			$table->id();
			$table->string('lead_id')->unique();
			$table->dateTime('lead_date')->nullable();
			$table->integer('lead_owner');
			$table->string('business_name')->nullable();
			$table->string('location')->nullable();
			$table->string('contact_person')->nullable();
			$table->string('job_title')->nullable();
			$table->string('contact_no')->nullable();
			$table->string('whatsapp_no')->nullable();
			$table->string('email')->nullable();
			$table->string('lead_source')->nullable();
			$table->integer('assign_to')->nullable();
			$table->text('notes')->nullable();
			$table->smallInteger('lead_type')->nullable();
			$table->smallInteger('action')->nullable();
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
		Schema::dropIfExists('lead_master');
	}
};
