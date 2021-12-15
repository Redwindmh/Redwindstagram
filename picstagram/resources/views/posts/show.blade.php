@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="img-fluid">                
        </div>
        <div class="col-4">
            <h3>{{ $post->user->name }}</h3>
            <p>{{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection
