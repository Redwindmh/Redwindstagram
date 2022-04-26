@extends('layouts.app')

@section('content')
<div class="container">
    <form action="/post" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="row">
            <div class="col-8 offset-2">
             <h1 class="text-center mb-3">Add New Post</h1>
                <div class="form-group row">
                    <label for="caption" class="col-md-4 col-form-label text-md-end">Post Caption</label>
                    <div class="col-md-6">
                        <input id="caption" type="text" name="caption" class="text-dark form-control @error('caption') is-invalid @enderror" value="{{ old('caption') }}"  autocomplete="caption" autofocus>
                        @error('caption')
                                <strong>{{ $errors->has('error') }}</strong>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <label for="image" class="col-md-4 col-form-label text-md-end">Post Image</label>
                    <div class="col-md-6">
                        <input type="file" class="form-control-file" id="image" name="image">
                        @error('image')
                                <strong>{{ $errors->has('error') }}</strong>
                        @enderror
                    </div>
                    <div class="text-center pt-3">
                        <button class="btn btn-dark shadow">+ Create New Post</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
