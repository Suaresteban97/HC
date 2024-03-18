<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;
use App\Models\Owner;
use App\Models\Chip;
use App\Models\File;
use App\Models\Hidrico;
use App\Models\Respel;
use App\Models\Suelo;
use App\Models\Pdc;
use App\Models\Document;
use App\Models\DocumentsBranches;

class BranchController extends Controller
{
    public function index(){
        $branches = Branch::all();

        return $branches;
    }

    public function branchDetail($id){

        $branch = Branch::where("id", $id)->first();

        if(isset($branch)){

            $owner = Branch::find($branch['id'])->owner
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $city = Branch::find($branch['id'])->city
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $location = Branch::find($branch['id'])->location
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $upz = Branch::find($branch['id'])->upz
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $watershed = Branch::find($branch['id'])->watershed
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $chips = Branch::find($branch['id'])->chips
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $files = Branch::find($branch['id'])->files
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $hidrico = Branch::find($branch['id'])->hidrico
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $respel = Branch::find($branch['id'])->respel
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $suelo = Branch::find($branch['id'])->suelo
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $pdc = Branch::find($branch['id'])->pdc
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $monitoring = Branch::find($branch['id'])->monitoring
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $documents = Branch::find($branch['id'])->documents
            ->makeHidden([
                'created_at',
                'updated_at'
            ]);

            $branch["chips"] = $chips ?? [];
            $branch["files"] = $files ?? [];
            $branch["owner"] = $owner ?? [];
            $branch["hidrico"] = $hidrico ?? [];
            $branch["respel"] = $respel ?? [];
            $branch["suelo"] = $suelo ?? [];
            $branch["pdc"] = $pdc ?? [];
            $branch["city"] = $city ?? [];
            $branch["location"] = $location ?? [];
            $branch["upz"] = $upz ?? [];
            $branch["watershed"] = $watershed ?? [];
            $branch["monitoring"] = $monitoring ?? [];
            $branch["documents"] = $documents ?? [];         


        } else {
            "";
        }

        return $branch;
    }

    public function filteredBranches(Request $request){

        $data = $request->all();

        $location = $data["location"] ?? "";
        $branch = $data["branch"] ?? "";

        if($branch != ""){
            $branches = Branch::where("id", intval($branch))->first();
        } else if($location != ""){
            $branches = Branch::where("location_id", intval($location))
            ->where("latitude", "!=", "#N/A")->get();
        } else {
            $branches = Branch::where("latitude", "!=", "#N/A")->get();
        }

        if(isset($branches)){
            return response()->json([
                "code" => 1,
                "data" => $branches,
            ], 200);
        } else {
            return response()->json([
                "code" => 2,
                "data" => "No results",
            ], 401);
        }
    }

    public function ubications()
    {
        $branches = Branch::where("latitude", "!=", "#N/A")->get();

        $branches->map(function ($branch) {
            $chips = Chip::where('branch_id', $branch->id)
                ->select('chip')
                ->get()
                ->makeHidden(['created_at', 'updated_at']);

            $branch->chips = $chips;

            return $branch;
        });

        return $branches;
    }

    public function store(Request $request){

        $data = $request->all();

        try {
            $branch = new Branch();

            $branch->name = $data["name"];
            $branch->operator_nit = $data["nit"];
            $branch->hc_code = $data["code"];
            $branch->area = $data["area"];
            $branch->address = $data["address"];
            $branch->owner_id = $data["owner"]["id"];
            $branch->city_id = 159;
            $branch->location_id = $data["location"]["id"];
            $branch->upz_id = $data["upz"]["id"];
            $branch->watershed_id = $data["watershed"]["id"];
            $branch->latitude = $data["latitude"];
            $branch->longitude = $data["longitude"];
            $branch->flag = $data["flag"];
            $branch->sicom = $data["sicom"];
    
            $branch->save();

            switch(intval($data["goal"])){
                case 1: 
                    $goal = new Hidrico();
    
                    $goal->branch_id = $branch["id"];
                    $goal->washer = $data["washer"] ?? "";
                    $goal->discharge = $data["discharge"] ?? "";
    
                    $goal->save();
                break;
                case 2:
                    $goal = new Respel();
    
                    $goal->branch_id = $branch["id"];
                    $goal->register = $data["register"] ?? "";
                    $goal->media_per_month = $data["mediaPerMonth"] ?? "";
                    $goal->movil_media = $data["movilMedia"] ?? "";
    
                    $goal->save();
                break;
                case 3:
                    $goal = new Suelo();
    
                    $goal->branch_id = $branch["id"];
    
                    $goal->save();
                break;
                case 4:
                    $goal = new Pdc();
    
                    $goal->branch_id = $branch["id"];
    
                    $goal->save();
                break;
                default:

                break;
            }

            $response = [
                "code" => 1,
                "message" => "Sede almacenada"
            ];

            return json_encode($response);

        } catch (\Exception $e) {

            $response = [
                "code" => 0,
                "message" => $e->getMessage()
            ];

            return json_encode($response);
        }
    }

    public function edit(Request $request, $id){

        $data = $request->all();

        $updateBranch = Branch::where("id", $id)->first();

        if (isset($updateBranch)) {

            try {

                if(isset($data["name"]) && $data["name"] != ""){
                    $updateBranch->name = $data["name"];
                }
        
                if(isset($data["nit"]) && $data["nit"] != null){
                    $updateBranch->operator_nit = $data["nit"];
                }
        
                if(isset($data["area"]) && $data["area"] != null){
                    $updateBranch->area = $data["area"];
                }
        
                if(isset($data["address"]) && $data["address"] != ""){
                    $updateBranch->address = $data["address"];
                }
        
                if(isset($data["latitude"]) && $data["latitude"] != null){
                    $updateBranch->latitude = $data["latitude"];
                }
        
                if(isset($data["longitude"]) && $data["longitude"] != null){
                    $updateBranch->longitude = $data["longitude"];
                }
        
                if(isset($data["flag"]) && $data["flag"] != ""){
                    $updateBranch->flag = $data["flag"];
                }
        
                if(isset($data["sicom"]) && $data["sicom"] != null){
                    $updateBranch->sicom = $data["sicom"];
                }
        
                $updateBranch->save();
        
                if(isset($data["goal"]) && $data["goal"] != ""){
                    switch(intval($data["goal"])){
                        case 1: 
                            $goal = new Hidrico();
            
                            $goal->branch_id = $updateBranch["id"];
                            $goal->washer = $data["washer"] ?? "";
                            $goal->discharge = $data["discharge"] ?? "";
            
                            $goal->save();
                        break;
                        case 2:
                            $goal = new Respel();
            
                            $goal->branch_id = $updateBranch["id"];
                            $goal->register = $data["register"] ?? "";
                            $goal->media_per_month = $data["mediaPerMonth"] ?? "";
                            $goal->movil_media = $data["movilMedia"] ?? "";
            
                            $goal->save();
                        break;
                        case 3:
                            $goal = new Suelo();
            
                            $goal->branch_id = $branch["id"];
            
                            $goal->save();
                        break;
                        case 4:
                            $goal = new Pdc();
            
                            $goal->branch_id = $branch["id"];
            
                            $goal->save();
                        break;
                        default:
        
                        break;
                    }
                }

                // Action: add: 1, delete: 2 
        
                if (isset($data["documents"]) && $data["documents"] != []) {
                    foreach($data["documents"] as $document){

                        if ($document["action"] == 1){
                            $newDocument = new Document();
        
                            $newDocument->type_id = $document["type"];
                            $newDocument->document = $document["name"];
                            $newDocument->numeration = $document["numeration"] ?? 0;
                            $newDocument->date = $document["date"];
                            $newDocument->year = $document["year"];
            
                            $newDocument->save();
            
                            if (isset($newDocument)) {
                                $newBranchDocument = new DocumentsBranches();
            
                                $newBranchDocument->document_id = $newDocument->id;
                                $newBranchDocument->branch_id = $updateBranch->id;
                
                                $newBranchDocument->save();
                            }               
                        } else if (intval($document["action"]) == 2) {
                            DocumentsBranches::where('document_id', $document["id"])->delete();
                            Document::find($document["id"])->delete();
                        } else {
                            continue;
                        }
                         
                    }
                }
        
                if (isset($data["chips"]) && $data["chips"] != []) {

                    foreach($data["chips"] as $chip){

                        if (intval($chip["action"] == 1)) {

                            $newChip = new Chip();
        
                            $newChip->branch_id = $updateBranch->id;
                            $newChip->chip = $chip["name"];
            
                            $newChip->save();

                        } else if (intval($chip["action"]) == 2) {

                            Chip::find($chip["id"])->delete();

                        } else {
                            continue;
                        }
                    }
                }

                if (isset($data["files"]) && $data["files"] != []) {

                    foreach($data["files"] as $file){

                        if (intval($file["action"] == 1)) {

                            $newFile = new File();
        
                            $newFile->branch_id = $updateBranch->id;
                            $newFile->file = $file["name"];
            
                            $newFile->save();

                        } else if (intval($file["action"]) == 2) {

                            File::find($file["id"])->delete();

                        } else {
                            continue;
                        }
                        
                    }
                }

                $response = [
                    "code" => 1,
                    "message" => "Sede Editada"
                ];
    
                return json_encode($response);

            } catch (\Exception $e) {

                $response = [
                    "code" => 0,
                    "message" => $e->getMessage()
                ];
    
                return json_encode($response);
            }
            
        } 
    }

    public function branchDetailView($id){

        $branch = Branch::find($id);

        return view('editBranch', ['branch' => $branch]);
    }

    public function delete($id){
        $branch = Branch::where("nit", $id)->delete();
    }
}
