<?php

use Illuminate\Database\Seeder;

class BizlyEventTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * [ Creative Inspiration,
         *   Impressing a Client,
         *   Presentations,
         *   Strategy Sessions,
         *   Team Offsites,
         *   Video Conferencing,
         *   Airport Convenience,
         *   Board Meetings,
         *   Brainstorming,
         *   Business Dining,
         *   Casual Gatherings,
         *   Celebrations ]
         */

        DB::table('bizly_event_types')->insert([
            'id'    => 1,
            'name' => 'Creative Inspiration',
        ]);
        DB::table('bizly_event_types')->insert([
            'id'    => 2,
            'name' => 'Impressing a Client',
        ]);
         DB::table('bizly_event_types')->insert([
             'id'    => 3,
             'name' => 'Presentations',
         ]);
         DB::table('bizly_event_types')->insert([
             'id'    => 4,
             'name' => 'Strategy Sessions',
         ]);
         DB::table('bizly_event_types')->insert([
             'id'    => 5,
             'name' => 'Team Offsites',
         ]);
         DB::table('bizly_event_types')->insert([
             'id'    => 6,
             'name' => 'Video Conferencing',
         ]);
          DB::table('bizly_event_types')->insert([
              'id'    => 7,
              'name' => 'Airport Convenience',
          ]);
          DB::table('bizly_event_types')->insert([
              'id'    => 8,
              'name' => 'Board Meetings',
          ]);
          DB::table('bizly_event_types')->insert([
              'id'    => 9,
              'name' => 'Brainstorming',
          ]);
          DB::table('bizly_event_types')->insert([
              'id'    => 10,
              'name' => 'Business Dining',
          ]);
           DB::table('bizly_event_types')->insert([
               'id'    => 11,
               'name' => 'Casual Gatherings',
           ]);
           DB::table('bizly_event_types')->insert([
               'id'    => 12,
               'name' => 'Celebrations',
           ]);
    }
}
