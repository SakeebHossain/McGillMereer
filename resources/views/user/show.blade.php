@extends("layouts.basic")

@section("content")
<div class="row">

    <div class="col-lg-12 text-center">
        

        <div class="row">

            <h1>Welcome, <strong> {{ $user->name }}</strong>.</h1>
		    
	    </div>

    </div>

</div>
<!-- /.row -->
@endsection