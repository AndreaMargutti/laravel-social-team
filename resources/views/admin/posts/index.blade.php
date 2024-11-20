@extends('layouts.app')

@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">Title</th>
        <th scope="col">Author</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
        <tr>
            <th>{{$post->title}}</th>
            <td>{{$post->author}}</td>
        </tr>
        @endforeach
    </tbody>
  </table>

@endsection
