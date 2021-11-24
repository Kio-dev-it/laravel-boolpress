@extends('layouts.back-app')

@section('pageContent')
    <h1>TAG</h1>
    <h2 class="mt-5">{{$tag->name}}</h2>
    <h3 class="mt-5">{{$tag->slug}}</h3>
    @if (count($tag['posts']) > 0)
        <h2 class="my-4">Lista post associati alla categoria:</h2>
    @endif
    @forelse ($tag['posts'] as $post)
        <ul>
            <li><a href="{{route('admin.posts.show', $post['id'])}}">{{$post['title']}}</a></li>
        </ul>
    @empty
        <h2 class="my-4"> Nessun post associato a questo tag</h2>
    @endforelse


@endsection