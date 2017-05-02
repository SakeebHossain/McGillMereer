<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

class EventsController extends Controller
{

    /* Presents all the posts of the user */
    public function index($user_id)
    {
        if (Controller::verifyUser($user_id) == false) {
            return redirect('/');
        }

        $get_events_query = "SELECT title, body FROM events WHERE user_id = '" . $user_id . "'";
        $users_events = \DB::select($get_events_query);

        $get_user_query = "SELECT * FROM users WHERE id = '" . $user_id . "'";
        $user = \DB::select($get_user_query)[0];


        return view("event.index", ['users_events' => $users_events, 'user' => $user]);

    }


    public function create()
    {
        $email = \Cookie::get('email', NULL);
        $get_user_query = "SELECT * FROM users WHERE email = '" . $email . "'";
        $user = \DB::select($get_user_query)[0];
        return view("event.create", ['user' => $user]);
    }

    public function store(Request $request, $user_id)
    {
        // Add user to Users table
        $title = request("title");
        $body = request("body");
        $add_event_query = "INSERT INTO events(user_id, title, body) VALUES ('" . $user_id . "', '" . $title . "', '" . $body .  "')";

        \DB::insert($add_event_query);

        return redirect('/user/' . $user_id . "/events");
    }

    public function show(Event $event)
    {
        //
    }
}
