<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Unioncouncil;
use Illuminate\Http\Request;
use App\Utility\AppUtility;

class UnioncouncilController extends Controller
{
    public function getAllUnioncouncils() {
        return response(['subdistricts' => Unioncouncil::all()]);
    }

    public function singleUnioncouncil(Request $request) {
        $unioncouncil = Unioncouncil::find($request->id);
        if(!$unioncouncil) {
            return response(['message' => 'Unioncouncil not found for the provided info']);
        }

        return response(['message' => 'request successful', 'unioncouncil' => $unioncouncil]);
    }
    public function createUnioncouncil(Request $request) {
        $request->validate([
            "subdistrict_id"=> "required|max:10",
            "name"=> "required|max:100",
            "area"=> "required|max:100",
            "population"=> "required|max:10",
        ]);

        $unioncouncil = new Unioncouncil();
        $utility = new AppUtility();
        $utility->commonCreate($request, $unioncouncil);
        return response(['data' => Unioncouncil::latest('created_at')->first()]);
    }

    public function updateUnioncouncil(Request $request) {
        $utility = new AppUtility();
        $unioncouncil = Unioncouncil::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $unioncouncil, "Unioncouncil");
        return response($utilityValue);
    }
}
