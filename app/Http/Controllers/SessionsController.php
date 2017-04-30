<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{

    public function create()
    {
        //TO-DO check if they have a cookie already. If they do, redirect them back home.

        // Serve them the login screen.
        return view("session.create");
    }

    public function destroy()
    {
        // Delete the cookie...
        $forget_cookie = \Cookie::forget('email');

        // ...and redirect to main, "/".
        return redirect('/')->withCookie($forget_cookie);
    }

    public function store(Request $request)
    {
        
        // We validate that the user is real and then log them in. Check DB to find user and password.
        $email = request("email");
        $password = request("password");

        $find_user_query = "SELECT email, password FROM users WHERE email = '" . $email . "'";
        $db_user = \DB::select($find_user_query)[0];

        // If they don't match...
        if ($email != $db_user->email || $password != $db_user->password ) {
            // Refresh on 'em.
            return view("session.create");
        }

        // Otherwise, they're in so create a cookie...
        $cookie = \Cookie::queue('email', $email);

        // ...and redirect to a their home page.
        return redirect('/');
        
    }
}
