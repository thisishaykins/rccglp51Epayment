<?php

use Illuminate\Database\Seeder;

class OfferingCurrencySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offerings_currencies')->insert([
            'title' => 'NGN',
            'description' => 'The Nigeria Naira Currency',
            'code' => '566',
            'sign' => '₦',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings_currencies')->insert([
            'title' => 'USD',
            'description' => 'The US Dollar Currency',
            'code' => '565',
            'sign' => '$',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
