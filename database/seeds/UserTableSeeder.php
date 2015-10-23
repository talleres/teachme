<?php

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;
use Faker\Factory as Faker;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$this->createAdmin();
		$this->createUsers(50);
	}

	private function createAdmin()
	{
		User::create(array(
			'name'     => 'Moisés Martínez',
			'email'    => 'm.mtzm@hotmail.com',
			'password' => bcrypt('admin')
		));
	}

	private function createUsers($total)
	{
		$faker = Faker::create();

		for ($i=1; $i <= $total; $i++) { 
			User::create(array(
				'name' => $faker->name,
				'email' => $faker->email,
				'password' => bcrypt('secret')
			));
		}
	}
	
}