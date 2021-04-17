<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Village;
use Illuminate\Http\Request;
use App\Utility\AppUtility;

class VillageController extends Controller
{
    public function getAllVillages() {
        return response(['villages' => Village::all()]);
    }

    public function singleVillage(Request $request) {
        $village = Village::find($request->id);
        if(!$village) {
            return response(['message' => 'Village not found for the provided info']);
        }

        return response(['message' => 'request successful', 'village' => $village]);
    }
    public function createVillage(Request $request) {
        $request->validate([
            "unioncouncil_id"=> "required|max:10",
            "name"=> "required|max:100",
            "area"=> "required|max:100",
            "population"=> "required|max:10",
        ]);

        $village = new Village();
        $utility = new AppUtility();
        $utility->commonCreate($request, $village);

        return response(['data' => Village::latest('created_at')->first()]);
    }

    public function updateVillage(Request $request) {
        $utility = new AppUtility();
        $village = Village::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $village, "Village");
        return response($utilityValue);
    }
}
