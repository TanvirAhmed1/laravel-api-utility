<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Sibling;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class SiblingController extends Controller
{
    public function getAllSiblings(){
        return response(['Siblings' => Sibling::All()]);
    }

    public function singleSibling(Request $request){
        $sibling = Sibling::Find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($sibling, "Sibling"));

    }
    public function createSibling(Request $request) {
        $request->validate([
            "bio_id"=> "required|max:10",
            "name"=> "required|max:100"
        ]);

        $sibling = new Sibling();
        $utility = new AppUtility();
        $utility->commonCreate($request, $sibling);
        return response(['data' => Sibling::latest('created_at')->first()]);
    }

    public function updateSibling(Request $request) {
        $utility = new AppUtility();
        $sibling = Sibling::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $sibling, "Sibling");
        return response($utilityValue);
    }
}
