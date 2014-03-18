
<?php

class TagsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('tags')->truncate();

		$tags = array(
            ['name'=>'Subject 1'],
            ['name'=>'Subject 2'],
            ['name'=>'Subject 3'],
            ['name'=>'Subject 4'],
            ['name'=>'Subject 5']
		);

		// Uncomment the below to run the seeder
		DB::table('tags')->insert($tags);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
