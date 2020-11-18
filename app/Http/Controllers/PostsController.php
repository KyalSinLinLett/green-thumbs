<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

use App\Posts;
use App\User;

class PostsController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function store(Request $request)
    {
    	$data = $request->validate([
    		'content' => 'required',
    		'postimage' => ''
    	]);

    	if ($request->postimage) 
    	{
    		$imagePath = $request->postimage->store('post', 'public');

    		$image = Image::make("storage/{$imagePath}")->fit(1200, 1200);

    		$image->save();

    		$imgArr = ['postimage' => $imagePath];
    	}

    	auth()->user()->posts()->create(array_merge($data, $imgArr ?? []));

    	return redirect(route('community'));
    }

    public function view(Posts $post)
    {
    	$post = Posts::find($post->id);
    	return view('post-view', compact('post'));
    }

    public function edit(Posts $post)
    {
    	return view('post-edit', compact('post'));
    }

    public function update(Request $request, Posts $post)
    { 
    	$data = $request->validate([
    		'content' => 'required',
    		'postimage' => '',
    	]);

    	if ($request->postimage)
    	{
    		$imagePath = $request->postimage->store('post', 'public');

    		$image = Image::make("storage/{$imagePath}")->fit(1200, 1200);

    		$image->save();

    		$imgArr = ['postimage' => $imagePath];

    		Storage::delete($post->postimage);
    	}

    	Posts::find($post->id)->update(array_merge($data, $imgArr ?? []));

    	return redirect()->back()->with('post');
    }

    public function delete(Posts $post)
    {
    	Storage::delete($post->postimage);
    	$post->delete();
    	$user = $post->user;
    	return redirect(route('profile-show', $user));
    }

    public function remove_image(Posts $post)
    {
    	Storage::delete($post->postimage);
    	Posts::find($post->id)->update(['postimage' => '']);
    	return redirect()->back();
    }

    public function search(Request $request)
    {

        if($request->search != '')
        {
            $users = User::where('name', 'like', '%' . $request->search . '%')->skip(0)->take(8)->get();

            $users = $users->map(function($user) {

                $user->image = $user->profile->profileImage();

                $user->bio = $user->profile->bio;

                return $user;

            });

            $posts = Posts::where('content', 'like', '%' . $request->search . '%')->skip(0)->take(8)->get();

            return view('search-results', compact('posts', 'users'));
        }
    }

    
}
