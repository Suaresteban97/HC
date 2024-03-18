<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Branch;

class DetailController extends Controller
{
    public function index ($id) {

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

            $branch["chips"] = $chips ?? [];
            $branch["files"] = $files ?? [];
            $branch["owner"] = $owner ?? [];
            $branch["city"] = $city ?? [];
            $branch["location"] = $location ?? [];
            $branch["upz"] = $upz ?? [];
            $branch["watershed"] = $watershed ?? [];

            return view("detail-app",
                [
                    "detail" => $branch
                ]
            );
        }
    } 
}
