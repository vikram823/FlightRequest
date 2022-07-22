<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\RequestController;


class AuthenticationController extends Controller
{
    //GET login
    public function form()
    {

        return view('login');

    }

    //POST login
    public function login(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $user = DB::table('users')->where('email', $email)->get();
        if (!$user) {

            return response()->json(['success'=>false, 'message' => 'Incorrect Email']);
        
        }
        if (!Hash::check($password, $user[0]->password)) {

            return response()->json(['success'=>false, 'message' => 'Incorrect Password']);
        
        }
        //    Below line will return json data which will be used for the app. Right now not required.
            return response()->json(['success'=>true,'message'=>'success', 'data' => $user[0]->api_token]);

        // return redirect()->action(

        //     [RequestController::class, 'show'], ['id' => $user[0]->api_token]
        
        // );
        // return dd("Works");
    }
}