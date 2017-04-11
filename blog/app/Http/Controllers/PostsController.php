<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
    	return view('posts.index');
    }

    public function show() {
    	return view('posts.show');
    }

    public function create() {
    	return view('posts.create');
    }

    public function store() {
    	//Create new post using request data
    	$post = new \App\Post;
    	$post->title = request('title');
    	$post->body = request('body');
    	

    	//Save to database
    	$post->save();

    	//Redirect
    	return redirect('/');

    }
}
