@if(count($errors))

<div id="main -text">
<ul>
	@foreach($errors->all() as $error)
		<li> {{$error}}</li>
	@endforeach
</ul>

</div>	
