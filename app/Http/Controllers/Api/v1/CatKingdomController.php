<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CatKingdom;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class CatKingdomController extends Controller
{
    //
    public function getAllCatKingdoms(){
        return response(['catkingdom'=> CatKingdom::all()]);
    }
    public function singleCatKingdom(Request $request){
        $catkingdom = CatKingdom::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($catkingdom, "Kingdom Category"));
    }
    public function createCatKingdom(Request $request){
        $request->validate([
            "name"=> "required|max:100",
            "domain_id"=> "required|max:10"
        ]);
        $catkingdom = new CatKingdom();
        $utility = new AppUtility();
        $utility->commonCreate($request, $catkingdom);
        return response(['data' => CatKingdom::latest('created_at')->first()]);
    }
    public function updateCatKingdom(Request $request){
        $catkingdom = CatKingdom::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $catkingdom, "Kingdom Category");
        return response($utilityValue);
    }
}
