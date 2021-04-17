<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\NegotiationDetail;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class NegotiationDetailController extends Controller
{
    public function getAllNegotiationDetails() {
        return response(['NegotiationDetails' => NegotiationDetail::all()]);
    }

    public function singleNegotiationDetail(Request $request) {
        $NegotiationDetail = NegotiationDetail::find($request->id);
        if(!$NegotiationDetail) {
            return response(['message' => 'NegotiationDetail not found for the provided info']);
        }

        return response(['message' => 'request successful', 'NegotiationDetail' => $NegotiationDetail]);
    }
    public function createNegotiationDetail(Request $request) {

        $NegotiationDetail = new NegotiationDetail();
        $utility = new AppUtility();
        $utility->commonCreate($request, $NegotiationDetail);
        return response(['data' => NegotiationDetail::latest('created_at')->first()]);
    }

    public function updateNegotiationDetail(Request $request) {
        $utility = new AppUtility();
        $NegotiationDetail = NegotiationDetail::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $NegotiationDetail, "NegotiationDetail");
        return response($utilityValue);
    }
}
