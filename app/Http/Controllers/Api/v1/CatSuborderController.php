<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CatSuborder;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class CatSuborderController extends Controller
{
    public function getAllCatSuborders(){
        return response(['catsuborder'=> CatSuborder::all()]);
    }
    public function singleCatSuborder(Request $request){
        $catsuborder = CatSuborder::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($catsuborder, "Suborder Category"));
    }
    public function createCatSuborder(Request $request){
        $request->validate([
            "name"=> "required|max:100",
            "order_id"=> "required|max:10"
        ]);
        $catsuborder = new CatSuborder();
        $utility = new AppUtility();
        $utility->commonCreate($request, $catsuborder);
        return response(['data' => CatSuborder::latest('created_at')->first()]);
    }
    public function updateCatSuborder(Request $request){
        $catsuborder = CatSuborder::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $catsuborder, "Suborder Category");
        return response($utilityValue);
    }
}
