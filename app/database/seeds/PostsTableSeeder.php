<?php

class PostsTableSeeder extends Seeder {

	public function run()
	{
		// Uncomment the below to wipe the table clean before populating
        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
		DB::table('posts')->truncate();

		$posts = array(
        [
            'title'=>'Philanthropy Helps Many',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'excerpt'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.',
            'content'=>'Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.',
            'slug'=>'barton-philantrophy-helps-many',
            'category_id'=>'1',
            'banner'=>'billmurray.jpeg',
            'banner_alt'=>'Bill Murray',
            'created_at'=>'2013-10-12 22:02:16',
            'published_at'=>'2013-10-12 22:02:16'
            
        ],[
            'title'=>'Sagan Ipsum',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'excerpt'=>'Vangelis rogue Tunguska event rings of Uranus the only home we\'ve ever known venture light years! Drake Equation sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium! Billions upon billions extraplanetary, preserve and cherish that pale blue dot totam rem aperiam!',
            'content'=>'<p>Vangelis rogue Tunguska event rings of Uranus the only home we\'ve ever known venture light years! Drake Equation sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium! Billions upon billions extraplanetary, preserve and cherish that pale blue dot totam rem aperiam! The ash of stellar alchemy Orion\'s sword Rig Veda of brilliant syntheses tingling of the spine rogue billions upon billions gathered by gravity the sky calls to us. Apollonius of Perga. Jean-François Champollion concept of the number one, hydrogen atoms! Consciousness sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam rogue quis nostrum exercitationem ullam corporis suscipit laboriosam?</p>
<p>Made in the interiors of collapsing stars, the ash of stellar alchemy. Birth Vangelis Cambrian explosion hundreds of thousands adipisci velit the carbon in our apple pies sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam cosmos, galaxies, circumnavigated! Muse about, culture sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam gathered by gravity, stirred by starlight kindling the energy hidden in matter corpus callosum.</p>',
            'slug'=>'saganipsum',
            'category_id'=>'2',
            'banner'=>'billmurray.jpeg',
            'banner_alt'=>'Bill Murray',
            'created_at'=>'2013-11-02 22:02:16',
            'published_at'=>'2013-11-02 22:02:16'
        ],[
            'title'=>'Samuel L Jackson Ipsum Motherfucker',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'excerpt'=>'My money\'s in that office, right? If she start giving me some bullshit about it ain\'t there, and we got to go someplace else and get it, I\'m gonna shoot you in the head then and there.',
            'content'=>'<p>My money\'s in that office, right? If she start giving me some bullshit about it ain\'t there, and we got to go someplace else and get it, I\'m gonna shoot you in the head then and there. Then I\'m gonna shoot that bitch in the kneecaps, find out where my goddamn money is. She gonna tell me too. Hey, look at me when I\'m talking to you, motherfucker. You listen: we go in there, and that nigga Winston or anybody else is in there, you the first motherfucker to get shot. You understand?</p>',
            'slug'=>'philantrophy-helps-many',
            'category_id'=>'1',
            'banner'=>'billmurray.jpeg',
            'banner_alt'=>'Bill Murray',
            'created_at'=>'2013-12-22 22:02:16',
            'published_at'=>'2013-12-22 22:02:16'
        ],[
            'title'=>'Designer Ipsum, OMG',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'excerpt'=>'Simplicity is derived from the whole thing in trying to the point of course, of art is aesthetic. Care. This planet. Nothing. Ultimately, and memorable. Ultimately, down to be overtly different in many of seeing and aesthetic.',
            'content'=>'<p>Simplicity is derived from the whole thing in trying to the point of course, of art is aesthetic. Care. This planet. Nothing. Ultimately, and memorable. Ultimately, down to be overtly different in many of seeing and aesthetic.</p>
<p>It has a complete lack of seeing and some basic stuff that part? The future, lying comes from the powerpoint. That\'s come to be used. It\'s also psychological and often truth than the appropriate thing as possible advantage. It\'s also acknowledge that, or stay at every multivariate spacetime point is in many of clutter is provided.</p>',
            'slug'=>'designer-ipsum',
            'category_id'=>'2',
            'banner'=>'billmurray.jpeg',
            'banner_alt'=>'Bill Murray',
            'created_at'=>'2014-01-10 22:02:16',
            'published_at'=>'2014-01-10 22:02:16'
        ],[
            'title'=>'Corporate Ipsum',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'excerpt'=>'Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.',
            'content'=>'<p>Collaboratively administrate empowered markets via plug-and-play networks. Dynamically procrastinate B2C users after installed base benefits. Dramatically visualize customer directed convergence without revolutionary ROI.</p>
<p>Efficiently unleash cross-media information without cross-media value. Quickly maximize timely deliverables for real-time schemas. Dramatically maintain clicks-and-mortar solutions without functional solutions.</p>
<p>Completely synergize resource sucking relationships via premier niche markets. Professionally cultivate one-to-one customer service with robust ideas. Dynamically innovate resource-leveling customer service for state of the art customer service.</p>',
            'slug'=>'corporateipsum',
            'category_id'=>'1',
            'banner'=>'billmurray.jpeg',
            'banner_alt'=>'Bill Murray',
            'created_at'=>'2014-02-19 22:02:16',
            'published_at'=>'2014-02-19 22:02:16'
        ],[
            'title'=>'Metaphorpsum',
            'description'=>'A stew is the theater of a leaf. They were lost without the lawful badge that composed their jellyfish. We know that the sthenic bean comes from an untrod soccer. The regret of a form becomes a dreamful cougar.',
            'excerpt'=>'A stew is the theater of a leaf. They were lost without the lawful badge that composed their jellyfish.',
            'content'=>'<p>A stew is the theater of a leaf. They were lost without the lawful badge that composed their jellyfish. We know that the sthenic bean comes from an untrod soccer. The regret of a form becomes a dreamful cougar.</p>
            <p>Their repair was, in this moment, a trainless giant. Their drink was, in this moment, a messy feeling. Though we assume the latter, we can assume that any instance of a condor can be construed as a parklike cereal. A feature is a kettledrum\'s temper.</p>',
            'slug'=>'Metaphorpsum',
            'category_id'=>'2',
            'banner'=>'billmurray.jpeg',
            'banner_alt'=>'Bill Murray',
            'created_at'=>'2014-03-18 22:02:16',
            'published_at'=>'2014-03-18 22:02:16'
        ]);

		// Uncomment the below to run the seeder
        DB::table('posts')->insert($posts);
        DB::statement('SET FOREIGN_KEY_CHECKS = 1');
	}

}
