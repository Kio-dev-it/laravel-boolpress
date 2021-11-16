@extends('layouts.back-app')

@section('pageContent')
    <h1>Boolpress</h1>

    <h2>Sei nel percorso admin/home</h2>
    <a href="{{route('admin.posts.index')}}">Vai a tutti i post</a>
@endsection