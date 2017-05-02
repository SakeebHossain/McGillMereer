<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function verifyUser($user_id) {
    	//confirm they have a cookie with the email that matches the user_id, else redirect
        $find_user_increment_query = "SELECT email FROM users WHERE id = '" . $user_id . "'";
        $url_email = \DB::select($find_user_increment_query)[0]->email; 

        // Check for cookie
        $cookie_email = \Cookie::get('email', NULL);

        if ($cookie_email != $url_email) {
            return false;
        }

        return true;
    }
}
