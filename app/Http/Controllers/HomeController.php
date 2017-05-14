<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function index() 
    {

        // Check for cookie
        $email = \Cookie::get('email', NULL);

        if ($email == NULL) {
        	return view('home.welcome');
        }

        // Otherwise, actually log them in. First find their User increment (needed for url)
        $find_user_increment_query = "SELECT id FROM users WHERE email = '" . $email . "'";
        $user_id = \DB::select($find_user_increment_query)[0]->id;

        return redirect("/user/" . $user_id);

    }


    public function show($user_id) 
    {
        if (Controller::verifyUser($user_id) == false) {
            return view('home.insufficient_permissions');
        }

    	// get name of the user for Users table
    	$user = \DB::select("SELECT * FROM users WHERE id = '" . $user_id . "'")[0];   

    	return view('user.show', ['user' => $user]);

    }
}
