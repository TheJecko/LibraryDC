@extends('index')

@section('content')

	<div id="main-text">
	
		<div id="blog-text">

		<h3>{{$post -> bl_title}}</h3> by <h2></h2>
		<br><hr>
		<article>{{$post -> review}}</article>
	

		</div>
	</div>

@endsection