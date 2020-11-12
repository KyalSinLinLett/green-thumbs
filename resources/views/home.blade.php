@extends('layouts.app')

@section('content')
<div class="container">
    <h3>
        My Profile
    </h3>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="row align-items-center">
                <div class="col-lg-2">
                    <img src="{{ $user->profile->profileImage() }}" width="100%" style="border-radius: 50%">
                </div>
                <div class="col-10">
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
            </div>
        </div>
    </div>
    <hr>
    <h4>Your posts</h4>
    <hr>
    <div class="card">
        <div>
            Posts
        </div>
    </div>
</div>
@endsection
