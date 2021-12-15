@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex align-items-center">
        <div class="col-3 p-5">
            <img src="/icon/VermilionSummonCircle (1).jpg" alt="user-profile-pic" class="img-fluid rounded-circle">
        </div>
        <div class="col-9 p-5">
            <div class="d-flex align-items-center justify-content-between">
                <h1>{{ $user->username }}</h1>
                <div>
                    <button class="btn btn-dark btn-sm text-white fw-bold pt-1 pb-1 ms-3 mb-2 shadow-lg">+ Add new post</button>
                </div>
            </div>
            <div class="d-flex">
                <div class="pe-4"><strong>6</strong> posts</div>
                <div class="pe-4"><strong>666</strong> followers</div>
                <div><strong>0</strong> following</div>
            </div>
            <div class="pt-3"><strong>{{ $user->profile->title }}</strong></div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#" class="text-decoration-none text-white" target="_blank"><strong>{{ $user->profile->url ?? 'Your URL goes here!'}}</strong></a></div>
        </div>
        <div class="row pt-3">
            <div class="col-4"><img src="/icon/VermilionSummonCircle (1).jpg" alt="pics" class="img-fluid"></div>
            <div class="col-4"><img src="/icon/VermilionSummonCircle (1).jpg" alt="pics" class="img-fluid"></div>
            <div class="col-4"><img src="/icon/VermilionSummonCircle (1).jpg" alt="pics" class="img-fluid"></div>
        </div>
    </div>
</div>
@endsection
