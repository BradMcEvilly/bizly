<?php

use Illuminate\Database\Seeder;

class BizlyEventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\User::class, 50)->create()->each(function ($e) {
        //   $e->posts()->save(factory(App\BizlyEvent::class)->make());
        // });
        DB::table('bizly_events')->insert([
            'id'    => 1,
            'venue_id' => 2,
            'event_type_id' => 8,
            'user_id' => 1,
            'name' => 'Super important Corporate Gathering',
            'details' => 'Super top secret, super important, super fantastic business SUPER HEROS gathering - which is super',
            'image_url' => 'http://entrepreneurlife.com.au/wp-content/uploads/2017/12/Conference-and-Events-Management-696x464.png',
            'thumb_url' => 'http://entrepreneurlife.com.au/wp-content/uploads/2017/12/1512644497085-80x60.jpg',
            'date_from' => '2018-11-12 03:00:00',
            'date_to' => '2018-12-24 00:04:02',
        ]);
        DB::table('bizly_events')->insert([
            'id'    => 2,
            'venue_id' => 1,
            'event_type_id' => 9,
            'user_id' => 2,
            'name' => 'Semi-super corporate duper trooper',
            'details' => 'Tinker thinker brainstorm session',
            'image_url' => 'http://entrepreneurlife.com.au/wp-content/uploads/2017/12/634dfdfb2707d66c63f7726ed5cd7ae3-600x488.jpg',
            'thumb_url' => 'http://entrepreneurlife.com.au/wp-content/uploads/2017/12/960x0-100x70.jpg',
            'date_from' => '2018-10-12 03:00:00',
            'date_to' => '2018-11-11 00:00:00',
        ]);

    }
}
