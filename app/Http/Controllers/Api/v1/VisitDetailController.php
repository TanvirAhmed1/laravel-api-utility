<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\VisitDetail;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class VisitDetailController extends Controller
{
    public function getAllVisitDetails(){
        return response(['VisitDetail'=> VisitDetail::all()]);
    }
    public function singleVisitDetail(Request $request){
        $VisitDetail = VisitDetail::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($VisitDetail, "VisitDetail"));
    }
    public function createVisitDetail(Request $request){
        $VisitDetail = new VisitDetail();
        $utility = new AppUtility();
        $utility->commonCreate($request, $VisitDetail);
        return response(['data' => VisitDetail::latest('created_at')->first()]);
    }
    public function updateVisitDetail(Request $request){
        $VisitDetail = VisitDetail::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $VisitDetail, "VisitDetail");
        return response($utilityValue);
    }
}
