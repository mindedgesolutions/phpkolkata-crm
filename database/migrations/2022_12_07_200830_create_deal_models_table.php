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
		Schema::create('deal_master', function (Blueprint $table) {
			$table->id();
			$table->string('deal_id')->unique();
			$table->dateTime('deal_date')->now();
			$table->integer('lead_owner');
			$table->smallInteger('owner_type');
			$table->string('business_name')->nullable();
			$table->string('location')->nullable();
			$table->string('contact_person')->nullable();
			$table->string('job_title')->nullable();
			$table->string('contact_no')->nullable();
			$table->string('whatsapp_no')->nullable();
			$table->string('email')->nullable();
			$table->string('lead_source')->nullable();
			$table->text('notes')->nullable();
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
		Schema::dropIfExists('deal_master');
	}
};
