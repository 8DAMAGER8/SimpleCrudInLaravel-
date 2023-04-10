@extends('layout.app')
@section('content')
    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('posts.index') }}"> back</a>
    </div>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Title:</strong>
                {{ $post->title }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Description:</strong>
                {{ $post->description }}
            </div>
        </div>
    </div>
    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
@endsection
