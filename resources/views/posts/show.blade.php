@extends('layouts.app')

@section('content')
  <div class="container">
    <h1 class="mt-4">{{$post->title}}</h1>
    <p class="mt-4 mb-4">{{$post->content}}</p>
    <em>{{$post->author}}</em>,  <small>{{$post->created_at}}</small>
  </div>

@endsection
