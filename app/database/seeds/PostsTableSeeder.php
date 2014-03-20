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
            'content'=>'<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>',
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
            'content'=>'<p>Vangelis rogue Tunguska event rings of Uranus the only home we\'ve ever known venture light years! <a href="#">Drake Equation</a> sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium! Billions upon billions extraplanetary, preserve and cherish that pale blue dot totam rem aperiam! The ash of stellar alchemy Orion\'s sword <code>Rig Veda</code> of brilliant syntheses tingling of the spine rogue billions upon billions gathered by gravity the sky calls to us. Apollonius of Perga. Jean-François Champollion concept of the number one, hydrogen atoms! Consciousness sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam rogue quis nostrum exercitationem ullam corporis suscipit laboriosam?</p>
            <blockquote>Brain is the seed of intelligence. Hearts of the stars extraordinary claims require extraordinary evidence hearts of the stars, dispassionate extraterrestrial observer Rig Veda rogue.</blockquote>
            <p>Rich in mystery something incredible is waiting to be known. Birth courage of our questions network of wormholes, Vangelis brain is the seed of intelligence <em>encyclopaedia galactica</em> vastness is bearable only through love citizens of distant epochs, quasar globular star cluster? How far away consectetur adipisicing elit radio telescope tendrils of gossamer clouds are creatures of the cosmos preserve and cherish that pale blue dot?</p>
            <h2>Billions and Billions</h2>
            <p>Made in the interiors of collapsing stars, the ash of stellar alchemy. Birth Vangelis Cambrian explosion hundreds of thousands adipisci velit the carbon in our apple pies sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam cosmos, galaxies, circumnavigated! Muse about, culture sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam gathered by gravity, stirred by starlight kindling the energy hidden in matter corpus callosum.</p>
            <p>The ash of stellar alchemy <strong>Orion\'s sword</strong> Rig Veda of brilliant syntheses tingling of the spine rogue billions upon billions gathered by gravity the sky calls to us. Apollonius of Perga. Jean-François Champollion concept of the number one, hydrogen atoms! Consciousness sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
            <h3>Lower heading</h3>
            <ul>
                <li>List item1</li>
                <li>List item2</li>
            </ul>',
            'slug'=>'saganipsum',
            'category_id'=>'2',
            'banner'=>'carlsagan.jpg',
            'banner_alt'=>'Carl Sagan',
            'created_at'=>'2013-11-02 22:02:16',
            'published_at'=>'2013-11-02 22:02:16'
        ],[
            'title'=>'Missing until dinner time throwup on your pillow attack feet',
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
            'excerpt'=>'Cat ipsum dolor sit amet, chew iPad power cord claw drapes. Attack feet intently stare at the same spot and intrigued by the shower but hate dog but chew foot throwup on your pillow chew iPad power cord. Sun bathe hunt anything that moves so all of a sudden go crazy, attack feet or chew iPad power cord intently stare at the same spot so inspect anything brought into the house.',
            'content'=>'<p>Cat ipsum dolor sit amet, chew iPad power cord claw drapes. Attack feet intently stare at the same spot and intrigued by the shower but hate dog but chew foot throwup on your pillow chew iPad power cord. Sun bathe hunt anything that moves so all of a sudden go crazy, attack feet or chew iPad power cord intently stare at the same spot so inspect anything brought into the house. Burrow under covers swat at dog, stick butt in face swat at dog, but throwup on your pillow. Cat snacks missing until dinner time destroy couch and find something else more interesting, all of a sudden go crazy. Hate dog find something else more interesting, use lap as chair leave dead animals as gifts so leave dead animals as gifts. Shake treat bag inspect anything brought into the house stretch flop over play time so use lap as chair. Hate dog claw drapes so destroy couch for claw drapes or leave hair everywhere.</p>
            <blockquote>Use lap as chair run in circles</blockquote>
            <p>All of a sudden go crazy chase mice. Hunt anything that moves intrigued by the shower so find something else more interesting hate dog for lick butt give attitude find something else more interesting. Swat at dog lick butt chase imaginary bugs, but climb leg but under the bed or stand in front of the computer screen. Use lap as chair intently sniff hand, or make muffins. Chew iPad power cord stretch so behind the couch so chew foot and stand in front of the computer screen. Claw drapes under the bed sleep on keyboard but make muffins attack feet. Hunt anything that moves. Hate dog flop over yet lick butt leave hair everywhere but intrigued by the shower inspect anything brought into the house for intently stare at the same spot. Intently stare at the same spot. Use lap as chair lick butt but chase mice, sun bathe. Hide when guests come over under the bed yet throwup on your pillow. Why must they do that swat at dog and sleep on keyboard so chew foot behind the couch mark territory. Hide when guests come over intrigued by the shower or chew foot and claw drapes chase imaginary bugs. Destroy couch. Chew iPad power cord shake treat bag behind the couch chew foot. Rub face on everything hide when guests come over. Flop over swat at dog but intrigued by the shower behind the couch leave dead animals as gifts and flop over under the bed. Attack feet sweet beast destroy couch. Stick butt in face chase mice need to chase tail play time. Intently stare at the same spot intrigued by the shower intently stare at the same spot intently stare at the same spot run in circles. Stick butt in face throwup on your pillow but rub face on everything. Leave dead animals as gifts nap all day so climb leg so under the bed. Rub face on everything hunt anything that moves stick butt in face chew iPad power cord behind the couch stare at ceiling for rub face on everything. Swat at dog give attitude.</p>
            <p>Stretch sleep on keyboard hopped up on goofballs, mark territory so chew foot all of a sudden go crazy hopped up on goofballs. Chase imaginary bugs claw drapes. Stretch. Make muffins. Cat snacks burrow under covers climb leg, or missing until dinner time but intrigued by the shower so intrigued by the shower.</p>',
            'slug'=>'cat-ipsum',
            'category_id'=>'1',
            'banner'=>'kittens.jpg',
            'banner_alt'=>'Kittens!!!',
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
            'banner'=>NULL,
            'banner_alt'=>NULL,
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
            'banner'=>'corporate.jpg',
            'banner_alt'=>'Bill Murray',
            'created_at'=>'2014-02-19 22:02:16',
            'published_at'=>'2014-02-19 22:02:16'
        ],[
            'title'=>'Hipster Ipsum if you want',
            'description'=>'A stew is the theater of a leaf. They were lost without the lawful badge that composed their jellyfish. We know that the sthenic bean comes from an untrod soccer. The regret of a form becomes a dreamful cougar.',
            'excerpt'=>'Marfa quis reprehenderit adipisicing squid. Exercitation XOXO in, banh mi ex street art 8-bit. DIY vinyl twee gastropub, VHS fixie hashtag salvia chambray Truffaut.',
            'content'=>'<h2>Exercitation XOXO</h2><p>Marfa quis reprehenderit adipisicing squid. Exercitation XOXO in, banh mi ex street art 8-bit. DIY vinyl twee gastropub, VHS fixie hashtag salvia chambray Truffaut. Eu farm-to-table banjo flannel hella Pinterest. Tattooed Wes Anderson quinoa photo booth. Tofu normcore accusamus slow-carb irure, pariatur Carles fugiat labore quis Shoreditch. Locavore try-hard reprehenderit cardigan labore.</p>
            <p>Cardigan ethnic Tonx, chillwave letterpress street art adipisicing nulla consequat stumptown lomo fap. Synth aute Etsy, cupidatat Tonx cardigan cillum McSweeney\'s Austin. High Life raw denim quis, 3 wolf moon butcher fashion axe Bushwick. Enim quinoa before they sold out, sriracha brunch Vice reprehenderit lo-fi. Anim selvage freegan cardigan, Neutra aute stumptown. Eu pickled incididunt Neutra umami, whatever keffiyeh voluptate laboris VHS fashion axe. Shabby chic hashtag dolore art party meh.</p>
            <blockquote>Laboris Carles freegan DIY try-hard letterpress, Intelligentsia kitsch 8-bit. Mollit direct trade cliche Neutra skateboard. Est keffiyeh jean shorts letterpress slow-carb, fugiat lomo retro Echo Park vegan pug gluten-free cray sunt. Nesciunt commodo letterpress, salvia vegan Carles jean shorts.</blockquote>
            <h2>Shabby chic semiotics photo booth Etsy consequat, polaroid McSweeney\'s fugiat locavore dolor keffiyeh.</h2>
            <p>Cardigan delectus photo booth, twee tattooed hoodie McSweeney\'s cupidatat Blue Bottle swag ea banjo ullamco. Retro anim raw denim do, PBR&B sunt chambray DIY typewriter tote bag occupy eiusmod Portland consequat freegan. Semiotics Schlitz literally chambray. Post-ironic freegan vegan iPhone.</p>
            <ol>
                <li>Magna enim ut</li>
                <li>DIY ullamco fingerstache</li>
                <li>scenester Intelligentsia pop-up pickled delectus</li>
            </ol>
            <p>Cillum stumptown banh mi, hashtag locavore you probably haven\'t heard of them small batch accusamus enim put a bird on it culpa anim mlkshk. Vegan gluten-free sunt occaecat. Scenester culpa irure, ethical sartorial mumblecore irony letterpress small batch Portland dolor in aliqua nulla pour-over.</p>',
            'slug'=>'Metaphorpsum',
            'category_id'=>'2',
            'banner'=>'hipster-ipsum.jpg',
            'banner_alt'=>'So Trendy',
            'created_at'=>'2014-03-18 22:02:16',
            'published_at'=>'2014-03-18 22:02:16'
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
