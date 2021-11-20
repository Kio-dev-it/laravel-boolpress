@extends('layouts.back-app')

@section('pageContent')
    <h1 class="mt-5">{{$post->title}}</h1>
    @if ($post['category'] != null)
    <h3>Categoria: {{$post['category']['name']}}</h3>
    @endif
    <h5>{{$post->slug}}</h5>
    <p>{{$post->content}}</p>
    <span>{{$post->created_at}} da <em>{{$post->author}}</em></span>

@endsection