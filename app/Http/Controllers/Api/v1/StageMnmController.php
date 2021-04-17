<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\StageMnm;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class StageMnmController extends Controller
{
    public function getAllStageMnms(){
        return response(['StageMnm'=> StageMnm::all()]);
    }
    public function singleStageMnm(Request $request){
        $StageMnm = StageMnm::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($StageMnm, "StageMnm"));
    }
    public function createStageMnm(Request $request){
        $StageMnm = new StageMnm();
        $utility = new AppUtility();
        $utility->commonCreate($request, $StageMnm);
        return response(['data' => StageMnm::latest('created_at')->first()]);
    }
    public function updateStageMnm(Request $request){
        $StageMnm = StageMnm::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $StageMnm, "StageMnm");
        return response($utilityValue);
    }
}
