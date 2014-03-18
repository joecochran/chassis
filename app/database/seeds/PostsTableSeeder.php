<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
		DB::table('posts')->truncate();

		$posts = array(
        [
            'title'=>'Barton Philanthropy Helps Many',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'content'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
            'slug'=>'barton-philantrophy-helps-many',
            'category_id'=>'1'
            
        ],[
            'title'=>'Rotarian of the Year',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'content'=>'Bill has been named Rotarian of the Year and has been honored by the Optimist Club for his service to youth.',
            'slug'=>'barton-philantrophy-helps-many',
            'category_id'=>'1'
        ]);

		// Uncomment the below to run the seeder
		DB::table('posts')->insert($posts);
	}

}
