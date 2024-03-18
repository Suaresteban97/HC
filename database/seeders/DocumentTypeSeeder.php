<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DocumentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["code" => 1, "name" => "REQUERIMIENTO"],
            ["code" => 2, "name" => "OFICIO"],
            ["code" => 3, "name" => "INFORME TÉCNICO"],
            ["code" => 4, "name" => "CONCEPTO TÉCNICO"],
            ["code" => 5, "name" => "AUTO"],
            ["code" => 6, "name" => "RESOLUCIÓN"],
            ["code" => 7, "name" => "MEMORANDO"],
        ];
        
        DB::table("documents_types")->insert($data);
    }
}
