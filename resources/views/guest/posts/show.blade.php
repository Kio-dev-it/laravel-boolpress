@extends('layouts.front-app')

@section('pageContent')
    <div class="container">
        <h1>{{$post->title}}</h1>
        <p>{{$post->content}}</p>
        <span>{{$post['created_at']->diffForHumans()}} by {{$post->author}}</span>
    </div>
@endsection