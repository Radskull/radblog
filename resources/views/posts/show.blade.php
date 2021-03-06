@extends('layouts/app')

@section('content')
  <br>
  <a href="/posts" class="btn btn-outline-secondary">Go Back</a>
  <br>
  <br>
  <h1>{{$post->title}}</h1>
  <div>
    {!!$post->body!!}
  </div>
  <hr>
  <small>Written on {{$post->created_at->format('F jS Y')}} at {{$post->created_at->format('g:i a')}}</small>
  <hr>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-outline-secondary">Edit</a>
 
  {!!Form::open(['action' => ['PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'float-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}

@endsection