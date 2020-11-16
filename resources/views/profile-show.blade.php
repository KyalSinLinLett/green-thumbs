@extends('layouts.app')

@section('content')
<div class="container">
    @if(Auth::id() == $user->profile->id)
    <h3>
        My Profile
    </h3>
    @else
    <h3>{{$user->name}}'s Profile</h3>    
    @endif
    <hr>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <img src="{{ $user->profile->profileImage() }}" width="100%" style="border-radius: 50%">
                </div>
                <div class="col-4">
                    <ul>
                        <li>
                            {{ $user->name }}
                        </li>
                        <li>
                            {{ $user->email }}
                        </li>
                        <li>
                            {{ $user->profile->bio }}
                        </li>
                        @can('update', $user->profile)
                        <a class="btn btn-primary mt-3" href="{{ route('profile-edit', $user->id) }}">Edit</a>
                        @endcan
                    </ul>
                </div>
                <div class="col-6">
                    @if(Auth::id() != $user->id)
                        <div class="row">
                            <div class="col-4">
                                <follow-component uid="{{ $user->id }}" follows="{{ auth()->user()->following->contains($user->profile) }}"/>  
                            </div>
                        </div>
                    @else
                        <div style="text-align: center;">
                            <table class="table">
                              <thead class="thead">
                                <tr>
                                  <th scope="col">Followers</th>
                                  <th scope="col">Following</th>
                                </tr>
                              </thead>
                              <tbody>
                                <tr>
                                  <td>{{auth()->user()->profile->followers->count()}}</td>
                                  <td>{{auth()->user()->following->count()}}</td>
                                </tr>
                              </tbody>
                            </table>            
                        </div>  
                    @endif
                </div>


            </div>
        </div>
    </div>
    <hr>
    @if(Auth::id() == $user->profile->id)
    <h4>Your posts</h4>
    @else
    <h4>{{$user->name}}'s posts</h4>    
    @endif
    <hr>
    @forelse($user->posts as $post)
    <div class="card">
        <div class="card-body">
            <p><a href="{{ route('profile-show', $post->user) }}">{{ $post->user->name }}</a> said</p>
            <a style="text-decoration: none;" href="{{ route('post-view', $post->id) }}">{{ $post->content }}</a>
            @if($post->postimage)
            <div class="row">
                <div class="offset-3 col-6">
                    <img src="{{ '/storage/' . $post->postimage }}" class="w-100">
                </div>
            </div>
            @endif
            <p>{{ $post->created_at->diffForHumans() }}</p>
        </div>
    </div>
    @empty
    <p>Such empty...</p>
    @endforelse
</div>
@endsection
