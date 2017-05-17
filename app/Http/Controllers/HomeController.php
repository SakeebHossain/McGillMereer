<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class HomeController extends Controller
{
    public function index() 
    {

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

        $overall_skill_score = [
        "goal1" => 0,
        "goal2" => 0,
        "goal3" => 0,
        "goal4" => 0,
        "goal5" => 0,
        "goal6" => 0,
        "goal7" => 0,
        "goal8" => 0,
        "goal9" => 0,
        "goal10" => 0,
        "goal11" => 0,
        "goal12" => 0];

        $overall_enjoyment_score = [
        "goal1" => 0,
        "goal2" => 0,
        "goal3" => 0,
        "goal4" => 0,
        "goal5" => 0,
        "goal6" => 0,
        "goal7" => 0,
        "goal8" => 0,
        "goal9" => 0,
        "goal10" => 0,
        "goal11" => 0,
        "goal12" => 0];

        // need to generate the chart. Go through every event, find the averages for each reflection, and them to the above arrays

        // 1. Go through every event:
        $events = \DB::select("SELECT * FROM events WHERE user_id = '" . $user_id . "'");

        // 2. find averages for each happiness and goals columns
        $find_avgs_query = "SELECT 
        avg(enjoyment_score) AS enjoyment_score, 
        avg(goal1_score) AS goal1,
        avg(goal2_score) AS goal2,
        avg(goal3_score) AS goal3,
        avg(goal4_score) AS goal4,
        avg(goal5_score) AS goal5,
        avg(goal6_score) AS goal6,
        avg(goal7_score) AS goal7,
        avg(goal8_score) AS goal8,
        avg(goal9_score) AS goal9,
        avg(goal10_score) AS goal10,
        avg(goal11_score) AS goal11,
        avg(goal12_score) AS goal12
        FROM reflections";

        //$res = []; //used for debugging

        foreach($events as $event) {

            // this is a single row table containing averages for the specific event
            $event_skills = \DB::select($find_avgs_query . " WHERE event_id = " . $event->id)[0];

            $enj_score = 0;
            foreach ($event_skills as $key => $value) {
                
                if ($key == "enjoyment_score") {
                    $enj_score = $value;
                }
                 
                else {
                    if ($value != 0) {
                        $sum = $overall_skill_score[$key] + $value;
                        // array_push($res, "In event " . $event->id . " belonging to user " . $event->user_id . ", the skill " . $key . " was updated from " . $overall_skill_score[$key]  . " to " . $sum); //used for debugging
                        $overall_skill_score[$key] =  ((float)$overall_skill_score[$key] + (float)$value)/10;
                        $overall_enjoyment_score[$key] = ((float)$overall_enjoyment_score[$key] + (float)$enj_score)/7.5;
                    }
                }
            }
        }

        //dd($overall_enjoyment_score, $overall_skill_score); //used for debugging

    	return view('user.show', ['user' => $user, 'overall_skill_score' => $overall_skill_score, 'overall_enjoyment_score' => $overall_enjoyment_score]);

    }
}
