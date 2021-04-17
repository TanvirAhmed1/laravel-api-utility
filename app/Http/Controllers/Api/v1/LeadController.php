<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Lead;
use App\Models\LeadProduct;
use App\Models\Product;
use App\Models\StageCnc;
use App\Models\StageDoa;
use App\Models\StageFinancial;
use App\Models\StageMnm;
use App\Models\StageNegotiation;
use App\Models\StagePayment;
use App\Models\StageProjectVisit;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    public function getAllLeads(){
        return response(['Lead'=> Lead::all()]);
    }
    public function singleLead(Request $request){
        $Lead = Lead::find($request->id);
//        $utility = new AppUtility();
//        return $utility->commonSingle($Lead, "Lead");
        $Client = Contact::find($Lead->client_id);
        $Advisor = Contact::find($Lead->advisor_id);
        $LeadProducts = LeadProduct::where('lead_id', $Lead->id)->get();

        $cnc = StageCnc::where('lead_id', $Lead->id)->get();
        $mnm=StageMnm::where('lead_id', $Lead->id)->get();
        $visits=StageProjectVisit::where('lead_id', $Lead->id)->get();
        $negotiation=StageNegotiation::where('lead_id', $Lead->id)->get();
        $financial=StageFinancial::where('lead_id', $Lead->id)->get();
        $payment=StagePayment::where('lead_id', $Lead->id)->get();
        $doa=StageDoa::where('lead_id', $Lead->id)->get();


        $leadProdIds= [];
        foreach ($LeadProducts as $lp) {
            array_push($leadProdIds, $lp->product_id);
        }

        $Products = [];
        foreach ($leadProdIds as $id) {
            array_push($Products, Product::find($id));
        }

        return response(['lead' => $Lead, 'client' => $Client, 'advisor'=> $Advisor, 'products' => $Products, 'stage_cnc'=>$cnc, 'stage_mnm'=>$mnm, 'stage_visits'=>$visits, 'stage_financial'=>$financial, 'stage_negotiation'=>$negotiation, 'stage_doa'=>$doa]);
    }
    public function createLead(Request $request){
        $Lead = new Lead();
        $utility = new AppUtility();
        $utility->commonCreate($request, $Lead);
        return response(['data' => Lead::latest('created_at')->first()]);
    }
    public function updateLead(Request $request){
        $Lead = Lead::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $Lead, "Lead");
        return response($utilityValue);
    }
}
