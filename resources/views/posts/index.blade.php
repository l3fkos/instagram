@extends('layouts.app')

@section('content')
    <div class="container">
        @foreach($posts as $post)
            <div class="row">
                <div class="col-6 offset-2 pb-3">
                    <img src="/storage/{{$post->image}}" class="w-100">
                </div>
                <div class="col-4">
                    <div class="d-flex align-items-center mb-3">
                        <div>
                            <img src="{{$post->user->profile->profileImage()}}" alt="profile image" class="rounded-circle w-100" style="max-width: 50px;">
                        </div>
                        <div class="pl-3 d-flex">
                            <h5>
                                <a href="/profile/{{$post->user->id}}"><strong><span class="text-dark">{{$post->user->username}}</span></strong></a></h5>
                            <a href="#" class="pl-3">Follow</a>
                        </div>
                    </div>
                    <hr>
                    <p><span class="pr-3"><a href="/profile/{{$post->user->id}}"><strong><span class="text-dark">{{$post->user->username}}</span></strong></a></span>{{$post->caption}}</p>
                </div>
            </div>
        @endforeach
            <div class="row">
                <div class="col-12 d-flex justify-content-center">
                    {{$posts->links()}}
                </div>
            </div>
    </div>
@endsection
