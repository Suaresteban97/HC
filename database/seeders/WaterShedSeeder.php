<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WaterShedSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["code" => 1, "name" => "FUCHA"],
            ["code" => 2, "name" => "SALITRE"],
            ["code" => 3, "name" => "TORCA"],
            ["code" => 4, "name" => "TUNJUELO"]
        ];

        DB::table("watersheds")->insert($data);
    }
}
