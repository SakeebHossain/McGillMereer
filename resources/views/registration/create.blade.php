@extends("layouts.logged_out_basic")

@section("content")
<div class="row">
    <div class="col-lg-4 text-center"></div>

    <div class="col-lg-4 text-center">
        <h1>Welcome to <strong>Me</strong>raar.</h1>
        <p class="lead">Register below.</p>

      <form class="form-signin" method="POST" action="/register">
         
         {{ csrf_field() }}


        <label for="inputName" class="sr-only">Name</label>
        <input type="text" id="inputName" class="form-control" placeholder="Name" required="" autofocus="" name="name">

        <br>

        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="" name="email">

        <br>

        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="" name="password">

        <br>

        <label for="confirmPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="confirmPassword" class="form-control" placeholder="Confirm password" required="" name="confirmPassword">

        <br>

        <button class="btn btn-primary" type="submit">Register</button>
      </form>

    </div>

    <div class="col-lg-4 text-center"></div>
</div>
<!-- /.row -->
@endsection