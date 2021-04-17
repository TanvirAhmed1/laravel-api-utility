<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\LeadInterestEnq;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class LeadInterestEnqController extends Controller
{
    public function getAllLeadInterestEnqs(){
        return response(['LeadInterestEnq'=> LeadInterestEnq::all()]);
    }
    public function singleLeadInterestEnq(Request $request){
        $LeadInterestEnq = LeadInterestEnq::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($LeadInterestEnq, "LeadInterestEnq"));
    }
    public function createLeadInterestEnq(Request $request){
        $LeadInterestEnq = new LeadInterestEnq();
        $utility = new AppUtility();
        $utility->commonCreate($request, $LeadInterestEnq);
        return response(['data' => LeadInterestEnq::latest('created_at')->first()]);
    }
    public function updateLeadInterestEnq(Request $request){
        $LeadInterestEnq = LeadInterestEnq::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $LeadInterestEnq, "LeadInterestEnq");
        return response($utilityValue);
    }
}
