<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Organization;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class OrganizationController extends Controller
{
    public function getAllOrganizations(){
        return response(['Organization'=> Organization::all()]);
    }
    public function singleOrganization(Request $request){
        $Organization = Organization::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($Organization, "Organization"));
    }
    public function createOrganization(Request $request){
        $request->validate([
            "name"=> "required|max:20"
        ]);
        $Organization = new Organization();
        $utility = new AppUtility();
        $utility->commonCreate($request, $Organization);
        return response(['data' => Organization::latest('created_at')->first()]);
    }
    public function updateOrganization(Request $request){
        $Organization = Organization::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $Organization, "Organization");
        return response($utilityValue);
    }
}
