<?php 

class UserTableSeeder extends Seeder
{

	public function run()
	{
		DB::table('users')->delete();
		User::create(array(
			'name'     => 'First Last',
			'username' => 'username',
			'email'    => 'myawesomeemail',
			'password' => Hash::make('password'),
		));
	}

}
