<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationsController extends Controller
{
    public function create()  
    {
        // TO-DO check if user is logged in first, if no then return this
        return view("registration.create");
    }

    public function store(Request $request)
    {
        // TO-DO : Validate the form? Not that important for demo.
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required'
        ]);

        // Add user to Users table
        $name = request("name");
        $email = request("email");
        $password = request("password");
        $add_user_query = "INSERT INTO users(name, email, password) VALUES (?, ?, ?)";

        \DB::insert($add_user_query, [$name, $email, $password]);


        // Sign the user in by creating an entry in the sessions table...
        $add_session_query = "INSERT INTO sessions(email) VALUES (?)";
        \DB::insert($add_session_query, [$email]);


        //...and by creating a cookie. 
        $cookie = \Cookie::queue('email', $email);

        // Redirect to a their home page.
        //return response()->redirect('/')->withCookie($cookie);
        return redirect('/');
    }

}
