<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    public function create() {
    	return view("register");
    }

    public function destroy() {
    	auth()->logout();

    	redirect()->home();
    }
}
