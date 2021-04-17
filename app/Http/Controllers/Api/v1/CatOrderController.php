<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CatOrder;
use Illuminate\Http\Request;
use App\Utility\AppUtility;

class CatOrderController extends Controller
{
    public function getAllCatOrders(){
        return response(['catorder'=> CatOrder::all()]);
    }
    public function singleCatOrder(Request $request){
        $catorder = CatOrder::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($catorder, "Order Category"));
    }
    public function createCatOrder(Request $request){
        $request->validate([
            "name"=> "required|max:100",
            "class_id"=> "required|max:10"
        ]);
        $catorder = new CatOrder();
        $utility = new AppUtility();
        $utility->commonCreate($request, $catorder);
        return response(['data' => CatOrder::latest('created_at')->first()]);
    }
    public function updateCatOrder(Request $request){
        $catorder = CatOrder::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $catorder, "Order Category");
        return response($utilityValue);
    }
}
