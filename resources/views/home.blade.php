@extends('layouts.app')

@section('content')
  @forelse ($posts as $post)
    <div class="container">
      <div class="card mt-4">
        <div class="card-header">
          {{$post->title}}
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{$post->author}}</p>
            <footer class="blockquote-footer">{{$post->created_at}}</footer>
          </blockquote>
        </div>
      </div>
    </div>
  @empty
    <h2>Non ci sono posts</h2>
  @endforelse
@endsection
