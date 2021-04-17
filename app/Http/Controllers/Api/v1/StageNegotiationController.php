<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\StageNegotiation;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class StageNegotiationController extends Controller
{
    public function getAllStageNegotiations(){
        return response(['StageNegotiation'=> StageNegotiation::all()]);
    }
    public function singleStageNegotiation(Request $request){
        $StageNegotiation = StageNegotiation::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($StageNegotiation, "StageNegotiation"));
    }
    public function createStageNegotiation(Request $request){
        $StageNegotiation = new StageNegotiation();
        $utility = new AppUtility();
        $utility->commonCreate($request, $StageNegotiation);
        return response(['data' => StageNegotiation::latest('created_at')->first()]);
    }
    public function updateStageNegotiation(Request $request){
        $StageNegotiation = StageNegotiation::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $StageNegotiation, "StageNegotiation");
        return response($utilityValue);
    }
}
