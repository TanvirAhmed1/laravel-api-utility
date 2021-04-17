<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Property;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function getAllProperties(){
        return response(['Properties' => Property::All()]);
    }

    public function singleProperty(Request $request){
        $Property = Property::Find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($Property, "Property"));
    }
    public function createProperty(Request $request) {
        $request->validate([
            "size"=> "required",
            "price"=> "required"
        ]);

        $Property = new Property();
        $utility = new AppUtility();
        $utility->commonCreate($request, $Property);
        return response(['data' => Property::latest('created_at')->first()]);
    }

    public function updateProperty(Request $request) {
        $utility = new AppUtility();
        $Property = Property::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $Property, "Property");
        return response($utilityValue);
    }
}
