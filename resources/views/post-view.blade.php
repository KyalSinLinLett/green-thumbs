@extends('layouts.app')

@section('content')
<div class="container">
	<div class="row">
		<div class="offset-1 col-10">
			<h3>View Post</h3>
			<hr>
			<div class="card" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
				<div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
					<div class="d-flex justify-content-between align-items-center">
						<div>
							<img src="{{ $post->user->profile->profileimage() }}" width="40" style="border-radius: 50%">
							<i class="ml-2"><a style="text-decoration: none; color: white;" href="{{ route('profile-show', $post->user) }}">{{ $post->user->name }}</a> said</i>	
						</div>
						
						<div>
							@if(Auth::id() == $post->user_id)
								<a href="{{ route('post-edit', $post->id) }}" class="btn btn-danger">Edit</a>
								<a href="{{ route('post-delete', $post->id) }}" class="btn btn-danger">Delete</a>
							@endif
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="d-flex justify-content-between align-items-center">
						<div>
							<p>{{ $post->content }}</p>
						</div>
						<div>
							<p>{{ $post->created_at->diffForHumans() }}</p>
						</div>
					</div>

					@if($post->postimage)
						<div class="row">
							<div class="p-3">
								<img src="{{ '/storage/' . $post->postimage }}" class="w-100">
							</div>
						</div>
					@endif

					<hr>
				
					<div>
						<like-component num_likes="{{ $post->liked_by->count() }}" pid="{{ $post->id }}" likes="{{ auth()->user()->liked_posts->contains($post->id) }}"></like-component>
					</div>

					<div class="mt-3 px-3">
						<form action="{{ route('post-storecomment', $post->id) }}" method="POST">
							@csrf
							<div class="form-group row">
								<input class="form-control col-9" type="text" name="comment" placeholder="Say something about this post">
								<button class="btn btn-primary col-3" type="submit">Comment</button>
							</div>
						</form>
					</div>

				</div>
			</div>

			<hr>
			<h3>Comments</h3>
			<hr>

			@forelse($post->comments as $comment)
			<div class="card mb-2" style="border-radius: 1.6rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
				<div class="card-body d-flex justify-content-between">
					<div class="d-flex align-items-center mt-1">
						<div>
							<img src="{{ App\User::find($comment->user_id)->profile->profileimage() }}" width="35" style="border-radius: 50%">
							<i><a href="{{ route('profile-show', $comment->user_id) }}">{{ App\User::find($comment->user_id)->name }}</a> said</i>	
						</div>
					
						<div>
							<b class="ml-2">{{ $comment->comment }}</b>			
						</div>
					</div>

					<div>
						@if(Auth::id() == $comment->user_id)
							<a href="{{ route('comment-edit', $comment->id) }}" class="btn btn-danger">Edit</a>
							<a href="{{ route('comment-delete', $comment->id) }}" class="btn btn-danger">Delete</a>
						@endif

						<small>{{ $comment->created_at->diffForHumans() }}</small>
					</div>

				</div>
			</div>
			@empty
				<p>Such empty...</p>
			@endforelse
		</div>
	</div>
</div>
@endsection