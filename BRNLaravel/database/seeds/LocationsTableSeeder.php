<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
           'id'    => 1,
           'country' => 'United States',
           'street_address' => '5 Heaters Lane',
           'locality' => 'Layton',
           'region' => 'NJ',
           'postal_code' => '07851',
       ]);
       DB::table('locations')->insert([
            'id'    => 2,
            'country' => 'United States',
            'street_address' => '7 Rocky Way',
            'locality' => 'Newton',
            'region' => 'NJ',
            'postal_code' => '07860',
        ]);
    }
}
