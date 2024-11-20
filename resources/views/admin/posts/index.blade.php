@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
        <th scope="col">Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th>{{$post->title}}</th>
            <td>{{$post->author}}</td>
            <td>
                <button class="btn btn-primary">
                    <a href="{{route('admin.posts.show', $post)}}">Show</a>
                </button>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
@endsection
