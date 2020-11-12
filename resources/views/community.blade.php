@extends('layouts.app')

@section('content')
<div class="container">
	@if(!Auth::user())
	<div class="jumbotron">
		Join Our Green Community
	</div>
	<div class="row">
		<div class="col">
			<a href="{{ route('login') }}">Login</a>
		</div>
		<div class="col">
			<a href="{{ route('register') }}">Register</a>
		</div>
	</div>
	@else
	<div>
		<h3>
			Hey, {{ Auth::user()->name }}! See what other green thumbs are sharing!
		</h3>
		<hr>
		<div class="card" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
			<div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
				<h5 class="mt-2">Share something with the community!</h5>
			</div>
			<form action="{{ route('post-share') }}" method="POST" enctype="multipart/form-data">
				@csrf
						
				<div class="mt-0 p-4">
                    <textarea id="content" 
                           type="text" 
                           name="content"
                           rows="4"
                           class="form-control @error('content') is-invalid @enderror" 
                           value="{{ old('content') ?? Auth::User()->profile->content }}" 
                           autocomplete="content" 
                           placeholder="Share your thoughts" required autofocus></textarea>

                    @error('profession')
                         <strong>{{ $message }}</strong>
                    @enderror
                </div> 

                <div class="pl-4 pb-3">
                	<input type="file" accept="*/image" name='postimage'>
                </div>

                <div class="pl-4 pb-3">
                	<input class="btn btn-primary" type="submit" name="submit" value="Share">
                </div>		
			</form>
		</div>
	</div>

	<div class="mt-4">
		<h3>Posts by the community</h3>
		<hr>

		@forelse(App\Posts::orderBy("created_at", 'desc')->get() as $post)
			<div class="card">
				<div class="card-body">
					<p><a href="{{ route('profile-show', $post->user) }}">{{ $post->user->name }}</a> said</p>
					<a style="text-decoration: none;" href="{{ route('post-view', $post->id) }}">{{ $post->content }}</a>
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
		@empty
			<p>Such empty...</p>
		@endforelse
	</div>
	@endif
</div>
@endsection