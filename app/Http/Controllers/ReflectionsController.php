<?php

namespace App\Http\Controllers;

use App\Reflection;
use Illuminate\Http\Request;

class ReflectionsController extends Controller
{

    public function index($user_id, $event_id)
    {
        // Make sure that the user is logged in, and the event belongs to user.
        if (Controller::verifyUserAndEvent($user_id, $event_id) == false) {
            return redirect('/');
        }
        
        $email = \Cookie::get('email', NULL);
        $get_user_query = "SELECT * FROM users WHERE email = '" . $email . "'";
        $user = \DB::select($get_user_query)[0];

        $get_event_reflections_query = "SELECT * FROM reflections WHERE event_id = " . $event_id;
        $reflections = \DB::select($get_event_reflections_query);
        
        return view("reflection.index", ["user" => $user, 'reflections' => $reflections]);
    }


    public function create($user_id, $event_id)
    {
        // Retrieve the event data (need it to get the goals)
        $get_goals_query = "SELECT goal1, goal2, goal3, goal4, goal5, goal6, goal7, goal8, goal9, goal10, goal11, goal12 FROM events WHERE id = '" . $event_id . "'";
        $email = \Cookie::get('email', NULL);
        $get_user_query = "SELECT * FROM users WHERE email = '" . $email . "'";
        $users_goals = \DB::select($get_goals_query)[0];
        $user = \DB::select($get_user_query)[0];

        $all_goals = array('goal1'=>"Leadership", 
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

        return view("reflection.create", ["user" => $user, "event_id" => $event_id, "users_goals" => $users_goals, "all_goals" => $all_goals]);
    }


    public function store(Request $request, $user_id, $event_id)
    {
        // Make sure that the user is logged in, and the event belongs to user.
        if (Controller::verifyUserAndEvent($user_id, $event_id) == false) {
            return redirect('/');
        }

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
