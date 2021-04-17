<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CatGenus;
use Illuminate\Http\Request;
use App\Utility\AppUtility;

class CatGenusController extends Controller
{
    public function getAllCatGenuses(){
        return response(['catsuborder'=> CatGenus::all()]);
    }
    public function singleCatGenus(Request $request){
        $catsuborder = CatGenus::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($catsuborder, "Suborder Category"));
    }
    public function createCatGenus(Request $request){
        $request->validate([
            "name"=> "required|max:100",
            "family_id"=> "required|max:10"
        ]);
        $catsuborder = new CatGenus();
        $utility = new AppUtility();
        $utility->commonCreate($request, $catsuborder);
        return response(['data' => CatGenus::latest('created_at')->first()]);
    }
    public function updateCatGenus(Request $request){
        $catsuborder = CatGenus::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $catsuborder, "Suborder Category");
        return response($utilityValue);
    }
}
