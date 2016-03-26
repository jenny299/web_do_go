
<?php
class UserTableSeeder extends Seeder
{

	public function run()
	{
		
		User::create(array(
			'name'     => 'ADMIN',
			'username' => 'Admin LEAF',
			'email'    => 'admin@gmail',
			'password' => Hash::make('admin'),
		));
		/*profile::create(array(
			'fullname' => 'Ton Tuong Uy',
			'content'    => 'Uy Ton profile',
			'user_id' => '1',
		));*/
	}

}