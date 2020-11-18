@extends('layouts.app')

@section('content')
<div class="container">

	<h2>Search Results</h2>
	<hr>
	<hr>

	<div>
		<h3>
			Users Results
		</h3>
		<hr>
		@forelse($users as $user)
			<div class="card mb-3" style="border-radius: 1.5rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
				<div class="card-body">
					<div class="row">
						<div class="col d-flex align-items-center">
							<div class="mr-3">
								<img src="{{ $user->profile->profileImage() }}" width="40" style="border-radius: 50%">
								<i class="ml-2"><a style="text-decoration: none;" href="{{ route('profile-show', $user->id) }}">{{ $user->name }}</a></i>
							</div>
						
							<strong>{{ $user->bio }}<strong>				
						</div>
					</div>
				</div>
			</div>
		@empty
			<div>
				No results found...
			</div>
		@endforelse
	</div>

	<div>
		<h3>
			Posts Results
		</h3>
		<hr>
		@forelse($posts as $post)
			<div class="card mb-3" style="border-radius: 1.5rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
				<div class="card-header d-flex justify-content-between" style="border-radius: 1.5rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44;">
					<div>
						<img src="{{ App\User::find($post->user_id)->profile->profileImage() }}" width="40" style="border-radius: 50%">
						<i class="ml-2"><a style="text-decoration: none; color: white;" href="{{ route('profile-show', $post->user_id) }}">{{ App\User::find($post->user_id)->name }}</a></i>
					</div>

					<small style="color: white;">{{ $post->created_at->diffForHumans() }}</small>

				</div>
				<div class="card-body">
					<strong><a style="text-decoration: none;" href="{{ route('post-view', $post) }}">{{ $post->content }}</a><strong>		
				</div>
			</div>
		@empty
			<div>
				No results found...
			</div>
		@endforelse
	</div>

</div>
@endsection