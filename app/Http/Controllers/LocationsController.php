<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationsController extends Controller
{
    public function index(){
        $locations = Location::all();

        return $locations;
    }
}
