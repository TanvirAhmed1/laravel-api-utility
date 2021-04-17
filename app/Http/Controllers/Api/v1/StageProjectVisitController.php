<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\StageProjectVisit;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class StageProjectVisitController extends Controller
{
    public function getAllStageProjectVisits(){
        return response(['StageProjectVisit'=> StageProjectVisit::all()]);
    }
    public function singleStageProjectVisit(Request $request){
        $StageProjectVisit = StageProjectVisit::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($StageProjectVisit, "StageProjectVisit"));
    }
    public function createStageProjectVisit(Request $request){
        $StageProjectVisit = new StageProjectVisit();
        $utility = new AppUtility();
        $utility->commonCreate($request, $StageProjectVisit);
        return response(['data' => StageProjectVisit::latest('created_at')->first()]);
    }
    public function updateStageProjectVisit(Request $request){
        $StageProjectVisit = StageProjectVisit::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $StageProjectVisit, "StageProjectVisit");
        return response($utilityValue);
    }
}
