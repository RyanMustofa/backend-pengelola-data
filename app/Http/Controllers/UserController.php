<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    public function register(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = bcrypt($request->password);
        $api_token = sha1(time());

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->api_token = $api_token;
        $user->save();
        if($user){
            return response()->json($user);
        }else{
            return response()->json(['message' => "sorry your email hasbeen taken"]);
        }
    }
    public function login(Request $request){
        $credential = $request->only('email','password');
        $validation = Auth::attempt($credential);
        if($validation){
            $user = Auth::User();
            $user->api_token = sha1(time());
            $user->id = $user->id;
            $user->save();
            return response()->json($user);
        }else{
            return response()->json(['message' => "sorry your email or password in correct or unregister"],401);
        }
    }
}
