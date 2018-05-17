@extends('index')

@section('content')
<div id="main-text">
 @foreach ($books as $book)

				<p>{{$book -> title}} by {{$book -> author}}</p>
				
				<hr>

		@endforeach
</div>
@endsection