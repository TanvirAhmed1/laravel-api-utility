<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\MeetingNote;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class MeetingNoteController extends Controller
{
    public function getAllMeetingNotes(){
        return response(['MeetingNote'=> MeetingNote::all()]);
    }
    public function singleMeetingNote(Request $request){
        $MeetingNote = MeetingNote::find($request->id);
        $utility = new AppUtility();
        return response($utility->commonSingle($MeetingNote, "MeetingNote"));
    }
    public function createMeetingNote(Request $request){
        $MeetingNote = new MeetingNote();
        $utility = new AppUtility();
        $utility->commonCreate($request, $MeetingNote);
        return response(['data' => MeetingNote::latest('created_at')->first()]);
    }
    public function updateMeetingNote(Request $request){
        $MeetingNote = MeetingNote::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $MeetingNote, "MeetingNote");
        return response($utilityValue);
    }
}
