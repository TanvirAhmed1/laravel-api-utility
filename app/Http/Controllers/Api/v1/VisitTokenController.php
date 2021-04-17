<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\VisitToken;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class VisitTokenController extends Controller
{
    public function getAllVisitTokens(){
        return response(['VisitToken'=> VisitToken::all()]);
    }
    public function singleVisitToken(Request $request){
        $VisitToken = VisitToken::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($VisitToken, "VisitToken"));
    }
    public function createVisitToken(Request $request){
        $VisitToken = new VisitToken();
        $utility = new AppUtility();
        $utility->commonCreate($request, $VisitToken);
        return response(['data' => VisitToken::latest('created_at')->first()]);
    }
    public function updateVisitToken(Request $request){
        $VisitToken = VisitToken::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $VisitToken, "VisitToken");
        return response($utilityValue);
    }
}
