<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\LeadEnquiryDetail;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class LeadEnquiryDetailController extends Controller
{
    public function getAllLeadEnquiryDetails(){
        return response(['LeadEnquiryDetail'=> LeadEnquiryDetail::all()]);
    }
    public function singleLeadEnquiryDetail(Request $request){
        $LeadEnquiryDetail = LeadEnquiryDetail::where('lead_interest_enq_id', $request->lead_interest_enq_id)->get();
        $utility = new AppUtility();
        return response($utility->commonSingle($LeadEnquiryDetail, "LeadEnquiryDetail"));
//        return response(['id'=>$request->lead_id]);

    }
    public function createLeadEnquiryDetail(Request $request){
//        $request->validate([
//            "paid_amount"=> "required|max:20"
//        ]);
        $LeadEnquiryDetail = new LeadEnquiryDetail();
        $utility = new AppUtility();
        $utility->commonCreate($request, $LeadEnquiryDetail);
        return response(['data' => LeadEnquiryDetail::latest('created_at')->first()]);
    }
    public function updateLeadEnquiryDetail(Request $request){
        $LeadEnquiryDetail = LeadEnquiryDetail::where("lead_interest_enq_id", $request->lead_interest_enq_id)->get();
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdateWithoutId($request, $LeadEnquiryDetail, "LeadEnquiryDetail");
        return response($utilityValue);
    }
    public function deleteLeadEnquiryDetail(Request $request){
        LeadEnquiryDetail::where("lead_interest_enq_id", $request->lead_interest_enq_id)->delete();
        return response(['message'=>'Deletion successful!']);
    }
}
