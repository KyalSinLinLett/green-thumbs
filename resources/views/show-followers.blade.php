@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Followers list</h3>
	<hr>

	@forelse($followers as $user)
		<div class="card mb-3" style="border-radius: 1.5rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
			<div class="card-body">
				<div class="row">
					<div class="col d-flex align-items-center">
						<div class="mr-3">
							<img src="{{ $user->profile->profileImage() }}" width="40" style="border-radius: 50%">
							<i class="ml-2"><a style="text-decoration: none;" href="{{ route('profile-show', $user->id) }}">{{ $user->name }}</a></i>
						</div>
					
						<strong>{{ $user->profile->bio }}<strong>				
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
@endsection