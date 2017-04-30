@extends("layouts.logged_out_basic")

@section("content")
<div class="row">
    <div class="col-lg-4 text-center"></div>

    <div class="col-lg-4 text-center">
        <h1>Welcome to <strong>Me</strong>raar.</h1>
        <p class="lead">Sign In below.</p>

      <form class="form-signin" method="POST" action="/login">

        {{ csrf_field() }}

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email">

        <br>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">

        <br>

        <button class="btn btn-primary" type="submit">Register</button>

      </form>

    </div>

    <div class="col-lg-4 text-center"></div>
</div>
<!-- /.row -->
@endsection