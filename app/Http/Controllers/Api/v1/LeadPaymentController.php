<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\LeadPayment;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class LeadPaymentController extends Controller
{
    public function getAllLeadPayments(){
        return response(['LeadPayment'=> LeadPayment::all()]);
    }
    public function singleLeadPayment(Request $request){
        $LeadPayment = LeadPayment::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($LeadPayment, "LeadPayment"));
    }
    public function createLeadPayment(Request $request){
        $request->validate([
            "paid_amount"=> "required|max:20"
        ]);
        $LeadPayment = new LeadPayment();
        $utility = new AppUtility();
        $utility->commonCreate($request, $LeadPayment);
        return response(['data' => LeadPayment::latest('created_at')->first()]);
    }
    public function updateLeadPayment(Request $request){
        $LeadPayment = LeadPayment::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $LeadPayment, "LeadPayment");
        return response($utilityValue);
    }
}
