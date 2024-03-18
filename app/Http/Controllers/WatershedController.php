<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Watershed;

class WatershedController extends Controller
{
    public function index(){
        $watersheds = Watershed::all();

        return $watersheds;
    }
}
