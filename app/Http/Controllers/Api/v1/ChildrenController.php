<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Children;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class ChildrenController extends Controller
{
    public function getAllChildrens(){
        return response(['Childrens' => Children::All()]);
    }

    public function singleChildren(Request $request){
        $Children = Children::Find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($Children, "Children"));

    }
    public function createChildren(Request $request) {
        $request->validate([
            "bio_id"=> "required|max:10",
            "name"=> "required|max:100"
        ]);

        $Children = new Children();
        $utility = new AppUtility();
        $utility->commonCreate($request, $Children);
        return response(['data' => Children::latest('created_at')->first()]);
    }

    public function updateChildren(Request $request) {
        $utility = new AppUtility();
        $Children = Children::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $Children, "Children");
        return response($utilityValue);
    }
}
