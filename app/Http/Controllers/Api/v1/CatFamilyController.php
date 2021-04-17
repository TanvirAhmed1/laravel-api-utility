<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CatFamily;
use Illuminate\Http\Request;
use App\Utility\AppUtility;

class CatFamilyController extends Controller
{
    public function getAllCatFamilies(){
        return response(['catfamily'=> CatFamily::all()]);
    }
    public function singleCatFamily(Request $request){
        $catfamily = CatFamily::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($catfamily, "Family Category"));
    }
    public function createCatFamily(Request $request){
        $request->validate([
            "name"=> "required|max:100",
            "suborder_id"=> "required|max:10"
        ]);
        $catfamily = new CatFamily();
        $utility = new AppUtility();
        $utility->commonCreate($request, $catfamily);
        return response(['data' => CatFamily::latest('created_at')->first()]);
    }
    public function updateCatFamily(Request $request){
        $catfamily = CatFamily::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $catfamily, "Family Category");
        return response($utilityValue);
    }
}
