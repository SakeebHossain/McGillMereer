<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function index() 
    {
        //-------------------------------------------------------------------------------------
        $data = array('name'=>"Our Code World");
        // Path or name to the blade template to be rendered
        $template_path = 'email_template';

        Mail::send(['text'=> $template_path ], $data, function($message) {
            // Set the receiver and subject of the mail.
            $message->to('sakeeb.hossain1@gmail.com', 'Receiver Name')->subject('Laravel First Mail');
            // Set the sender
            $message->from('mymail@mymailaccount.com','Our Code World');
        });
        //-------------------------------------------------------------------------------------

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
