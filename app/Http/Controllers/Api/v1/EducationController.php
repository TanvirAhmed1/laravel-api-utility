<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Education;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function getAllEducations() {
        return response(['educations' => Education::all()]);
    }

    public function singleEducation(Request $request){
        $education = Education::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($education, "Education"));
    }
    public function createEducation(Request $request) {
        $request->validate([
            "bio_id"=> "required|max:25",
            "completion_year"=> "required|max:10",
        ]);

        $education = new Education();
        $utility = new AppUtility();
        $utility->commonCreate($request, $education);

        return response(['data' => Education::latest('created_at')->first()]);
    }

    public function updateEducation(Request $request) {
        $utility = new AppUtility();
        $education = Education::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $education, "Education");
        return response($utilityValue);
    }
}
