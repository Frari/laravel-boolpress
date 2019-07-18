@extends('layouts.app')

@section('content')
    <div class="container">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Titolo</th>
            <th>Autore</th>
            <th>Slug</th>
            <th>Creato il</th>
            <th>Modificato il</th>
          </tr>
        </thead>
  @forelse ($posts as $post)
        <tr>
          <td>{{$post->id}}</td>
          <td>{{$post->title}}</td>
          <td>{{$post->author}}</td>
          <td>{{$post->slug}}</td>
          <td>{{$post->created_at}}</td>
          <td>{{$post->updated_at}}</td>
        </tr>
  @empty
    <h2>Non ci sono posts</h2>
  @endforelse
      </table>
    </div>
@endsection
