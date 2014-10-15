<?php 

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'Gabe Roeloffs',
			'username' => 'gdroel',
			'email'    => 'gdroel@gmail.com',
			'password' => Hash::make('r13pomd45'),
		));
	}

}
