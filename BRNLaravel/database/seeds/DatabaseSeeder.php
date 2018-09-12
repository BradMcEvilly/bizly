<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            BizlyEventTypesTableSeeder::class,
            VenueTypesTableSeeder::class,
            LocationsTableSeeder::class,
            VenuesTableSeeder::class,
            //InventoriesTableSeeder::class,
            BizlyEventsTableSeeder::class,
            //BookingsTableSeeder::class,
            //AttendeesTableSeeder::class,
        ]);
    }
}
