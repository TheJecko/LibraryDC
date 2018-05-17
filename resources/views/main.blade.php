@extends('index')

@section('content')

	<div id="main-text">
	
		<br>
		<h3> This is my personal on-line library</h3>
		<br>
		<p>I always have a problem with an amount of books I own. I'm a real Bookaholic.<br>
		Here I can update my books database, look through or post a short review of books I'we read on my Blog.
		Please Register and Login before you can add a post to Blog. 
		All content of this website is a personal opinion and taste. Don't judge about a book by it's cover.</p>
		<div id="blog-text">

		 @foreach ($posts as $post)

				<a href="/show/{{$post->id}}"><h4>{{$post -> bl_title}}</h4></a>
				<p>by  {{$post -> user -> name }} </p>
				<article>{{$post -> review}}</article>
				<br><hr>

		@endforeach

		</div>
	</div>

@endsection
