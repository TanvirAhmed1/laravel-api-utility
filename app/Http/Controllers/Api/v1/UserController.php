<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //
    public function register(Request $request) {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'email|required|unique:users',
            'password' => 'required|confirmed'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create($validatedData);
        $accessToken = $user->createToken('authToken')->accessToken;

        return response(['user'=>$user, 'access_token'=>$accessToken]);
    }

    public function login (Request $request) {
        $validatedLoginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(!Auth::attempt($validatedLoginData)) {
            return response(['message' => 'Invalid Credentials']);
        }

        $accessToken = Auth::user()->createToken('authToken')->accessToken;

        return response(['user' => Auth::user(), 'access_token' => $accessToken]);
    }

    public function logout() {
        Auth::logout();
        Session::flush();
    }

//    public function requestNewToken(Request $request) {
//        $this->login($request);
//    }
}
