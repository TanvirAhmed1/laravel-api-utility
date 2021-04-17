<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Referee;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class RefereeController extends Controller
{
    public function getAllReferees(){
        return response(['Referees' => Referee::All()]);
    }

    public function singleReferee(Request $request){
        $Referee = Referee::Find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($Referee, "Referee"));
    }
    public function createReferee(Request $request) {
        $request->validate([
            "contact_id"=> "required|max:10",
            "name"=> "required|max:100"
        ]);

        $Referee = new Referee();
        $utility = new AppUtility();
        $utility->commonCreate($request, $Referee);
        return response(['data' => Referee::latest('created_at')->first()]);
    }

    public function updateReferee(Request $request) {
        $utility = new AppUtility();
        $Referee = Referee::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $Referee, "Referee");
        return response($utilityValue);
    }
}
