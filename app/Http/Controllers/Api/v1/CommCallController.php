<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CommCall;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class CommCallController extends Controller
{
    public function getAllCommCalls(){
        return response(['CommCall'=> CommCall::all()]);
    }
    public function singleCommCall(Request $request){
        $CommCall = CommCall::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($CommCall, "CommCall"));
    }
    public function createCommCall(Request $request){
        $request->validate([
            "paid_amount"=> "required|max:20"
        ]);
        $CommCall = new CommCall();
        $utility = new AppUtility();
        $utility->commonCreate($request, $CommCall);
        return response(['data' => CommCall::latest('created_at')->first()]);
    }
    public function updateCommCall(Request $request){
        $CommCall = CommCall::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $CommCall, "CommCall");
        return response($utilityValue);
    }
}
