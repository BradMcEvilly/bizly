<?php

use Illuminate\Database\Seeder;

class VenueTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         *  [ Hotel,
         *    Restaurant,
         *    Activity,
         *    Conference Center,
         *    Corporate Office ]
         */

        DB::table('venue_types')->insert([
            'id'    => 1,
            'name' => 'Hotel',
        ]);
        DB::table('venue_types')->insert([
            'id'    => 2,
            'name' => 'Restaurant',
        ]);
        DB::table('venue_types')->insert([
            'id'    => 3,
            'name' => 'Activity',
        ]);
        DB::table('venue_types')->insert([
            'id'    => 4,
            'name' => 'Conference Center',
        ]);
        DB::table('venue_types')->insert([
            'id'    => 5,
            'name' => 'Corporate Office',
        ]);

    }
}
