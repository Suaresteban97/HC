<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name" => "Admin Hidrocarburos", "email" => "hcadmin@gmail.com", "password" => "*Hidro23"],
        ];
        
        DB::table("users")->insert($data);
    }
}
