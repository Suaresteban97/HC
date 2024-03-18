<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Upz;

class UpzController extends Controller
{
    public function index(){
        $upzs = Upz::all();

        return $upzs;
    }
}
