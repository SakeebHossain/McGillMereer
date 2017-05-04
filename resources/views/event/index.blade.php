@extends('layouts.basic');

@section('content')

<h1 style="display: inline-block;"> My Events </h1>

<form method="GET" action="{{ url('/user/' . $user->id . '/events/create' ) }}" style="float: right;">
    <button class="btn btn-primary" type="submit"> Add an Event </button> 
</form>

<div class="panel-group">

@foreach ($users_events as $event) 

<a href=" {{ url('/user/' . $user->id . '/events/' . $event->id )  }}" style="text-decoration:none; color:black;">

    <div class="panel panel-default">
       
        <div class="panel-heading">

            <h3 style="display: inline-block;" data-toggle="collapse" href="#{{  $event->id  }}">{{ $event->title }}</h3>

                <div style="float:right;">

                    <form style="display: inline-block;" method="GET" action="/user/{{ $user->id }}/event/{{ $event->id }}/reflection">

                        <button class="btn btn-info" type="submit"> View Reflections </button>

                    </form>

                    <form style="display: inline-block;" method="GET" action="/user/{{ $user->id }}/event/{{ $event->id }}/reflection/create">

                        <button class="btn btn-success" type="submit"> Add Reflection </button>

                    </form>

                    </form style="display: inline-block;">

                        <button class="btn btn-warning" > Edit </button>

                    </form>

                </div>

            </h3>


        </div>

        <div id="{{  $event->id  }}" class="panel-body panel-collapse collapse">

            <p>{{ $event->body }}</p>

        </div>

    </div>

</a>

@endforeach

</div>



@endsection