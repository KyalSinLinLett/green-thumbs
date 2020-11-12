@extends('layouts.app')

@section('content')
<div class="container">
	<form action="{{ route('post-update', $post->id) }}" method="POST" enctype="multipart/form-data">
		@csrf

		<div class="form-group">
			<div>
				<textarea id="content" type="text" class="form-control" rows="4" class="form-control" name="content" placeholder="Content" required>
					{{ $post->content }}
				</textarea>
			</div>
			<br>
			@if($post->postimage)
			<div>
				<img src="{{ '/storage/'.$post->postimage }}" width="40%">
			</div>
			<a href="{{ route('post-rmvimg', $post->id) }}">Remove image</a>
			@endif
			<div>
				<p>Current post image</p>
				<input id="postimage" type="file" accept="image/*" name="postimage">	
			</div>
			<br>
			<button type="submit" class="btn btn-primary">
			    Update
			</button>	
		</div>

	</form>
</div>
@endsection