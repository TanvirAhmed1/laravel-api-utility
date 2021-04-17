<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\LeadProduct;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class LeadProductController extends Controller
{
    public function getAllLeadProducts(){
        return response(['LeadProduct'=> LeadProduct::all()]);
    }
    public function singleLeadProduct(Request $request){
        $LeadProduct = LeadProduct::where('lead_id', $request->lead_id)->get();
        $utility = new AppUtility();
        return response($utility->commonSingle($LeadProduct, "LeadProduct"));
//        return response(['id'=>$request->lead_id]);

    }
    public function createLeadProduct(Request $request){
//        $request->validate([
//            "paid_amount"=> "required|max:20"
//        ]);
        $LeadProduct = new LeadProduct();
        $utility = new AppUtility();
        $utility->commonCreate($request, $LeadProduct);
        return response(['data' => LeadProduct::latest('created_at')->first()]);
    }
    public function updateLeadProduct(Request $request){
        $LeadProduct = LeadProduct::where("lead_id", $request->lead_id)->get();
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdateWithoutId($request, $LeadProduct, "LeadProduct");
        return response($utilityValue);
    }
    public function deleteLeadProduct(Request $request){
        LeadProduct::where("lead_id", $request->lead_id)->where("product_id", $request->product_id)->delete();
//        $LeadProduct->delete();
        return response(['message'=>'Deletion successful!']);
//        return response(['message'=>$LeadProduct]);

    }
}
