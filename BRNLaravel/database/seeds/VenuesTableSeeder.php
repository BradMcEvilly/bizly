<?php

use Illuminate\Database\Seeder;

class VenuesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('venues')->insert([
             'id'    => 1,
             'venue_type_id' => 2,
             'location_id' => 2,
             'name' => 'Marriott',
             'contact' => 'bob@marriott.com',
        ]);
        DB::table('venues')->insert([
            'id'    => 2,
            'venue_type_id' => 1,
            'location_id' => 1,
            'name' => 'Hilton',
            'contact' => 'contact@hilton.com',
        ]);
    }
}
