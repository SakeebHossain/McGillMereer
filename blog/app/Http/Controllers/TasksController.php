<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index() {
    	$tasks = Task::all();

	    return view('welcome', [
	    	    'tasks' => $tasks   
	    ]);
    }

    public function show($id) {
    	$tasks = [Task::find($id)];

    	//dd($tasks);

	    return view('list', [
	    	    'tasks' => $tasks   
	    ]);
	}
}
