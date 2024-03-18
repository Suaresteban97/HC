<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Branch;
use App\Models\Owner;
use App\Models\Hidrico;
use App\Models\Respel;
use App\Models\Suelo;
use App\Models\Document;

class IndexController extends Controller
{
    public function index () {
        if (Auth::check()) {
            $data = $this->data();
            return view(
                "index",
                [
                    "data" => $data
                ]
            );
        } else {
            return redirect()->route("login")->with("error", "Sesión no iniciada");
        }
    }

    public function data () {

        $info = [];

        $info["branches"] = Branch::count();
        $info["owners"] = Owner::count(); 
        $info["hidrico"] = Hidrico::count(); 
        $info["documents"] = Document::count(); 
        $info["respel"] = Respel::count(); 
        $info["suelo"] = Suelo::count(); 

        return $info;
    }
}
