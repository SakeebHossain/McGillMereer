@extends("layouts.layout")

@section('content')

<div class="col-sm-8">

    <h1>Register</h1>

    <form method="POST" action="/register">
        {{ csrf_field() }}

        <div class="form-group">

            <label for="name">Name:</lavel>

            <input type="text" class="form-control" name="name">

        </div>

        <div class="form-group">

            <label for="email">Email:</lavel>

            <input type="email" class="form-control" name="email">

        </div> 

        <div class="form-group">

            <label for="password">Password:</lavel>

            <input type="password" class="form-control" name="password">

        </div> 

        <div class="form-group">

            <label for="password_confirmation">Password Confirmation:</lavel>

            <input type="password" class="form-control" name="password_confirmation">

        </div> 

        <div class="form-group">

            <button type="submit" class="btn btn-primary">Submit</button>

        </div>


		@if (count($errors))

		    <div class="form-group">

		        <div class="alert alert-danger">

		            <ul>

		                @foreach ($errors->all() as $error)

		                    <li>{{ $error }}</li>

		                @endforeach

		            </ul>

		        </div>

		    </div>

		@endif

    </form>
    
</div>



@endsection