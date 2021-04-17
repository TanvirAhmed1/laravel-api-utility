<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\StageCnc;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class StageCncController extends Controller
{
    public function getAllStageCncs() {
        return response(['stagecncs' => StageCnc::all()]);
    }

    public function singleStageCnc(Request $request) {
        $StageCnc = StageCnc::find($request->id);
        if(!$StageCnc) {
            return response(['message' => 'StageCnc not found for the provided info']);
        }

        return response(['message' => 'request successful', 'StageCnc' => $StageCnc]);
    }
    public function createStageCnc(Request $request) {
//        $request->validate([
//            "subdistrict_id"=> "required|max:10",
//            "name"=> "required|max:100",
//            "area"=> "required|max:100",
//            "population"=> "required|max:10",
//        ]);

        $StageCnc = new StageCnc();
        $utility = new AppUtility();
        $utility->commonCreate($request, $StageCnc);
        return response(['data' => StageCnc::latest('created_at')->first()]);
    }

    public function updateStageCnc(Request $request) {
        $utility = new AppUtility();
        $StageCnc = StageCnc::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $StageCnc, "StageCnc");
        return response($utilityValue);
    }
}
