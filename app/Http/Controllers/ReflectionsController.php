<?php

namespace App\Http\Controllers;

use App\Reflection;
use Illuminate\Http\Request;

class ReflectionsController extends Controller
{

    public function index($user_id, $event_id)
    {
        $email = \Cookie::get('email', NULL);
        $get_user_query = "SELECT * FROM users WHERE email = '" . $email . "'";
        $user = \DB::select($get_user_query)[0];

        $get_event_reflections_query = "SELECT * FROM reflections WHERE event_id = " . $event_id;
        $reflections = \DB::select($get_event_reflections_query);
        
        return view("reflection.index", ["user" => $user, 'reflections' => $reflections]);
    }


    public function create($user_id, $event_id)
    {
        $email = \Cookie::get('email', NULL);
        $get_user_query = "SELECT * FROM users WHERE email = '" . $email . "'";
        $user = \DB::select($get_user_query)[0];

        return view("reflection.create", ["user" => $user, "event_id" => $event_id]);
    }


    public function store(Request $request, $user_id, $event_id)
    {
        $body = request('body');
        $add_event_query = "INSERT INTO reflections(user_id, event_id, body) VALUES ('" . $user_id . "', '" . $event_id . "', '" . $body .  "')";
        \DB::insert($add_event_query);

        return redirect("/");
    }


    public function show(Reflection $reflection)
    {
        // 
    }

}
