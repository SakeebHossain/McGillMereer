@extends('layouts.basic');

@section('content')

<h1 style="display: inline-block;"> Reflections </h1>

<div class="panel-group">

@foreach ($reflections as $reflection) 

    <div class="panel panel-default">

        <div class="panel-body">

            <p>{{ $reflection->body }}</p>

        </div>

    </div>

@endforeach

</div>



@endsection