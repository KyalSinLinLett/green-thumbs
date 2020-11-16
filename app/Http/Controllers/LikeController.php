<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Posts;

class LikeController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function store(Posts $post)
	{
		auth()->user()->liked_posts()->toggle($post);
	}

	public function get_like(Posts $post)
	{
		return json_encode(['num_likes' => $post->liked_by->count()]);
	}
}

