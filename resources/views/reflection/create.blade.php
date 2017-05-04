@extends("layouts.basic")

@section("content")
<div class="row">
    <div class="col-lg-4 text-center"></div>

    <div class="col-lg-4 text-center">
        <h1>Add a reflection.</h1>
        <p class="lead">Reflect below.</p>

      <form class="form-signin" method="POST" action="/user/{{ $user->id }}/event/ {{ $event_id }}/reflection/create">
         
         {{ csrf_field() }}


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