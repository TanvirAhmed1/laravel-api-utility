<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class InstitueController extends Controller
{
    public function getAllInstitutes(){
        return response(['Institute'=> Institute::all()]);
    }
    public function singleInstitute(Request $request){
        $Institute = Institute::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($Institute, "Institute"));
    }
    public function createInstitute(Request $request){
        $request->validate([
            "name"=> "required|max:20"
        ]);
        $Institute = new Institute();
        $utility = new AppUtility();
        $utility->commonCreate($request, $Institute);
        return response(['data' => Institute::latest('created_at')->first()]);
    }
    public function updateInstitute(Request $request){
        $Institute = Institute::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $Institute, "Institute");
        return response($utilityValue);
    }
}
