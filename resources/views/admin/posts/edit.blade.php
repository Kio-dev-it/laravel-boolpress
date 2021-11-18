@extends('layouts.back-app')

@section('pageContent')

    <form class="mt-5" action="{{route('admin.posts.update', $post['id'])}}" method="POST">
    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci qui il titolo del tuo post" value="{{old('title') ?? $post['title']}}">
        </div>
        <div class="form-group">
            <label for="content">Contenuto del post</label>
            <textarea type="text" rows="8" name="content" class="form-control" id="content">{{old('content') ?? $post['content']}}</textarea>
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" class="form-control" id="author" placeholder="Inserisci qui il tuo nome" value="{{old('author') ?? $post['author']}}">
        </div>
        <select name="category_id" id="category_id" class="form-control">
            <option value="">-- Seleziona una categoria --</option>
            @foreach ($categories as $category)
                @if ( old('category_id') == $category['id'])
                    <option selected value="{{$category['id']}}">{{$category['name']}}</option>
                @elseif(isset($post['category']) && $post['category']['id'] == $category['id']))
                    <option selected value="{{$category['id']}}">{{$category['name']}}</option>
                @else
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                @endif
            @endforeach
        </select>
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
    
@endsection