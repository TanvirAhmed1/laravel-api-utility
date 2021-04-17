<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Degree;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class DegreeController extends Controller
{
    public function getAllDegrees(){
        return response(['Degree'=> Degree::all()]);
    }
    public function singleDegree(Request $request){
        $Degree = Degree::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($Degree, "Degree"));
    }
    public function createDegree(Request $request){
        $request->validate([
            "education_id"=> "required|max:100",
            "degree_title"=> "required|max:10",
        ]);
        $Degree = new Degree();
        $utility = new AppUtility();
        $utility->commonCreate($request, $Degree);
        return response(['data' => Degree::latest('created_at')->first()]);
    }
    public function updateDegree(Request $request){
        $Degree = Degree::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $Degree, "Degree");
        return response($utilityValue);
    }
}
