<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('users')->truncate();

		$users = array([
            'fullname'=>'John Doe',
            'username'=>'admin',
            'password'=>Hash::make('Password1'),
            'email'=>'admin@domain.com',
            'role'=>0,
            'remember_token'=>null
        ],
        [
            'fullname'=>'Jane Doe',
            'username'=>'editor',
            'password'=>Hash::make('Password1'),
            'email'=>'editor@domain.com',
            'role'=>1,
            'remember_token'=>null
        ]);

		// Uncomment the below to run the seeder
		DB::table('users')->insert($users);
	}

}
