@extends('index')

@section('content')
<div id="main-text">
 <h3>Login</h3>

	<form action="/login" method="post"> 

		{{csrf_field()}}

		<label for="name">User name</label><br>
		<input type="text" name="name" required size="30">
		<br>
		<label for="password">Password</label><br>
		<input type="password" name="password" required size="30">
		<br>
		<br>
		<input type="submit" name="submit" value="Login">
	</form>	
	</div>


@endsection