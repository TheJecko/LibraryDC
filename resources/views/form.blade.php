@extends('index')

@section('content')

<form action="/books" method="post"> 

	{{csrf_field()}}

	<label for="title">Book title</label><br>
	<input type="text" name="title" size="45">
	<br>

	<label for="author">Book author</label><br>
	<input type="text" name="author" size="45">
	<br>
	<br>
	<input type="submit" name="submit" value="ADD BOOK">
	
</form>

@endsection