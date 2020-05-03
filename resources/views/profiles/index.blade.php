@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-3 p-5">
                <img style="height: 140px;" class="rounded-circle"
                     src="{{$user->profile->profileImage()}}" class="rounded-circle w-100">
            </div>
            <div class="col-9 pt-5">
                <div class="d-flex justify-content-between align-items-baseline">
                    <div class="d-flex align-items-center">
                        <h1 class="pr-4">{{$user->username}}</h1>
                        <follow-button follows="{{$follows}}" user-id="{{$user->id}}"></follow-button>
                    </div>
                    @can('update', $user->profile)
                        <a href="/p/create" class="float-right">
                            <button class="btn btn-primary">Add New Post</button>
                        </a>
                    @endcan
                </div>
                <div class="d-flex mb-2">
                    @can('update', $user->profile)
                        <a href="/profile/{{$user->id}}/edit" class="float-right">
                            <button class="btn btn-outline-secondary p-1">Edit Profile</button>
                        </a>
                    @endcan
                </div>
                <div class="d-flex">
                    <div class="pr-4"><strong>{{$user->posts->count()}} </strong>posts</div>
                    <div class="pr-4"><strong>{{$user->profile->followers->count()}}</strong> followers</div>
                    <div><strong>{{$user->following->count()}} </strong>following</div>
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
