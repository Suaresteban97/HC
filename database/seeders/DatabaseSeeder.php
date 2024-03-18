<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            CitySeeder::class,
            DocumentTypeSeeder::class,
            LocationSeeder::class,
            WaterShedSeeder::class,
            UpzSeeder::class,
            OwnerSeeder::class,
            BranchSeeder::class,
            UserSeeder::class
        ]);
    }
}
