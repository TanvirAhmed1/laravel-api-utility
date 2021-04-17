<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Municipality;
use App\Utility\AppUtility;

class MunicipalityController extends Controller
{
    public function getAllMunicipalities() {
        return response(['subdistricts' => Municipality::all()]);
    }

    public function singleMunicipality(Request $request) {
        $municipality = Municipality::find($request->id);
        if(!$municipality) {
            return response(['message' => 'Municipality not found for the provided info']);
        }

        return response(['message' => 'request successful', 'municipality' => $municipality]);
    }
    public function createMunicipality(Request $request) {
        $request->validate([
            "subdistrict_id"=> "required|max:10",
            "name"=> "required|max:100",
            "area"=> "required|max:100",
            "population"=> "required|max:10",
        ]);

        $municipality = new Municipality();
        $utility = new AppUtility();
        $utility->commonCreate($request, $municipality);
        return response(['data' => Municipality::latest('created_at')->first()]);
    }

    public function updateMunicipality(Request $request) {
        $utility = new AppUtility();
        $municipality = Municipality::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $municipality, "Municipality");
        return response($utilityValue);
    }
}
