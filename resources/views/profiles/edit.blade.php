@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Profile</h2>
        <form action="/profile/{{$user->id}}" enctype="multipart/form-data" method="post">
            @csrf
            @method('PATCH')
            <div class="row">
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="title" class="col-md-4 col-form-label">Title</label>
                        <input id="caption" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') ?? $user->profile->title }}" required autocomplete="title">
                    </div>
                </div>
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="description" class="col-md-4 col-form-label">Description</label>
                        <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description" value="{{ old('description') ?? $user->profile->description }}" required autocomplete="description">
                        @if($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                        @endif

                    </div>
                </div>
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="url" class="col-md-4 col-form-label">URL</label>
                        <input id="url" type="text" class="form-control @error('url') is-invalid  <strong>{{ $message }}</strong> @enderror" name="url" value="{{ old('url') ?? $user->profile->url }}" required autocomplete="url">
                        @if($errors->has('url'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="col-8 offset-2">
                    <div class="form-group row">
                        <label for="image" class="col-md-4 col-form-label">Profile Image</label>
                    </div>
                    <div class="row">
                        <input type="file" class="form-control-file" id="image" name="image">
                        @error('image')
                        <strong>{{ $message }}</strong>
                        @enderror
                    </div>
                    <div class="row pt-4">
                        <button class="btn btn-primary">Save Profile</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
@endsection
