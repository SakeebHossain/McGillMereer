@extends("layouts.basic")

@section("content")
<div class="row">
    <div class="col-lg-4 text-center"></div>

    <div class="col-lg-4 text-center">
        <h1>Add an event.</h1>
        <p class="lead">Fill out the details below.</p>

      <form class="form-signin" method="POST" action="/user/{{ $user->id }}/events">
         
         {{ csrf_field() }}

        <h4 style="text-align: left;">Title:</h4>

        <label for="inputTitle" class="sr-only">Title</label>
        <input type="text" id="inputTitle" class="form-control" placeholder="Title of your event" required="" autofocus="" name="title">

        <br>

        <h4 style="text-align: left;">Description:</h4>

        <label for="inputDescription" class="sr-only">Description</label>
        <textarea rows="5" cols="10" type="text" id="inputDescription" class="form-control" placeholder="Describe the event..." required="" autofocus="" name="body"></textarea>

        <br>

        <h4 style="text-align: left;">Select goals (we recommend picking 3!):</h4>
        
        <div style="text-align: left;">
            <input name="goal1" id="goal1" type="checkbox" value="SELECTED">
            <label for="goal1" style="padding-left: 15px!important;">Leadership</label>

            <br>

            <input name="goal2" id="goal2" type="checkbox" value="SELECTED">
            <label for="goal2" style="padding-left: 15px!important;">Problem-solving/Creativity</label>

            <br>

            <input name="goal3" id="goal3" type="checkbox" value="SELECTED">
            <label for="goal3" style="padding-left: 15px!important;">Team work</label>

            <br>

            <input name="goal4" id="goal4" type="checkbox" value="SELECTED">
            <label for="goal4" style="padding-left: 15px!important;">Interpersonal</label>

            <br>

            <input name="goal5" id="goal5" type="checkbox" value="SELECTED">
            <label for="goal5" style="padding-left: 15px!important;">Communication</label>

            <br>

            <input name="goal6" id="goal6" type="checkbox" value="SELECTED">
            <label for="goal6" style="padding-left: 15px!important;">Self-awareness</label>

            <br>

            <input name="goal7" id="goal7" type="checkbox" value="SELECTED">
            <label for="goal7" style="padding-left: 15px!important;">Willingness to Learn</label>

            <br>

            <input name="goal8" id="goal8" type="checkbox" value="SELECTED">
            <label for="goal8" style="padding-left: 15px!important;">Initiative</label>

            <br>

            <input name="goal9" id="goal9" type="checkbox" value="SELECTED">
            <label for="goal9" style="padding-left: 15px!important;">Action planning</label>

            <br>

            <input name="goal10" id="goal10" type="checkbox" value="SELECTED">
            <label for="goal10" style="padding-left: 15px!important;">Flexibility</label>

            <br>

            <input name="goal11" id="goal11" type="checkbox" value="SELECTED">
            <label for="goal11" style="padding-left: 15px!important;">Numeracy</label>

            <br>

            <input name="goal12" id="goal12" type="checkbox" value="SELECTED">
            <label for="goal12" style="padding-left: 15px!important;">Commitment</label>


        </div>

        <br>

        <button class="btn btn-primary" type="submit">Save</button>
        
      </form>

    </div>

    <div class="col-lg-4 text-center"></div>
</div>
<!-- /.row -->
@endsection