<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        //confirm they have a cookie with the email that matches the user_id, else redirect
        $find_user_increment_query = "SELECT email FROM users WHERE id = '" . $user_id . "'";
        $url_email = \DB::select($find_user_increment_query)[0]->email; 

        // Check for cookie
        $cookie_email = \Cookie::get('email', NULL);

        if ($cookie_email != $url_email) {
            return view('home.welcome');
        }

    	// get name of the user for Users table
    	$user = \DB::select("SELECT * FROM users WHERE id = '" . $user_id . "'")[0];   

    	return view('user.show', ['user' => $user]);

    }
}
