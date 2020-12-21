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
        $this->call([UsersTableSeeder::class]);
        $this->call([AdminsTableSeeder::class]);
        $this->call([OfferingCurrencySeeder::class]);
        $this->call([OfferingsSeeder::class]);
        $this->call([ParishSeeder::class]);
    }
}
