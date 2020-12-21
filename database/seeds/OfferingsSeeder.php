<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OfferingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'Sunday Love Offering',
            'description' => 'Sunday Service Love Offering',
            'slug' => Str::slug('Sunday Love Offering', '-'),
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'Tithe',
            'description' => Str::slug('Tithe', '-'),
            'slug' => '',
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'Thanksgiving Offering',
            'description' => 'Thanksgiving Offering',
            'slug' => Str::slug('Thanksgiving Offering', '-'),
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'Provincial Offering',
            'description' => 'For all kinds of Provincial Services Offerings',
            'slug' => Str::slug('Provincial Offering', '-'),
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'General Offering',
            'description' => 'All kinds of Offerings: weekly service, vigils and other special services',
            'slug' => Str::slug('General Offering', '-'),
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'Sacrificial Giving',
            'description' => 'Sacrificial Giving Offerings',
            'slug' => Str::slug('Sacrificial Offering', '-'),
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'Benevolence Offering ',
            'description' => 'Benevolence Offering',
            'slug' => Str::slug('Benevolence Offering', '-'),
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'Building Projects',
            'description' => 'Building Project Offering',
            'slug' => Str::slug('Building Projects Offering', '-'),
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'Special Projects',
            'description' => 'Special Project Offering',
            'slug' => Str::slug('Special Projects Offering', '-'),
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'Community Projects',
            'description' => 'Community Project Offering',
            'slug' => Str::slug('Community Projects Offering', '-'),
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        DB::table('offerings')->insert([
            'user_id' => null,
            'parish_id' => null,
            'title' => 'Others',
            'description' => 'Others Offerings/Givings',
            'slug' => Str::slug('Others', '-'),
            'status' => true,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
