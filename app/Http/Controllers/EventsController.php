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

        $get_events_query = "SELECT * FROM events WHERE user_id = '" . $user_id . "'";
        $users_events = \DB::select($get_events_query);

        $get_user_query = "SELECT * FROM users WHERE id = '" . $user_id . "'";
        $user = \DB::select($get_user_query)[0];


        return view("event.index", ['users_events' => $users_events, 'user' => $user]);

    }


    public function create($user_id)
    {
        if (Controller::verifyUser($user_id) == false) {
            return redirect('/');
        }

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        $email = \Cookie::get('email', NULL);
        $get_user_query = "SELECT * FROM users WHERE email = '" . $email . "'";
        $user = \DB::select($get_user_query)[0];
        return view("event.create", ['user' => $user]);
    }

    public function store(Request $request, $user_id)
    {
        //TO-DO : validate the request. make sure the lengths are ok, goals are selected, dates make sense
        // Add user to Users table
        $title = request("title");
        $body = request("body");
        $start_date = request("start_date");
        $end_date = request("end_date");
        $add_event_query = "INSERT INTO events(user_id, title, body, start_date, end_date,
        goal1, goal2, goal3, goal4, goal5, goal6, goal7, goal8, goal9, goal10, goal11, goal12)
        VALUES ('" . $user_id . "', ?, ?, '" . $start_date . "', '" . $end_date . "', '" .
        $request->goal1 . "', '" .
        $request->goal2 . "', '" .
        $request->goal3 . "', '" .
        $request->goal4 . "', '" .
        $request->goal5 . "', '" .
        $request->goal6 . "', '" .
        $request->goal7 . "', '" .
        $request->goal8 . "', '" .
        $request->goal9 . "', '" .
        $request->goal10 . "', '" .
        $request->goal11 . "', '" .
        $request->goal12 . "')";

        \DB::insert($add_event_query, [$title, $body]);

        return redirect('/user/' . $user_id . "/events");
    }

    public function show($user_id, $event_id)
    {
        // Make sure that the user is logged in, and the event belongs to user.
        if (Controller::verifyUserAndEvent($user_id, $event_id) == false) {
            return redirect('/');
        }

        $get_event_query = "SELECT * FROM events WHERE $user_id = '" . $user_id . "' AND id = '" . $event_id . "'";

        $email = \Cookie::get('email', NULL);
        $get_user_query = "SELECT * FROM users WHERE email = '" . $email . "'";
        $user = \DB::select($get_user_query)[0];

        $event = \DB::select($get_event_query)[0];

        $users_goals = array();

        $goals = array('goal1'=>"Leadership", 
        'goal2' => "Problem-solving/Creativity",
        'goal3' => "Team Work",
        'goal4' => "Interpersonal Skills",
        'goal5'=> "Communication",
        'goal6' => "Self-Awareness",
        'goal7' => "Willingness to Learn",
        'goal8' => "Initiative",
        'goal9' => "Action Planning",
        'goal10' => "Flexibility",
        'goal11' => "Numeracy",
        'goal12' => "Commitment"
        );

        // Go through each goal and identify if it is selected.
        foreach ($goals as $goal_number => $goal) {
            if ($event->$goal_number == "SELECTED") {
                array_push($users_goals, $goal);
            } 
        }

        return view("event.show", ['event' => $event, 'user' => $user, 'goals' => $users_goals]);
    }
}
