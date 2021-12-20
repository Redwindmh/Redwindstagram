@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/profile/{{ $user->id }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PATCH')
        <div class="row">
            <div class="col-8 offset-2">
             <h1 class="text-center mb-3">Edit Profile</h1>
                <div class="form-group row mb-3">
                    <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
                    <div class="col-md-6">
                        <input id="title" type="text" name="title" class="text-white form-control @error('title') is-invalid @enderror" value="{{ old('title') ?? $user->profile->title }}"  autocomplete="title" autofocus>
                        @error('title')
                                <strong>{{ $errors->has('error') }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="form-group row mb-3">
                    <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
                    <div class="col-md-6">
                        <input id="description" type="text" name="description" class="text-white form-control @error('description') is-invalid @enderror" value="{{ old('description') ?? $user->profile->description}}"  autocomplete="description" autofocus>
                        @error('description')
                                <strong>{{ $errors->has('error') }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="form-group row">
                    <label for="url" class="col-md-4 col-form-label text-md-end">URL</label>
                    <div class="col-md-6">
                        <input id="url" type="text" name="url" class="text-white form-control @error('url') is-invalid @enderror" value="{{ old('url') ?? $user->profile->url }}"  autocomplete="url" autofocus>
                        @error('url')
                                <strong>{{ $errors->has('error') }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="image" class="col-md-4 col-form-label text-md-end">Profile Image</label>
                    <div class="col-md-6">
                        <input type="file" class="form-control-file" id="image" name="image">
                        @error('image')
                                <strong>{{ $errors->has('error') }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="text-center pt-3">
                    <button class="btn btn-dark shadow">Save Profile</button>
                </div>   
        </div>   
    </form>  
</div>
@endsection
