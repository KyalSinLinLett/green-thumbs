@extends('layouts.app')
@section('content')
<div class="container">
	<h3>Edit comment</h3>
	<hr>	
	
	<form action="{{ route('comment-update', $cmt->id) }}" method="POST">
		@csrf
		<div class="form-group row">
			<input class="form-control col-9" type="text" name="comment" placeholder="Say something about this post" value="{{ $cmt->comment }}">
			<button class="btn btn-info col-3" type="submit">Update</button>
		</div>
	</form>
</div>
@endsection