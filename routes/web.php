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

Route::get('/', "HomeController@index");
Route::get("/user/{user_id}", "HomeController@show");

Route::get("/register", "RegistrationsController@create");
Route::post("/register", "RegistrationsController@store");

Route::get("/login", "SessionsController@create");
Route::post("/login", "SessionsController@store");
Route::get("/logout", "SessionsController@destroy");



Route::get("/user/{user_id}/events", "EventsController@index");
Route::post("/user/{user_id}/events", "EventsController@store");
Route::get("/user/{user_id}/events/create", "EventsController@create");
Route::get("/user/{user_id}/events/{event_id}", "EventsController@show");

Route::get("/user/{user_id}/event/{event_id}/reflection/create", "EventsController@create");
Route::post("/user/{user_id}/event/{event_id}/reflection/create", "EventsController@store");
Route::get("/user/{user_id}/event/{event_id}/reflection", "EventsController@index");
Route::get("/user/{user_id}/event/{event_id}/reflection/{{reflection_id}}", "EventsController@show");