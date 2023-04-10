@extends('layout.app')
@section('content')

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <div class="pull-right">
        <a class="btn btn-success" href="{{ route('posts.create') }}"> Create New Product</a>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>User ID</th>
            <th>Title</th>
            <th>Description</th>
        </tr>

        @foreach ($posts as $post)
            <tr>
                <td>{{ $post->user_id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>
                    <a class="btn btn-info" href="{{ route('posts.show',$post->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('posts.edit',$post->id) }}">Edit</a>
                    <form action="{{ route('posts.destroy',$post->id) }}" method="POST">

                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach

@endsection
