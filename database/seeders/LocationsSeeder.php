<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class LocationsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('locations')->insert([
            'name' => 'St Georges Terrace',
            'price' => 1900,
            'offices' => 4,
            'tables' => 8,
            'sqm' => 300,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('locations')->insert([
            'name' => 'Murray Street',
            'price' => 1700,
            'offices' => 3,
            'tables' => 6,
            'sqm' => 320,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('locations')->insert([
            'name' => 'Barrack Street',
            'price' => 1750,
            'offices' => 3,
            'tables' => 6,
            'sqm' => 280,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        DB::table('locations')->insert([
            'name' => 'Hay Street',
            'price' => 1500,
            'offices' => 4,
            'tables' => 8,
            'sqm' => 300,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('locations')->insert([
            'name' => 'William Street',
            'price' => 1300,
            'offices' => 2,
            'tables' => 4,
            'sqm' => 180,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('locations')->insert([
            'name' => 'Wellington Street',
            'price' => 1200,
            'offices' => 2,
            'tables' => 3,
            'sqm' => 160,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('locations')->insert([
            'name' => 'Adelaide Terrace',
            'price' => 980,
            'offices' => 2,
            'tables' => 3,
            'sqm' => 180,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('locations')->insert([
            'name' => 'Kings Park Road',
            'price' => 850,
            'offices' => 1,
            'tables' => 2,
            'sqm' => 120,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);

        DB::table('locations')->insert([
            'name' => 'Roe Street',
            'price' => 690,
            'offices' => 1,
            'tables' => 1,
            'sqm' => 70
,            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
    }
}
