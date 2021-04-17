<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CatClass;
use Illuminate\Http\Request;
use App\Utility\AppUtility;

class CatClassController extends Controller
{
    public function getAllCatClasses(){
        return response(['catclass'=> CatClass::all()]);
    }
    public function singleCatClass(Request $request){
        $catclass = CatClass::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($catclass, "Class Category"));
    }
    public function createCatClass(Request $request){
        $request->validate([
            "name"=> "required|max:100",
            "kingdom_id"=> "required|max:10"
        ]);
        $catclass = new CatClass();
        $utility = new AppUtility();
        $utility->commonCreate($request, $catclass);
        return response(['data' => CatClass::latest('created_at')->first()]);
    }
    public function updateCatClass(Request $request){
        $catclass = CatClass::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $catclass, "Class Category");
        return response($utilityValue);
    }
}
