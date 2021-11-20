@extends('layouts.back-app')

@section('pageContent')
    <h1 class="mt-5">{{$category->name}}</h1>
    <h3 class="mt-5">{{$category->slug}}</h3>
    @if (count($category['posts']) > 0)
        <h2 class="my-4">Lista post associati alla categoria:</h2>
    @endif
    @forelse ($category['posts'] as $post)
        <ul>
            <li><a href="{{route('admin.posts.show', $post['id'])}}">{{$post['title']}}</a></li>
        </ul>
    @empty
        <h2 class="my-4"> Nessun post associato a questa categoria</h2>
    @endforelse


@endsection