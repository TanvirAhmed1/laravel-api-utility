<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Occupation;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class OccupationController extends Controller
{
    public function getAllOccupations(){
        return response(['Occupation'=> Occupation::all()]);
    }
    public function singleOccupation(Request $request){
        $Occupation = Occupation::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($Occupation, "Occupation"));
    }
    public function createOccupation(Request $request){
        $request->validate([
            "name"=> "required|max:20"
        ]);
        $Occupation = new Occupation();
        $utility = new AppUtility();
        $utility->commonCreate($request, $Occupation);
        return response(['data' => Occupation::latest('created_at')->first()]);
    }
    public function updateOccupation(Request $request){
        $Occupation = Occupation::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $Occupation, "Occupation");
        return response($utilityValue);
    }
}
