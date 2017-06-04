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

        $this->validate(request(), [
            'body' => 'required'
        ]);

        $enjoyment_score = request('enjoyment_score');
        $body = request('body');
        // Go through each goal and get its value.
        $goal1 = (request('goal1') == null ? 0 : (float)request('goal1') );
        $goal2 = (request('goal2') == null ? 0 : (float)request('goal2'));
        $goal3 = (request('goal3') == null ? 0 : (float)request('goal3'));
        $goal4 = (request('goal4') == null ? 0 : (float)request('goal4'));
        $goal5 = (request('goal5') == null ? 0 : (float)request('goal5'));
        $goal6 = (request('goal6') == null ? 0 : (float)request('goal6'));
        $goal7 = (request('goal7') == null ? 0 : (float)request('goal7'));
        $goal8 = (request('goal8') == null ? 0 : (float)request('goal8'));
        $goal9 = (request('goal9') == null ? 0 : (float)request('goal9'));
        $goal10 = (request('goal10') == null ? 0 : (float)request('goal10'));
        $goal11 = (request('goal11') == null ? 0 : (float)request('goal11'));
        $goal12 = (request('goal12') == null ? 0 : (float)request('goal12'));


        $add_event_query = "INSERT INTO reflections(date, user_id, event_id, body, goal1_score, goal2_score, goal3_score, goal4_score, goal5_score, goal6_score, goal7_score, goal8_score, goal9_score, goal10_score, goal11_score, goal12_score, enjoyment_score) VALUES (NOW(), '" . $user_id . "', '" . $event_id . "', ?, '" .
        $goal1 . "', '" .
        $goal2 . "', '" .
        $goal3 . "', '" .
        $goal4 . "', '" .
        $goal5 . "', '" .
        $goal6 . "', '" .
        $goal7 . "', '" .
        $goal8 . "', '" .
        $goal9 . "', '" .
        $goal10 . "', '" .
        $goal11 . "', '" .
        $goal12 . "', '" .
        $enjoyment_score . "')";

        \DB::insert($add_event_query, [$body]);

        return redirect("/user/" . $user_id . "/event/" . $event_id . "/reflection");
    }


    public function show(Reflection $reflection)
    {
        // 
    }

}
