@extends('layouts.app')

@section('content')
<div class="container">

	@guest
	<div class="row">
		<a href="{{ route('community') }}" class="btn btn-primary">Join the community to enter challenges</a>
	</div>
	@else

	<div class="row">
		<div class="offset-1 col-10">
			@if(session()->has('message'))
			<div class="card px-3 py-3 bg-success text-light">{{session()->get('message')}}</div>
			@endif

			<h3>Challenge submission</h3>
			<h5>Congrats! Your action today will have a great impact on the environment. Thank you for participating and making our nation greener.</h5>
			<hr>

			
			<div class="card" style="border-radius: 1.5rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">

				<div class="card-header text-light" style="border-radius: 1.5rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #436e44">
					<h3 class="mt-2">Make a challenge submission</h3>
				</div>
				<div class="card-body">
					<form action="{{ route('green-makesubmission') }}" method="POST" enctype="multipart/form-data">
						@csrf

						<div class="mb-3">
						    <textarea class="form-control" name="content" placeholder="Say something about this submission post" required></textarea>
						</div>

						<div class="mb-3">
							<div class="input-group is-invalid">
								<div class="input-group-prepend">
									<label class="input-group-text" for="validatedInputGroupSelect1">Challenges</label>
								</div>
								<select name="challenge" class="custom-select"required>
									<option value="">Choose the challenge you are submitting for...</option>
									<option value="plantTree">Plant a tree (+3)</option>
									<option value="recycle">Recycle (+2)</option>
									<option value="recycledProducts">Using recycled products (+2)</option>
									<option value="reducePaper">Using less paper products (+2)</option>
									<option value="altFuel">Using alternative fuel (+3)</option>
									<option value="wtrBottle">Taking a reusable water bottle to work/school (+1)</option>
								</select>
							</div>
						</div>

						<div class="mb-3">
							<div class="input-group is-invalid">
								<div class="input-group-prepend">
									<label class="input-group-text" for="validatedInputGroupSelect2">Region</label>
								</div>
								<select name="region" class="custom-select"required>
									<option value="">Represent your region...</option>
									<option value="yangon">Yangon</option>
									<option value="naypyitaw">Naypyitaw</option>
									<option value="mandalay">Mandalay</option>
									<option value="mon">Mon</option>
									<option value="rakhine">Rakhine</option>
									<option value="kayah">Kayah</option>
									<option value="kachin">Kachin</option>
									<option value="chin">Chin</option>
									<option value="kayin">Kayin</option>
									<option value="shan">Shan</option>
									<option value="sagaing">Sagaing</option>
									<option value="tanintharyi">Tanintharyi</option>
									<option value="bago">Bago</option>
									<option value="magway">Magway</option>
								</select>
							</div>
						</div>

						<div class="custom-file mb-3">
						  <input type="file" name="postimage" accept="*/image"class="custom-file-input" id="validatedCustomFile" required>
						  <label class="custom-file-label" for="validatedCustomFile">Add a picture to your post to show the community what you did...</label>
						</div>

						<div>
							<button data-toggle="modal" data-target="#honestyModal" class="btn btn-primary" type="submit">Create submission</button>
						</div>
					</form>
				</div>
			</div>	
		</div>
	</div>
	@endguest
</div>
@endsection