<?php

namespace App\Http\Controllers\Api\v1;

use App\Division as AppDivision;
use App\Http\Controllers\Controller;
use App\Models\Subdistrict;
use Illuminate\Http\Request;
use App\Utility\AppUtility;

class SubdistrictController extends Controller
{
    //
    public function getAllSubdistricts() {
        return response(['subdistricts' => Subdistrict::all()]);
    }

    public function singleSubdistrict(Request $request) {
        $subdistrict = Subdistrict::find($request->id);
        if(!$subdistrict) {
            return response(['message' => 'Subdistrict not found for the provided info']);
        }

        return response(['message' => 'request successful', 'subdistrict' => $subdistrict]);
    }
    public function createSubdistrict(Request $request) {
        $request->validate([
            "district_id"=> "required|max:10",
            "name"=> "required|max:100",
            "area"=> "required|max:100",
            "population"=> "required|max:10",
        ]);

        $subdistrict = new Subdistrict();
        $utility = new AppUtility();
        $utility->commonCreate($request, $subdistrict);
        return response(['data' => Subdistrict::latest('created_at')->first()]);
    }

    public function updateSubdistrict(Request $request) {
        $utility = new AppUtility();
        $subdistrict = Subdistrict::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $subdistrict, "Subdistrict");
        return response($utilityValue);
    }
}
