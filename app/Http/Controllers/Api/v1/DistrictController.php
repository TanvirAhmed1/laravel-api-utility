<?php

namespace App\Http\Controllers\Api\v1;
use App\Http\Controllers\Controller;
use App\Models\District;
use Illuminate\Http\Request;
use App\Utility\AppUtility;
class DistrictController extends Controller
{
//    private $utility;
//    public function __construct()
//    {
//        $this->utility = new AppUtility();
//    }
    public function getAllDistricts() {
        return response(['districts' => District::all()]);
    }

    public function singleDistrict(Request $request) {
        $district = District::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($district, "District"));
    }
    public function createDistrict(Request $request) {
        $request->validate([
            "division_id"=> "required|max:10",
            "name"=> "required|max:100",
            "area"=> "required|max:100",
            "population"=> "required|max:10",
        ]);

        $district = new District();
        $utility = new AppUtility();
        $utility->commonCreate($request, $district);
        return response(['data' => District::latest('created_at')->first()]);
    }


    public function updateDistrict(Request $request) {
        $utility = new AppUtility();
        $district = District::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $district, "District");

        return response($utilityValue);
    }
}
