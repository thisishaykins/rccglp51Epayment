<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ParishSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parishes')->insert([
            'user_id' => 1,
            'title' => 'RCCG Lagos Province 51',
            'description' => 'The official Offering Page of the Provincial Headquarters',
            'address' => '46 Demurin Street, By Julius Elebiju, Alapere, Ketu, lagos.',
            'contact_person' => 'Pastor Akinmulewo I. Obed',
            'contact_phone' => '07034525029',
            'contact_email' => 'obedakinmulewo7@gmail.com',
            'paystack_id' => NULL,
            'paystack_secret_key' => NULL,
            'paystack_public_key' => NULL,
            'slug' => Str::slug('RCCG Lagos Province 51', '-'),
            'status' => TRUE,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('parishes')->insert([
            'user_id' => 1,
            'title' => 'RCCG Glory Model Zone - HQ',
            'description' => 'The official Offering Page of Parish Headquarters of the Province',
            'address' => '46 Demurin Street, By Julius Elebiju, Alapere, Ketu, lagos.',
            'contact_person' => 'Pastor Jide Adeniyi',
            'contact_phone' => '08035682183',
            'contact_email' => 'jideadeniyi@gmail.com',
            'paystack_id' => NULL,
            'paystack_secret_key' => NULL,
            'paystack_public_key' => NULL,
            'slug' => Str::slug('RCCG Glory Model Zone - HQ', '-'),
            'status' => TRUE,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('parishes')->insert([
            'user_id' => 1,
            'title' => 'RCCG Glorious Trinity Zone',
            'description' => 'The official Offering Page of Parish Zonal Headquarters of RCCG Glorious Trinity.',
            'address' => '46 God Own Estate, Mowe/Ibafo, Ogun.',
            'contact_person' => 'Pastor Kehinde Odukoya',
            'contact_phone' => '08060599839',
            'contact_email' => 'kehindeodukoya@gmail.com',
            'paystack_id' => NULL,
            'paystack_secret_key' => NULL,
            'paystack_public_key' => NULL,
            'slug' => Str::slug('RCCG Glorious Trinity Zone', '-'),
            'status' => TRUE,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
