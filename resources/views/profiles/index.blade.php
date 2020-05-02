@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img style="height: 140px;" class="rounded-circle"
                     src="data:image/png;base64,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">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <h1>{{$user->username}}</h1>
                    <a href="/p/create" class="float-right">
                        <button class="btn btn-primary">Add New Post</button>
                    </a>
                </div>
                <div class="d-flex mb-2">
                    <a href="/profile/{{$user->id}}/edit" class="float-right">
                        <button class="btn btn-outline-secondary">Edit Profile</button>
                    </a>
                </div>
                <div class="d-flex">
                    <div class="pr-4"><strong>{{$user->posts->count()}} </strong>posts</div>
                    <div class="pr-4"><strong>23k </strong>followers</div>
                    <div><strong>212 </strong>following</div>
                </div>

                <div class="pt-4"><strong>{{$user->profile->title}}</strong></div>
                <div>{{$user->profile->description}}</div>
                <div>{{$user->profile->URL}}</div>
                <div class="row pt-5 pb-3">
                    @foreach($user->posts as $post)
                        <div class="col-4">
                            <a href="/p/{{$post->id}}">
                                <img src="/storage/{{$post->image}}" class="w-100">
                            </a>
                            <div class="pt-3"><p>{{$post->caption}}</p></div>
                        </div>
                        @endforeach
                </div>

            </div>
        </div>
    </div>
@endsection