<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$tasks = DB::select('select * from tasks');

    return view('welcome', [
    	    'tasks' => $tasks   
    	]);
});


Route::get('/tasks/{id}', function ($id) {

	$tasks = DB::select('select * from tasks where id='.$id);

    return view('welcome', [
    	    'tasks' => $tasks   
    	]);
});