<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Experience;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function getAllExperiences() {
        return response(['experiences' => Experience::all()]);
    }

    public function singleExperience(Request $request){
        $experience = Experience::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($experience, "Experience"));
    }
    public function createExperience(Request $request) {
        $request->validate([
            "contact_id"=> "required|max:20",
            "experience_years"=> "required|max:10",
            "position"=> "required|max:10",
            "experience_sector"=> "required|max:10"
        ]);

        $experience = new Experience();
        $utility = new AppUtility();
        $utility->commonCreate($request, $experience);

        return response(['data' => Experience::latest('created_at')->first()]);
    }

    public function updateExperience(Request $request) {
        $utility = new AppUtility();
        $experience = Experience::find($request->id);
        $utilityValue = $utility->commonUpdate($request, $experience, "Experience");
        return response($utilityValue);
    }
}
