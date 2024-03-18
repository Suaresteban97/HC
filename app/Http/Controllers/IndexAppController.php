<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexAppController extends Controller
{
    public function index () {
        return view("index-app");
    }
}
