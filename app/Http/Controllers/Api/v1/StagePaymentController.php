<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\StagePayment;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class StagePaymentController extends Controller
{
    public function getAllStagePayments(){
        return response(['StagePayment'=> StagePayment::all()]);
    }
    public function singleStagePayment(Request $request){
        $StagePayment = StagePayment::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($StagePayment, "StagePayment"));
    }
    public function createStagePayment(Request $request){
        $StagePayment = new StagePayment();
        $utility = new AppUtility();
        $utility->commonCreate($request, $StagePayment);
        return response(['data' => StagePayment::latest('created_at')->first()]);
    }
    public function updateStagePayment(Request $request){
        $StagePayment = StagePayment::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $StagePayment, "StagePayment");
        return response($utilityValue);
    }
}
