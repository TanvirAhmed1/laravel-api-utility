<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{
    //
    public function index()
    {
        //
        return response(['data'=>Address::all()]);
    }

    public function singleAddress(Request $request)
    {
        //
        $address = Address::find($request->id);
        if($address) {
            return response(['data'=>$address]);
        } else {
            return response(['message'=>'Address not found!']);
        }
    }

    public function createAddress(Request $request) {
        $request->validate([
            "house_number"=> "required|max:100",
            "post_office"=> "required|max:100",
            "postal_code"=> "required|max:10",
            "police_station"=> "required|max:100",
            "district"=> "required|max:100",
            "division"=> "required|max:100",
            "country"=> "required|max:100",
        ]);

        $address = new Address();
        $newData = $request->all();
        foreach ($newData as $key => $value) {
            $address[$key] = $newData[$key];
        }
        $address->save();

        return response(['data' => Address::latest('created_at')->first()]);
    }

    public function updateAddress(Request $request) {
    //        $request->validate([
    //            "house_number"=> "required|max:100",
    //            "post_office"=> "required|max:100",
    //            "postal_code"=> "required|max:10",
    //            "police_station"=> "required|max:100",
    //            "district"=> "required|max:100",
    //            "division"=> "required|max:100",
    //            "country"=> "required|max:100",
    //        ]);

        $newAddressData = $request->all();
        $oldAddress = Address::find($request->id);


        foreach ($newAddressData as $key => $value) {
            if (!strcmp($key,'id')) {continue;}
            else { $oldAddress[$key] = $newAddressData[$key]; }
        }

        $oldAddress->save();
        $updatedAddress = Address::find($request->id);
        return response(['data' => $updatedAddress]);
    }

    public function deactivateAddress(Request $request) {
        $address = Address::find($request->id);
        if($address) {
            $address->is_active = 0;
            $address->save();
            return response(['message' => 'Address deactivated!']);
        }else {
            return response(['message' => 'Address not found!' ]);
        }
    }

    public function activateAddress(Request $request) {
        $address = Address::find($request->id);
        if($address) {
            $address->is_active = 1;
            $address->save();
            return response(['message' => 'Address Re-activated!']);
        }else {
            return response(['message' => 'Address not found!' ]);
        }
    }
}
