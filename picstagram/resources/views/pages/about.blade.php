@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card" style="background-color: black">
                <div class="card-header">{{ __('About') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Thanks for checking out Redwindstagram!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection