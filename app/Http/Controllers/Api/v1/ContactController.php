<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Utility\AppUtility;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getAllContacts(){
        return response(['Contact'=> Contact::all()]);
    }
    public function singleContact(Request $request){
        $Contact = Contact::find($request->id);
        $Contact->bio;
        $Contact->education;
        $Contact->experience;
        $Contact->referee;
        $Contact->address;

        $utility = new AppUtility();
//        $data = [$Contact, $bio];
//        return response($utility->commonSingle($Contact, "Contact"));
        return response(['data' => $Contact]);
    }
    public function createContact(Request $request){
        $request->validate([
            "education_id"=> "required|max:100",
            "Contact_title"=> "required|max:10",
        ]);
        $Contact = new Contact();
        $utility = new AppUtility();
        $utility->commonCreate($request, $Contact);
        return response(['data' => Contact::latest('created_at')->first()]);
    }
    public function updateContact(Request $request){
        $Contact = Contact::find($request->id);
        $utility = new AppUtility();
        $utilityValue = $utility->commonUpdate($request, $Contact, "Contact");
        return response($utilityValue);
    }
}
