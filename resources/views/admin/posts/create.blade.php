@extends('layouts.back-app')

@section('pageContent')
    <form class="mt-5" action="{{route('admin.posts.store')}}" method="POST">
    @csrf

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci qui il titolo del tuo post" value="{{old('title')}}">
        </div>
        <div class="form-group">
            <label for="content">Contenuto del post</label>
            <textarea type="text" rows="8" name="content" class="form-control" id="content">{{old('content')}}</textarea>
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" class="form-control" id="author" placeholder="Inserisci qui il tuo nome" value="{{old('author')}}">
        </div>
        <select name="category_id" id="category_id" class="form-control">
            <option value="">-- Seleziona una categoria --</option>
            @foreach ($categories as $category)
                <option value="{{$category['id']}}">{{$category['name']}}</option>
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary my-3">Salva il post</button>
    </form>
@endsection