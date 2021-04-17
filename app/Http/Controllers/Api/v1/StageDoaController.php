<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\StageDoa;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class StageDoaController extends Controller
{
    public function getAllStageDoas(){
        return response(['StageDoa'=> StageDoa::all()]);
    }
    public function singleStageDoa(Request $request){
        $StageDoa = StageDoa::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($StageDoa, "StageDoa"));
    }
    public function createStageDoa(Request $request){
        $StageDoa = new StageDoa();
        $utility = new AppUtility();
        $utility->commonCreate($request, $StageDoa);
        return response(['data' => StageDoa::latest('created_at')->first()]);
    }
    public function updateStageDoa(Request $request){
        $StageDoa = StageDoa::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $StageDoa, "StageDoa");
        return response($utilityValue);
    }
}
