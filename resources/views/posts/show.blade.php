@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-8">
            <img src="/storage/{{ $post->image }}" alt="" class="w-100">
        </div>
        <div class="col-4">
            <div class="d-flex align-items-center">
                <div class="pe-3">
                    <img src="{{ $post->user->profile->profileImage() }}" alt="" class="w-100 rounded-circle" style="max-width: 35px">
                </div>
                <div>
                    <div class="fw-bolder"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></div>
                </div>
            </div>

            <hr>

            <p><span class="fw-bolder"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span> {{ $post->caption }}</p>
        </div>
    </div>
</div>
@endsection
