<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Profile;

class FollowsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function store(User $following) // user that is going to follow some other user
	{
		auth()->user()->following()->toggle($following->profile);
	}

	public function getFollowers(User $user)
	{
		return json_encode(['follower_count' => $user->profile->followers->count()]);
	}

	public function getFollowing(User $user)
	{
		return json_encode(['following_count' => $user->following->count()]);
	}

	public function showFollowers(User $user)
	{
		$followers = $user->profile->followers;

		return view('show-followers', compact('followers'));
	}

	public function showFollowing(User $user)
	{
		$following = $user->following;

		return view('show-following', compact('following'));
	}
}
