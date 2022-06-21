@extends('layouts.app')

@section('content')
<div class="container">
    @forelse($posts as $post)
        <div class="row">
            <div class="col-5 offset-3">
                <a href="/profile/{{ $post->user->id  }}}"><img src="/storage/{{ $post->image }}" alt="" class="w-100"></a>
            </div>
        </div>
        <div class="row">
            <div class="col-6 offset-3 pt-2 pb-4">
                <p><span class="fw-bolder"><a href="/profile/{{ $post->user->id }}">{{ $post->user->username }}</a></span> {{ $post->caption }}</p>
            </div>
        </div>
    @empty
        There aren't posts from your followings...
    @endforelse

    <div class="row">
        <div class="col-12 d-flex justify-content-center">
            {{ $posts->links() }}
        </div>
    </div>
</div>
@endsection
