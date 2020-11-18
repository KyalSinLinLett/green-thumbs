@extends('layouts.app')

@section('content')
<div class="container">
	<h3>Following list</h3>
	<hr>

	@forelse($following as $user)
		<div class="card mb-3" style="border-radius: 1.5rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
			<div class="card-body">
				<div class="row">
					<div class="col d-flex align-items-center">
						<div class="mr-3">
							<img src="{{ $user->profileImage() }}" width="40" style="border-radius: 50%">
							<i class="ml-2"><a style="text-decoration: none;" href="{{ route('profile-show', $user->id) }}">{{ $user->user->name }}</a></i>
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
@endsection