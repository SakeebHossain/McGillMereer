@extends("layouts.add_reflection")

@section("content")
<div class="row">
    <div class="col-lg-4 text-center"></div>

    <div class="col-lg-4 text-center">
        <h1>Add a reflection.</h1>
        <p class="lead">Reflect below.</p>

      <form class="form-signin" method="POST" action="/user/{{ $user->id }}/event/ {{ $event_id }}/reflection/create" style="text-align: left;">
         
         {{ csrf_field() }}

        <h3>Reflection</h3>
        <label for="inputDescription" class="sr-only">Description</label>
        <textarea type="text" id="inputDescription" class="form-control" placeholder="Describe the event..." required="" autofocus="" name="body" rows="10"></textarea>

        <br>

        <!-- SECTION: RATING ENJOYMENT OF EVENT -->

        <p>
            <label for = "minval" >Score:</label>
            <input name= "enjoyment_score" type = "text" id = "minval" style = "border:0; color:#b9cd6d; font-weight:bold;">
        </p>
        <div id = "slider-5"></div>

        <!-- END SECTION -->

        <br>

        <!-- SECTION: GOAL RATINGS -->

        <h3>Goal Ratings</h3>
        @foreach($users_goals as $user_goal => $value)
            @if ( $value == "SELECTED" )
                <h4> Rate your {{ $all_goals[$user_goal] }}: </h4>
                <p>
                    <label for = "{{ $user_goal }}_minval" >Score:</label>
                    <input name= "{{ $user_goal }}" type = "text" id = "{{ $user_goal }}_minval" style = "border:0; color:#b9cd6d; font-weight:bold;">
                </p>
                <div id = "{{ $user_goal }}"></div>

                <br>

            @endif
        @endforeach


        <!-- END SECTION -->

        <br>

        <button class="btn btn-primary" type="submit">Save</button>
        
      </form>

    </div>

    <div class="col-lg-4 text-center"></div>
</div>
<!-- /.row -->
@endsection