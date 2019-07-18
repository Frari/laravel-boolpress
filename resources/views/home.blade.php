@extends('layouts.app')

@section('content')
  @forelse ($posts as $post)
    <div class="container">
      <div class="card mt-4">
        <div class="card-header">
          <a href="{{route('posts.show', $post->slug)}}">{{$post->title}}</a>
        </div>
        <div class="card-body">
          <blockquote class="blockquote mb-0">
            <p>{{$post->author}}</p>
            <footer class="blockquote-footer">{{$post->created_at}}
              <em>
                @if (!empty($post->category))
                    (<a href="{{route('posts.category', $post->category->slug)}}">{{$post->category->name}}</a>)
                @else
                  (Category n.a.)
                @endif
              </em>
            </footer>
          </blockquote>
        </div>
      </div>
    </div>
  @empty
    <h2>Non ci sono posts</h2>
  @endforelse
@endsection
