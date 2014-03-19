
<?php

class PostsTagsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('post_tag')->truncate();

		$post_tags = array(
            [
                'post_id'=>'1',
                'tag_id'=>'1'
            ],
            [
                'post_id'=>'2',
                'tag_id'=>'1'
            ],
            [
                'post_id'=>'3',
                'tag_id'=>'2'
            ],
            [
                'post_id'=>'4',
                'tag_id'=>'5'
            ],
            [
                'post_id'=>'5',
                'tag_id'=>'2'
            ],
            [
                'post_id'=>'6',
                'tag_id'=>'4'
            ]
		);

		// Uncomment the below to run the seeder
		DB::table('post_tag')->insert($post_tags);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
