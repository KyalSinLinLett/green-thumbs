@extends('layouts.app')

@section('content')
<div class="container">
	<h3>View Post</h3>
	<hr>
	<div class="card">
		<div class="card-body">
			@if(Auth::id() == $post->user_id)
				<a href="{{ route('post-edit', $post->id) }}" class="btn btn-primary">Edit</a>
				<a href="{{ route('post-delete', $post->id) }}" class="btn btn-primary">Delete</a>
			@endif
			<p><a href="{{ route('profile-show', $post->user) }}">{{ $post->user->name }}</a> said</p>
			<p>{{ $post->content }}</p>
			@if($post->postimage)
				<div class="row">
					<div class="offset-3 col-6">
						<img src="{{ '/storage/' . $post->postimage }}" class="w-100">
					</div>
				</div>
			@endif
			<p>{{ $post->created_at->diffForHumans() }}</p>
		</div>
	</div>
</div>
@endsection