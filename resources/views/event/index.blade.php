@extends('layouts.basic');

@section('content')

@foreach ($users_events as $event) 
    <h2>{{ $event->title }}</h2>
    <p>{{ $event->body }}</p>
    <hr>
@endforeach

@endsection