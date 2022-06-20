@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="{{ $user->profile->profileImage() }}" alt="" class="rounded-circle avatar ">
        </div>
        <div class="col-9 pt-5">
            <div class="div d-flex align-items-center">
                <h1>{{ $user->username }}</h1>
                @can('update', $user->profile)
                    <a href="/profile/{{ $user->id }}/edit"><button class="btn btn-primary ms-3">Edit Profile</button></a>
                @endcan
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>{{ $user->posts->count() }}</strong> posts</div>
                <div class="pe-5"><strong>15</strong> followers</div>
                <div class="pe-5"><strong>23</strong> following</div>
            </div>
            <div class="pt-4 fw-bolder">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        @foreach ($user->posts as $post)
            <div class="col-4 pb-4">
                <a href="/p/{{ $post->id }}">
                    <img src="/storage/{{ $post->image }}" class="w-100" alt="">
                </a>
            </div>
        @endforeach
    </div>
</div>
@endsection
