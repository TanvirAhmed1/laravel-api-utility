<?php

namespace App\Http\Controllers\Api\v1;

use App\Division as AppDivision;
use App\Http\Controllers\Controller;
use App\Models\Division;
use Illuminate\Http\Request;
use App\Utility\AppUtility;

class DivisionController extends Controller
{
    //
    public function getAllDivisions() {
        return response(['divisions' => Division::all()]);
    }

    public function singleDivision(Request $request) {
        $division = Division::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($division, "Division"));
    }
    public function createDivision(Request $request) {
        $request->validate([
            "name"=> "required|max:100",
            "area"=> "required|max:100",
            "population"=> "required|max:10",
        ]);

        $division = new Division();
        $utility = new AppUtility();
        $utility->commonCreate($request, $division);

        return response(['data' => Division::latest('created_at')->first()]);
    }

    public function updateDivision(Request $request) {
        $utility = new AppUtility();
        $division = Division::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $division, "Division");
        return response($utilityValue);
    }
}
