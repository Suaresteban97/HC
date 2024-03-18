<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Owner;


class OwnerController extends Controller
{
    public function index(){
        $owners = Owner::all();

        return $owners;
    }

    public function store(Request $request){

        $data = $request->all();

        $owner = new Owner();

        $owner->name = "";
        $owner->nit = "";
        $owner->user = "";
        $owner->email = "";

        $owner->save();
    }

    public function edit(Request $request, $id){

        $data = $request->all();

        $updateOwner = Owner::where("nit", $id)->first();

        $updateOwner->name = "";
        $updateOwner->nit = "";
        $updateOwner->user = "";
        $updateOwner->email = "";

        $updateOwner->save();
    }

    public function delete($id){

        $updateOwner = Owner::where("nit", $id)->delete();
    }
}
