<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		$users = [];
		$faker = Faker::create();

		foreach (range(1, 12) as $index) {
			$user = [
				"name" => $faker->name,
				"email" => $faker->email,
				"email_verified_at" => null,
				"password" => Hash::make('welcome123'),
				"profile_photo_path" => null,
				"role" => 3,
				"active" => 1,
				"remember_token" => null,
				"created_at" => now(),
				"updated_at" => now(),
			];
			$users[] = $user;
		}
		DB::table('users')->insert($users);
	}
}
