<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Citycorporation;
use App\Utility\AppUtility;
class CitycorporationController extends Controller
{
    public function getAllCitycorporations(){
        return response(['citycorporations' => Citycorporation::All()]);
    }

    public function singleCitycorporation(Request $request){
        $citycorporation = Citycorporation::Find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($citycorporation, "City corporation"));

    }
    public function createCitycorporation(Request $request) {
        $request->validate([
            "district_id"=> "required|max:10",
            "name"=> "required|max:100",
            "area"=> "required|max:100",
            "population"=> "required|max:10",
        ]);

        $citycorporation = new Citycorporation();
        $utility = new AppUtility();
        $utility->commonCreate($request, $citycorporation);
        return response(['data' => Citycorporation::latest('created_at')->first()]);
    }

        public function updateCitycorporation(Request $request) {
            $utility = new AppUtility();
            $citycorporation = Citycorporation::find($request->id);
            $utilityValue = $utility->commonUpdate($request, $citycorporation, "Citycorporation");
            return response($utilityValue);
        }
}
