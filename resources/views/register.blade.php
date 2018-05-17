@extends('index')

@section('content')
<div id="main-text">
 <h3>Register</h3>

	<form action="/register" method="post"> 

		{{csrf_field()}}

		<label for="name">User name</label><br>
		<input type="text" name="name" required size="30">
		<br>
		<label for="email">Email</label><br>
		<input type="email" name="email" required size="35">
		<br>
		<label for="password">Password</label><br>
		<input type="password" name="password" required size="35">
		<br>
		<label for="password_confirmation">Password confirmation</label><br>
		<input type="password" name="password_confirmation" required size="35"><br>
		<br>
		<input type="submit" name="submit" value="Register">
	</form>	
	</div>


@endsection