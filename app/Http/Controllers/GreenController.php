<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

use App\Posts;
use App\User;
use App\Profile;

class GreenController extends Controller
{
	public function green_habit() 
	{
	  return view('green-habit');
	}

	public function green_submission()
	{
		return view('green-submission');
	}

	public function green_makesubmission(Request $request)
	{
		$challenge = $request->challenge;
		$score = 0;

		switch ($challenge) {
			case 'plantTree':
				$score = 3;
				break;
			case 'recycle':
				$score = 2;
				break;
			case 'recycledProducts':
				$score = 2;
				break;
			case 'reducePaper':
				$score = 2;
				break;
			case 'altFuel':
				$score = 3;
				break;
			case 'wtrBottle':
				$score = 1; 	
				break;
		}

		$green_score = auth()->user()->profile->green_score;

		$green_score += $score;

		auth()->user()->profile->update(['green_score' => $green_score]);

		$data = $request->validate([
			'content' => 'required',	
			'challenge' => 'required',
			'region' => 'required',
			'postimage' => 'required'
		]);

		$imagePath = $request->postimage->store('post', 'public');

		$image = Image::make("storage/{$imagePath}")->fit(1200, 1200);

		$image->save();

		$imgArr = ['postimage' => $imagePath];

		$data = array_merge($data, $imgArr, ['type' => 1]);

		auth()->user()->posts()->create($data);

		return redirect()->back()->with(['message' => 'Challenge submission was successful, you earned ' . $score . ' points']);
	}

	public function green_leaderboard()
	{
		$profiles = Profile::all();
		$profiles = $profiles->sortByDesc('green_score');
		// dd($users_data);

		return view('green-leaderboard', compact('profiles'));
	}
}
