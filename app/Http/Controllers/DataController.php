<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Chip;
use App\Models\Branch;
use App\Models\File;

class DataController extends Controller
{
    public function readAndStoreChips(){

        $file = Storage::disk('files')->get("chips.json");

        $decodedFile = json_decode($file, true);

        for($i=0; $i < sizeof($decodedFile); $i++){

            $explodedChips = explode(",", $decodedFile[$i]["chips"]);
            
            $branch_id = Branch::where("hc_code", $decodedFile[$i]["hc_code"])->first();

            for($j=0; $j < sizeof($explodedChips); $j++){

                $searchChip = $explodedChips[$j];

                $chip = Chip::where("chip", "LIKE", "%{$searchChip}%")->first();

                if (isset($chip)){
                    continue;
                } else {
                    $newChip = new Chip();

                    $newChip->branch_id = $branch_id["id"];;
                    $newChip->chip = $searchChip;

                    $newChip->save();
                }
            }
        }
    }

    public function readAndStoreFiles(){

        $file = Storage::disk('files')->get("expedientes.json");

        $decodedFile = json_decode($file, true);

        for($i=0; $i < sizeof($decodedFile); $i++){

            $explodedFiles = explode(",", $decodedFile[$i]["exp"]);
            
            $branch_id = Branch::where("hc_code", $decodedFile[$i]["hc_code"])->first();

            for($j=0; $j < sizeof($explodedFiles); $j++){

                $searchFile = $explodedFiles[$j];

                $file = File::where("file", "LIKE", "%{$searchFile}%")->first();

                if (isset($file)){
                    continue;
                } else {
                    $newFile = new File();

                    $newFile->branch_id = $branch_id["id"];;
                    $newFile->file = $searchFile;

                    $newFile->save();
                }
            }
        }
    }

    public function readAndStoreLatLong(){

        $file = Storage::disk('files')->get("latlon.json");

        $decodedFile = json_decode($file, true);

        for($i=0; $i < sizeof($decodedFile); $i++){
            
            $branch_id = Branch::where("hc_code", $decodedFile[$i]["hc_code"])->first();

            if(isset($branch_id)){

                $branch_id->latitude = strval($decodedFile[$i]["latitude"]);
                $branch_id->longitude = strval($decodedFile[$i]["longitude"]);

                $branch_id->save();
            }
        }
    }
}
