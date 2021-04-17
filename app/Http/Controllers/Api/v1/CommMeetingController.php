<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\CommMeeting;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class CommMeetingController extends Controller
{
    public function getAllCommMeetings(){
        return response(['CommMeeting'=> CommMeeting::all()]);
    }
    public function singleCommMeeting(Request $request){
        $CommMeeting = CommMeeting::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($CommMeeting, "CommMeeting"));
    }
    public function createCommMeeting(Request $request){
        $CommMeeting = new CommMeeting();
        $utility = new AppUtility();
        $utility->commonCreate($request, $CommMeeting);
        return response(['data' => CommMeeting::latest('created_at')->first()]);
    }
    public function updateCommMeeting(Request $request){
        $CommMeeting = CommMeeting::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $CommMeeting, "CommMeeting");
        return response($utilityValue);
    }
}
