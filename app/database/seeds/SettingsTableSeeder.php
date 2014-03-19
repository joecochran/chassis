<?php

class SettingsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('settings')->truncate();

		$settings = array(
            ['name'=>'Sitename', 'slug' => 'sitename', 'value'=>'Website Name' ],
            ['name'=>'Facebook URL', 'slug'=>'facebook', 'value'=>'http://facebook.com/FACEBOOK_NAME'],
            ['name'=>'Default Meta Description', 'slug'=>'meta_description', 'value'=> 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'],
            ['name'=>'Language', 'slug'=>'lang', 'value'=> 'en-US']
		);

		// Uncomment the below to run the seeder
		DB::table('settings')->insert($settings);
	}

}
