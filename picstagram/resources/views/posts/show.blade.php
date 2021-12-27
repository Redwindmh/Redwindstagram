@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="post_image" class="img-fluid">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center pb-3">
                <img src="{{$post->user->profile->profileImage()}}" alt="profile_image" class="w-100 rounded-circle me-3" style="max-width: 50px">
                <div class="fw-bold"><a href="/profile/{{ $post->user_id}}" class="text-decoration-none text-white">{{ $post->user->name }}</a></div>
                {{-- <a href="#" class="ps-3 text-decoration-none fw-bold" user-id="{{ $user ?? ''->id }}" follows="{{ $follows }}">Follow me</a> --}}
            </div>
            <hr>
            <p><span class="fw-bold pe-1"><a href="/profile/{{ $post->user_id}}" class="text-decoration-none text-white">{{ $post->user->name }}</a></span>{{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection
