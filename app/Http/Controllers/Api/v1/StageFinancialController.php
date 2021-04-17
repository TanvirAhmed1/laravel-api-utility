<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\StageFinancial;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class StageFinancialController extends Controller
{
    public function getAllStageFinancials(){
        return response(['StageFinancial'=> StageFinancial::all()]);
    }
    public function singleStageFinancial(Request $request){
        $StageFinancial = StageFinancial::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($StageFinancial, "StageFinancial"));
    }
    public function createStageFinancial(Request $request){
        $StageFinancial = new StageFinancial();
        $utility = new AppUtility();
        $utility->commonCreate($request, $StageFinancial);
        return response(['data' => StageFinancial::latest('created_at')->first()]);
    }
    public function updateStageFinancial(Request $request){
        $StageFinancial = StageFinancial::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $StageFinancial, "StageFinancial");
        return response($utilityValue);
    }
}
