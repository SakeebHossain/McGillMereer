@extends("layouts.logged_out_basic")

@section("content")
<div class="row">
    <div class="col-lg-12 text-center">
        <h1>Welcome to <strong>Me</strong>raar.</h1>
        <p class="lead">Let's begin.</p>

        <div class="row">

            <div class="col-lg-5"></div>

            <div class="col-lg-1">
		        <form method="GET" action="/login">
		            <button type="submit" class="btn prinmary-btn">Sign In</button>
		        </form>
		    </div>

            <div class="col-lg-1">
		        <form method="GET" action="/register">
		            <button type="submit" class="btn prinmary-btn">Register</button>
		        </form>
		    </div>

		    <div class="col-lg-5"></div>
		    
	    </div>

<!--
        <a class="btn primary-btn" href="{{ url('login') }}">Sign In</a>
        <button class="btn prinmary-btn"><a href="{{ url('register') }}">Register</a></button>
-->
    </div>
</div>
<!-- /.row -->
@endsection