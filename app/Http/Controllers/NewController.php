<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Location;
use App\Models\Watershed;
use App\Models\Upz;
use App\Models\Owner;
use App\Models\Branch;

class NewController extends Controller
{
    public function show() {
        return view("new");
    }

    public function showBranch() {

        if (Auth::check()) {

            return view(
                "newBranch",
            );
        } else {
            return redirect()->route("login")->with("error", "Sesión no iniciada");
        }
    }

    public function editBranches(Request $request, $page) {
        
        if (Auth::check()) {
            $perPage = 10;
            $searchKeyword = $request->input('search');
            
            $query = Branch::query();
    
            if ($searchKeyword) {
                $query->where('name', 'like', '%' . $searchKeyword . '%');
            }
    
            $branches = $query->paginate($perPage, ['*'], 'page', $page);
    
            return view("edit", [
                "branches" => $branches,
                "searchKeyword" => $searchKeyword
            ]);
        } else {
            return redirect()->route("login")->with("error", "Sesión no iniciada");
        }
    }    
}
