@extends('layouts.app')

@section('content')
<div class="container">
    @foreach($posts as $post)
        <div class="row">
            <div class="col-8 offset-2 col-md-6 offset-md-3">
                <a href="/post/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" alt="post_image" class="img-fluid">
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-8 offset-2 col-md-6 offset-md-3 py-4">
                <p><span class="fw-bold pe-1"><a href="/profile/{{ $post->user->username}}" class="text-decoration-none text-white">{{ $post->user->name }}</a></span>{{ $post->caption }}</p>
            </div>
        </div>
    @endforeach

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>

</div>
@endsection
