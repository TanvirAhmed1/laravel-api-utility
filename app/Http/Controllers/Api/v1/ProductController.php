<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getAllProducts(){
        return response(['product'=> Product::all()]);
    }

    public function singleProduct(Request $request){
        $product = Product::find($request->id);
        $product->feature;
        $utility = new AppUtility();
        return $utility->commonSingle($product, "Product");
    }

    public function createProduct(Request $request){
        $request->validate([
            "name"=> "required|max:100"
        ]);
        $product = new Product();
        $utility = new AppUtility();
        $utility->commonCreate($request, $product);
        return response(['data' => Product::latest('created_at')->first()]);
    }
    public function updateProduct(Request $request){
        $product = Product::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $product, "Product");
        return response($utilityValue);
    }
}
