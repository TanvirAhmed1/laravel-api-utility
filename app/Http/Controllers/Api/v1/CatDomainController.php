<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CatDomain;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class CatDomainController extends Controller
{
    public function getAllCatDomains(){
        return response(['catdomain'=> CatDomain::all()]);
    }
    public function singleCatDomain(Request $request){
        $catdomain = CatDomain::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($catdomain, "Domain Category"));
    }
    public function createCatDomain(Request $request){
        $request->validate([
            "name"=> "required|max:100"
        ]);
        $catdomain = new CatDomain();
        $utility = new AppUtility();
        $utility->commonCreate($request, $catdomain);
        return response(['data' => CatDomain::latest('created_at')->first()]);
    }
    public function updateCatDomain(Request $request){
        $catdomain = CatDomain::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $catdomain, "Domain Category");
        return response($utilityValue);
    }
}
