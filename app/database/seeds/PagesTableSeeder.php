<?php

class PagesTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('pages')->truncate();

		$pages = array(
            [
            'title'=>'home',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'slug'=>'home',
            'canonical'=>'http://google.com', 
            ],
            [
            'title'=>'Blog',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'slug'=>'blog',
            'canonical'=>'http://google.com', 
            ]
		);

		// Uncomment the below to run the seeder
		DB::table('pages')->insert($pages);
	}

}
