<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RequestController extends Controller
{   
    //GET All Requests (Administrator)
    public function index()
    {
        return DB::table('requests')->get();
    }


    //GET Request by Id
    public function show($id)
    {
        return DB::table('requests')->where('user_id', $id)->get();
    }

    
    //GET Form to create a new Request
    public function form(){
        return view('requests');
    }


    //POST Requests
    public function store(Request $request)
    {
        $user = DB::table('users')->where('email', $request->email)->get();

        //Converting Input Date to YYYY/MM/DD HH:MM:SS Format
        $date = $request->date_time;   
        $date = strtotime($date);   
        $date = date ("Y/d/m H:i", $date);  
        $date = $date . ":00";  
    
        //Inserting Request into Database
        $req = DB::table('requests')->insert([
            'user_id' => $user[0]->api_token,
            'request_type' => $request->request_type,
            'location' => $request->location,
            'description' => $request->description,
            'date_time' => $date,
        ]);

        return response()->json($req, 201);
    }
}
