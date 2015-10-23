<?php

use Illuminate\Database\Seeder;
use TeachMe\Entities\User;

class UserTableSeeder extends Seeder {

	public function run()
	{
		$this->createAdmin();
	}

	private function createAdmin()
	{
		User::create(array(
			'name'     => 'Moisés Martínez',
			'email'    => 'm.mtzm@hotmail.com',
			'password' => bcrypt('admin')
		));
	}
	
}