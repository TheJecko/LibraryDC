@extends('index')

@section('content')

<div id="main-text">

<h3>Publish a post</h3>

<form action="/blog" method="post"> 

	{{csrf_field()}}

	<label for="bl_title">Title</label><br>
	<input type="text" name="bl_title" size="45">
	<br>

	<label for="review">Book review</label><br>
	<textarea name="review" rows="10" cols="100" placeholder="Enter text here..."></textarea>
	<br>
	<br>
	<input type="submit" name="submit" value="PUBLISH POST">
	
</form>

</div>

@endsection