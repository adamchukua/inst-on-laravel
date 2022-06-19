@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3 p-5">
            <img src="https://workmacro.com/wp-content/uploads/2018/02/1-by-1-1024x1024.png" alt="" class="rounded-circle avatar ">
        </div>
        <div class="col-9 pt-5">
            <div class="div">
                <h1>{{ $user->username }}</h1>
            </div>
            <div class="d-flex">
                <div class="pe-5"><strong>2</strong> posts</div>
                <div class="pe-5"><strong>15</strong> followers</div>
                <div class="pe-5"><strong>23</strong> following</div>
            </div>
            <div class="pt-4 fw-bolder">{{ $user->profile->title }}</div>
            <div>{{ $user->profile->description }}</div>
            <div><a href="#">{{ $user->profile->url }}</a></div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-4">
            <img src="https://png.pngtree.com/png-clipart/20210227/ourlarge/pngtree-1x1-rubik-s-cube-png-image_2965079.jpg" class="w-100" alt="">
        </div>
        <div class="col-4">
            <img src="https://shoonia.github.io/1x1/favicon.png" class="w-100"alt="">
        </div>
        <div class="col-4">
            <img src="https://www.kindpng.com/picc/m/103-1034180_pixel-heart-png-transparent-png.png" class="w-100"alt="">
        </div>
    </div>
</div>
@endsection
