<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["code" => 1,"name" => "USAQUEN", "latitude" => "4,79158359965211", "longitude" => "-74,0337092190126"],
            ["code" => 2,"name" => "CHAPINERO", "latitude" => "4,667741033388565", "longitude" => "-74,01946159225703"],
            ["code" => 3,"name" => "SANTA FE", "latitude" => "4,604944665473847", "longitude" => "-74,07416484572259"],
            ["code" => 4,"name" => "SAN CRISTOBAL", "latitude" => "4,5650872780663825", "longitude" => "-74,09495225007498"],
            ["code" => 5,"name" => "USME", "latitude" => "4,5183058368090300", "longitude" => "-74,0987770689471"],
            ["code" => 6,"name" => "TUNJUELITO", "latitude" => "4,555379504028050", "longitude" => "-74,12796233166760"],
            ["code" => 7,"name" => "BOSA", "latitude" => "4,62938976657784", "longitude" => "-74,2100822293207"],
            ["code" => 8,"name" => "KENNEDY", "latitude" => "4,6572611095195900", "longitude" => "-74,15314651432320"],
            ["code" => 9,"name" => "FONTIBON", "latitude" => "4,698933400593350", "longitude" => "-74,14241143255200"],
            ["code" => 10,"name" => "ENGATIVA", "latitude" => "4,69481106140487", "longitude" => "-74,10362569416360"],
            ["code" => 11,"name" => "SUBA", "latitude" => "4,724291263774870", "longitude" => "-74,05675620087400"],
            ["code" => 12,"name" => "BARRIOS UNIDOS", "latitude" => "4,662449876637940", "longitude" => "-74,06817651299420"],
            ["code" => 13,"name" => "TEUSAQUILLO", "latitude" => "4,6477755330696800", "longitude" => "-74,09132994841770"],
            ["code" => 14,"name" => "LOS MARTIRES", "latitude" => "4,598421336352230", "longitude" => "-74,09579235864170"],
            ["code" => 15,"name" => "ANTONIO NARIÑO", "latitude" => "4,583659930984320", "longitude" => "-74,09307761208630"],
            ["code" => 16,"name" => "PUENTE ARANDA", "latitude" => "4,618949882889400", "longitude" => "-74,09721062273250"],
            ["code" => 17,"name" => "LA CANDELARIA", "latitude" => "4,596612284680670", "longitude" => "-74,07281008340170"],
            ["code" => 18,"name" => "RAFAEL URIBE URIBE", "latitude" => "4,573682946966800", "longitude" => "-74,10436400134720"],
            ["code" => 19,"name" => "CIUDAD BOLIVAR", "latitude" => "4,565651325496290", "longitude" => "-74,16523633778180"],
        ];

        DB::table("locations")->insert($data);
    }
}
