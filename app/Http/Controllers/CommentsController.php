<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Posts;
use App\User;
use App\Comments;

class CommentsController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function store(Request $request, Posts $post)
	{
		$data = $request->validate([
			'comment' => 'required|max:255',
		]);

		$post->comments()->create(array_merge($data, ['user_id' => auth()->user()->id]));

		return redirect(route('post-view', $post));
	}

	public function delete(Comments $cmt)
	{
		$cmt->delete();
		return redirect()->back();
	}

	public function edit(Comments $cmt)
	{
		return view('comment-edit', compact('cmt'));
	}

	public function update(Request $request, Comments $cmt)
	{
		$data = $request->validate([
			'comment' => 'required|max:255',
		]);

		$cmt->where('id', $cmt->id)->update($data);

		$post = Posts::find($cmt->posts_id);

		// dd($cmt->posts_id);

		return redirect(route('post-view', $post));
	}
}
