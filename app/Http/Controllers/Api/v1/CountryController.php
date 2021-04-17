<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    //
    public function getAllCountries() {
        return response(['countries' => Country::all()]);
    }

    public function singleCountry(Request $request) {
        $country = Country::find($request->id);
        if(!$country) {
            return response(['message' => 'Country not found for the provided info']);
        }

        return response(['message' => 'request successful', 'country' => $country]);
    }
}
