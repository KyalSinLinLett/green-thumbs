@extends('layouts.app')

@section('content')
<div class="container">
	<form action="{{ route('profile-update', $user->profile->id) }}" method="POST" enctype="multipart/form-data">
		@csrf

		<div class="form-group">
			<div>
				<label for="bio" style="font-style: italic;">Biography</label>
				<input id="bio" type="text" class="form-control" name="bio" value="{{ $user->profile->bio }}" placeholder="Biography" required>
			</div>
			<br>
			<div>
				<img src="{{ $user->profile->profileImage() }}" width="40%">
			</div>
			<div>
				<p>Current profile image</p>
				<input id="image" type="file" accept="image/*" name="image">	
			</div>
			<br>
			<button type="submit" class="btn btn-primary">
			    Update
			</button>	
		</div>

	</form>
</div>
@endsection