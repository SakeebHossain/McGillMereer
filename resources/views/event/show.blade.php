@extends('layouts.basic');

@section('content')

<h1 style="display: inline-block;"> My Events </h1>

<form method="GET" action="{{ url('/user/' . $event->user_id . '/events/create' ) }}" style="float: right;">
    <button class="btn btn-primary" type="submit"> Modify </button> 
</form>



    <div class="panel panel-default">
       
        <div class="panel-heading">

            <h3>{{ $event->title }}</h3>

        </div>

        <div class="panel-body">

            <p>{{ $event->body }}</p>

        </div>

    </div>





@endsection