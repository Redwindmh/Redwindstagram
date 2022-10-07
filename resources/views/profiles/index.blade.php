@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 p-md-5 p-3">
            <img src="{{ $user->profile->profileImage() }}" alt="user-profile-pic" class="img-fluid rounded-circle">
        </div>
        <div class="col-md-9 p-md-5 p-3">
            <div class="d-flex align-items-center">
                <h1>{{ $user->username }}</h1>
                <follow-button user-id="{{ $user->id }}" follows="{{ $follows }}"></follow-button>
                <div class="w-100 text-end">
                    @can('update', $user->profile)
                    <a href="/post/create"><button class="btn btn-dark btn-sm text-white fw-bold pt-1 pb-1 ms-3 mb-2 shadow-lg">+ Add new post</button></a>
                    @endcan
                </div>
            </div>
            <div class="d-flex">
                <div class="pe-4"><strong>{{ $postCount }}</strong> post(s)</div>
                <div class="pe-4"><strong>{{ $followersCount }}</strong> follower(s)</div>
                <div><strong>{{ $followingCount }}</strong> following</div>
            </div>
            <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="{{$user->profile->url}}" class="text-decoration-none text-white" target="_blank"><strong>{{ $user->profile->url ?? 'Your URL goes here!'}}</strong></a></div>
            <div class="mt-3">
                @can('update', $user->profile)
                <a href="/profile/{{$user->username}}/edit" class="text-small text-decoration-none text-dark">(edit profile)</a>
                @endcan
            </div>
        </div>
        <div class="row pt-3">
            @foreach($user->posts as $post)
            <div class="col-4 pb-3">
                <a href="/post/{{ $post->id }}"><img src="/storage/{{ $post->image }}" alt="{{ $post->count()}}" class="img-fluid"></a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection