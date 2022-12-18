<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class LeadSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$leads = [];
		$faker = Faker::create();
		foreach (range(1, 15) as $id => $index) {
			$lead = [
				"lead_id" => "000".($id + 9),
				"lead_date" => now(),
				"lead_owner" => 4,
				"owner_type" => 2,
				"business_name" => $faker->company,
				"location" => $faker->address,
				"contact_person" => $faker->name,
				"contact_no" => $faker->phoneNumber(),
				"whatsapp_no" => $faker->phoneNumber(),
				"email" => $faker->unique()->safeEmail(),
				"job_title" => $faker->text($maxNbChars = 20),
				"lead_source" => $faker->text($maxNbChars = 20),
				"assign_to" => null,
				"notes" => $faker->text($maxNbChars = 300),
				"lead_type" => $faker->numberBetween(5, 7),
				"action" => $faker->numberBetween(9, 14),
				"active" => 1,
				"created_at" => now(),
				"updated_at" => now(),
			];
			$leads[] = $lead;
		}
		DB::table('lead_master')->insert($leads);
	}
}
