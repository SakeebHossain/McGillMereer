@extends("layouts.basic")

@section("content")
<div class="row">
    <div class="col-lg-4 text-center"></div>

    <div class="col-lg-4 text-center">
        <h1>Add an event.</h1>
        <p class="lead">Fill out the details below.</p>

      <form class="form-signin" method="POST" action="/user/{{ $user->id }}/events">
         
         {{ csrf_field() }}


        <label for="inputTitle" class="sr-only">Title</label>
        <input type="text" id="inputTitle" class="form-control" placeholder="Title" required="" autofocus="" name="title">

        <br>

        <label for="inputDescription" class="sr-only">Description</label>
        <input type="text" id="inputDescription" class="form-control" placeholder="Describe the event..." required="" autofocus="" name="body">

        <br>

        <button class="btn btn-primary" type="submit">Save</button>
      </form>

    </div>

    <div class="col-lg-4 text-center"></div>
</div>
<!-- /.row -->
@endsection