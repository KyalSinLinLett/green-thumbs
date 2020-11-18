@extends('layouts.app')

@section('content')
<div class="container">
	<h2>See it for yourself</h2>
	<h5>Use our visualization tool to see the changes in forest cover throughout the years.</h5>
	<hr>
	<div class="mb-3">
		<map-component/>
	</div>

	<hr>
	<h3>Want to see regional data?</h3>
	<h5>Type in a region from Myanmar to see the changes throughout the years.</h5>
	<hr>
	<div>
		<regional-component/>
	</div>
</div>
@endsection