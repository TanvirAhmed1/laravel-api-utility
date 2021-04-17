<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Ward;
use Illuminate\Http\Request;
use App\Utility\AppUtility;

class WardController extends Controller
{
    public function getAllWardes() {
        return response(['wardes' => Ward::all()]);
    }

    public function singleWard(Request $request) {
        $ward = Ward::find($request->id);
        if(!$ward) {
            return response(['message' => 'Ward not found for the provided info']);
        }

        return response(['message' => 'request successful', 'ward' => $ward]);
    }
    public function createWard(Request $request) {
        $request->validate([
            "citycorporation_id"=> "required|max:10",
            "municipality_id"=> "required|max:10",
            "name"=> "required|max:100",
            "area"=> "required|max:100",
            "population"=> "required|max:10",
        ]);

        $ward = new Ward();
        $utility = new AppUtility();
        $utility->commonCreate($request, $ward);
        return response(['data' => Ward::latest('created_at')->first()]);
    }

    public function updateWard(Request $request) {
            $utility = new AppUtility();
            $village = Ward::find($request->id);
            $utilityValue = $utility->commonUpdate($request, $village, "Village");
            return response($utilityValue);
        }
}
