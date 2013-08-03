<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('StoryTableSeeder');
	}

}


class StoryTableSeeder extends Seeder {

    public function run()
    {
        DB::table('stories')->delete();

        Story::create(array('title' => 'Story 1', 
        				   'description' => 'Story 1 description'));
    }

}