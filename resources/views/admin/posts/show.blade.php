@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-body">
        <h1 class="card-title">{{$post->title}}</h1>
        <h2 class="card-title">{{$post->author}}</h2>
        <p class="card-text">{{$post->content}}</p>
    </div>
</div>
@endsection
