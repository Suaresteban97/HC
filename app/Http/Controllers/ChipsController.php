<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Chip;

class ChipsController extends Controller
{
    public function index(){
        $chips = Chip::all();

        return $chips;
    }
}
