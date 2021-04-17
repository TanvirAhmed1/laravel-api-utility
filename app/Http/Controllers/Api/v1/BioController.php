<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Bio;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class BioController extends Controller
{
    public function getAllBios(){
        return response(['bio'=> Bio::all()]);
    }
    public function singleBio(Request $request){
        $bio = Bio::find($request->id);
        $bio->siblings;
        $bio->children;
        return response(["data" => $bio]);
//        $utility = new AppUtility();
//        return response($utility->commonSingle($bio, "Bio"));
    }
    public function createBio(Request $request){
        $request->validate([
            "contact_id"=> "required|max:100",
            "father_name"=> "required|max:100",
            "mother_name"=> "required|max:100",
            "birth_day"=> "required|max:100",
            "birth_month"=> "required|max:100",
            "birth_year"=> "required|max:100",
            "birth_gender"=> "required|max:100"
        ]);
        $bio = new Bio();
        $utility = new AppUtility();
        $utility->commonCreate($request, $bio);
        return response(['data' => Bio::latest('created_at')->first()]);
    }
    public function updateBio(Request $request){
        $bio = Bio::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $bio, "Bio");
        return response($utilityValue);
    }
}
