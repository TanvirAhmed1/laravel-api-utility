<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\ProductFeature;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class ProductFeatureController extends Controller
{
    public function getAllProductFeatures(){
        return response(['productfeature'=> ProductFeature::all()]);
    }

    public function singleProductFeature(Request $request){
        $productfeature = ProductFeature::find($request->id);
        $utility = new AppUtility();
        return $utility->commonSingle($productfeature, "Product Feature");
    }
    public function createProductFeature(Request $request){
//        $request->validate([
//            "name"=> "required|max:100"
//        ]);
        $productfeature = new ProductFeature();
        $utility = new AppUtility();
        $utility->commonCreate($request, $productfeature);
        return response(['data' => ProductFeature::latest('created_at')->first()]);
    }
    public function updateProductFeature(Request $request){
        $productfeature = ProductFeature::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $productfeature, "Product Feature");
        return response($utilityValue);
    }
}
