<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\AdvisorProduct;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class AdvisorProductController extends Controller
{
    public function getAllAdvisorProducts(){
        return response(['AdvisorProduct'=> AdvisorProduct::all()]);
    }
    public function singleAdvisorProduct(Request $request){
        $AdvisorProduct = AdvisorProduct::where('advisor_id', $request->advisor_id)->get();
        $utility = new AppUtility();
        return response($utility->commonSingle($AdvisorProduct, "AdvisorProduct"));

    }
    public function createAdvisorProduct(Request $request){
        $AdvisorProduct = new AdvisorProduct();
        $utility = new AppUtility();
        $utility->commonCreate($request, $AdvisorProduct);
        return response(['data' => AdvisorProduct::latest('created_at')->first()]);
    }
    public function updateAdvisorProduct(Request $request){
        $AdvisorProduct = AdvisorProduct::where("advisor_id", $request->advisor_id)->get();
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdateWithoutId($request, $AdvisorProduct, "AdvisorProduct");
        return response($utilityValue);
    }
    public function deleteAdvisorProduct(Request $request){
        AdvisorProduct::where("advisor_id", $request->advisor_id)->where("product_id", $request->product_id)->delete();
        return response(['message'=>'Deletion successful!']);

    }
}
