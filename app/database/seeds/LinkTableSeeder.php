<?php

class LinkTableSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('links')->delete();

		Links::create(array('shortlink' => 'yamehreg', 'url' => 'https://docs.google.com/forms/d/1pCrmBGkeMF_1_o9VPjl4ce4g7LO3nT3F3FeOPl3nZ_A/viewform', 'active' => true));
		Links::create(array('shortlink' => 'picturesque', 'url' => 'https://docs.google.com/forms/d/1Nb_uMEcOYOsjio50tOLr8pukNh8iBJU02pX42jtsn2A/', 'active' => true));
		Links::create(array('shortlink' => 'midnightchannelcafe', 'url' => 'https://docs.google.com/forms/d/10noQUzzKlEFBxvOrnJS64kY-0ZIHVEZMje8B3D9T6Vg/viewform', 'active' => true));
		Links::create(array('shortlink' => 'blood', 'url' => 'http://www.facebook.com/photo.php?fbid=10153187231455416&set=a.10150212930380416.448965.443994565415&type=1', 'active' => true));
		Links::create(array('shortlink' => 'ameshoporderform', 'url' => 'https://docs.google.com/forms/d/19C237sNsOWOSF8BOAn3rGuO_G98pXu-fqp0Z3Y-KRe0/viewform', 'active' => true));
	}

}
