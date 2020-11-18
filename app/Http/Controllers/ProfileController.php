<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

use App\User;
use App\Posts;
use App\Profile;

class ProfileController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function show(User $user)
    {
    	$user = User::find($user->id);

      $norm_post = Posts::where([['type', '=', 0], ['user_id', '=', $user->id]])->get();
      $sub_post = Posts::where([['type', '=', 1], ['user_id', '=', $user->id]])->get();

      return view('profile-show', compact('user', 'sub_post', 'norm_post'));
    } 

    public function show_sub(User $user)
    {
      $user = User::find($user->id);

      $norm_post = Posts::where([['type', '=', 0], ['user_id', '=', $user->id]])->get();
      $sub_post = Posts::where([['type', '=', 1], ['user_id', '=', $user->id]])->get();

      return view('profile-show-sub', compact('user', 'sub_post', 'norm_post'));
    }

   	public function edit(User $user)
   	{
   		// dd($user);
   		return view('profile-edit', compact('user'));
   	}

   	public function update(Request $request, User $user)
   	{
   		$data = $request->validate([
   			'bio' => 'required',
   			'image'=> ''
		]);

		if ($request->image) {
			//saves the original
			$imagePath = $request->image->store('profile', 'public');
			// takes the image and modifies it
			// dd(public_path("storage/{$imagePath}"));
			$image = Image::make("storage/{$imagePath}")->fit(1000, 1000);
			// resave the modified image
			$image->save();

			$imgArr = ['image' => $imagePath];

			Storage::delete($user->profile->profileImage());
		}

		auth()->user()->profile->update(array_merge($data, $imgArr ?? []));

	    return redirect(route('home', $user));
   	}
}
