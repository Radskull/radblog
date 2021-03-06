@extends('layouts/app')

@section('content')
  <h1>Posts</h1>
  @if(count($posts) > 0)
    @foreach ($posts as $post)
      <div class="card card-body bg-light mt-2">
        <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
        <small>Written on {{$post->created_at->format('F jS Y')}} at {{$post->created_at->format('g:i a')}} </small>
      </div>
    @endforeach
    <br>
    <div class="pagination justify-content-center">
    {{$posts->links()}}
    </div>
  @else
      <p> No posts found</p>
  @endif
@endsection