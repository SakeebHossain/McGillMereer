@extends('layouts.basic');

@section('content')

<h1 style="display: inline-block;"> Reflections </h1>

<div class="panel-group">

@foreach ($reflections as $reflection) 

    <div class="panel panel-default">

        <div class="panel-body">
            <p style="float:right; font-weight:bold;">{{ "Date posted: " . explode(" ", $reflection->date)[0] }}</p>

            <h4>What have you done so far?</h4>
            <p>{{ $reflection->question1 }}</p>

            <h4>How much are you enjoying the experience so far?</h4>
            <p>{{ $reflection->question2 }}</p>

            <h4>What have you learned so far?</h4>
            <p>{{ $reflection->question3 }}</p>

        </div>

    </div>

@endforeach

</div>



@endsection