@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="offset-1 col-10">
            <div class="d-flex align-items-center justify-content-between">
                @if(Auth::id() == $user->id)
                <h3>Your profile</h3>
                @else
                <h3>
                    {{ $user->name }}'s profile
                </h3>
                @endif

                <div>
                    @can('update', $user->profile)
                    <a class="btn btn-primary mt-3" href="{{ route('profile-edit', $user->id) }}">Edit</a>
                    @endcan
                </div>
            </div>
            <hr>
            
            <div class="card" style="border-radius: 1rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
                <div class="card-body">
                    <div class="row text-align-center">
                        <div class="col-4">
                            <div class="row">
                                <img class="ml-5" src="{{ $user->profile->profileImage() }}" width="100%" style="border-radius: 50%">                            
                            </div>
                        </div>
                        <div class="col ml-4 mt-3">
                            <div class="row">
                                <ul>    
                                    <h3>
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M10 5a2 2 0 1 1-4 0 2 2 0 0 1 4 0zM8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm6 5c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
                                        </svg>
                                        <strong>{{ $user->name }}</strong>
                                    </h3>

                                    <li>
                                        <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-blockquote-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path fill-rule="evenodd" d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/>
                                          <path d="M12.168 6.352c.184.105.332.197.445.275.114.074.229.174.346.299.11.117.193.24.252.369s.1.295.123.498h-.281c-.243 0-.432.06-.569.182-.14.117-.21.29-.21.521 0 .164.062.318.187.463.121.14.289.21.504.21.336 0 .576-.108.72-.327.145-.223.217-.514.217-.873 0-.254-.054-.485-.164-.692a2.436 2.436 0 0 0-.398-.562c-.16-.168-.33-.31-.51-.428-.18-.117-.33-.213-.451-.287l-.211.352zm-2.168 0c.184.105.332.197.445.275.114.074.229.174.346.299.113.12.2.246.258.375.055.125.094.289.117.492h-.281c-.242 0-.432.06-.569.182-.14.117-.21.29-.21.521 0 .164.062.318.187.463.121.14.289.21.504.21.336 0 .576-.108.72-.327.145-.223.217-.514.217-.873 0-.254-.054-.485-.164-.692a2.438 2.438 0 0 0-.398-.562c-.16-.168-.33-.31-.51-.428-.18-.117-.33-.213-.451-.287L10 6.352z"/>
                                        </svg>
                                        {{ $user->profile->bio }}
                                    </li>
                                    <li>
                                        <svg width="1.3em" height="1.3em" viewBox="0 0 16 16" class="bi bi-joystick" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                          <path d="M7.106 15.553L.553 12.276A1 1 0 0 1 0 11.382V9.471a1 1 0 0 1 .606-.89L6 6.269v1.088L1 9.5l5.658 2.83a3 3 0 0 0 2.684 0L15 9.5l-5-2.143V6.27l5.394 2.312a1 1 0 0 1 .606.89v1.911a1 1 0 0 1-.553.894l-6.553 3.277a2 2 0 0 1-1.788 0z"/>
                                          <path fill-rule="evenodd" d="M7.5 9.5v-6h1v6h-1z"/>
                                          <path d="M10 9.75c0 .414-.895.75-2 .75s-2-.336-2-.75S6.895 9 8 9s2 .336 2 .75zM10 2a2 2 0 1 1-4 0 2 2 0 0 1 4 0z"/>
                                        </svg>
                                        <strong>Green score: </strong>{{ $user->profile->green_score }}
                                    </li>
                                </ul>
                            </div>
                            <div class="row">
                                @if(Auth::id() != $user->id)
                                <div class="row ml-3">
                                    <follow-component uid="{{ $user->id }}" follows="{{ auth()->user()->following->contains($user->profile) }}"/>  
                                    </div>
                                    @else
                                    <div class="ml-3" style="text-align: center;">
                                        <table class="table">
                                            <thead class="thead">
                                                <tr>
                                                    <th scope="col">Followers</th>
                                                    <th scope="col">Following</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><a href="{{ route('followers-show', $user->id) }}">{{auth()->user()->profile->followers->count()}}</a></td>
                                                    <td><a href="{{ route('following-show', $user->id) }}">{{auth()->user()->following->count()}}</a></td>
                                                </tr>
                                            </tbody>
                                        </table>            
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<div class="row">
    <div class="offset-1 col-10">
        <hr>
        @if(Auth::id() == $user->profile->id)
        <h4>Your posts</h4>
        @else
        <h4>{{$user->name}}'s posts</h4>    
        @endif
        <hr>

        <ul class="nav nav-tabs justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('profile-show', $user->id) }}">Community posts</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="{{ route('profile-show-sub', $user->id) }}">Challenge submissions</a>
            </li>
        </ul>

        <hr>
        <strong>You can see all the submissions for the challenges here.</strong>
        <hr>

        @forelse($sub_post as $post)
        <div class="card mt-3 mb-3" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48);">
            <div class="card-header text-light" style="border-radius: 2rem; box-shadow: 7px 7px 15px -10px rgba(0,0,0,0.48); background-color: #4faebb">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <img src="{{ $post->user->profile->profileimage() }}" width="40" style="border-radius: 50%">
                        <i class="ml-2"><a style="text-decoration: none; color: white;" href="{{ route('profile-show', $post->user) }}">{{ $post->user->name }}</a></i> 
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <a class="ml-3" style="text-decoration: none; color: black;" href="{{ route('post-view', $post->id) }}">{{ $post->content }}</a>
                        <ul>
                            <li><strong>{{ $post->challenge }} Challenge</strong></li>
                            <li>Region: {{ $post->region }}</li>
                        </ul>
                    </div>

                    <div>
                        <p>{{ $post->created_at->diffForHumans() }}</p>
                    </div>
                </div>

                @if($post->postimage)
                <div class="row">
                    <div class="p-3">
                        <img src="{{ '/storage/' . $post->postimage }}" class="w-100">
                    </div>
                </div>
                @endif

                <hr>

                <div>
                    <like-component num_likes="{{ $post->liked_by->count() }}" pid="{{ $post->id }}" likes="{{ auth()->user()->liked_posts->contains($post->id) }}"></like-component>
                </div>

            </div>
        </div>
        @empty
        <p>Such empty...</p>
        @endforelse
    </div>
</div>
</div>
@endsection
