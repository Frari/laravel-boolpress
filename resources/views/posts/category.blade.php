@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Tutti i post della categoria {{$category->name}}</h1>
  @forelse ($posts as $post)
      <div class="card mt-4">
        <div class="card-header">
          <a href="{{route('post.show', $post->slug)}}">{{$post->title}}</a>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{$post->author}}</p>
            <footer class="blockquote-footer">{{$post->created_at}}</footer>
          </blockquote>
        </div>
      </div>
  @empty
    <h2>Non ci sono posts</h2>
  @endforelse
  </div>
@endsection
