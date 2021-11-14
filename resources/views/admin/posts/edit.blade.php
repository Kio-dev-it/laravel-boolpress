@extends('admin.layout.base')

@section('pageContent')

    <form class="mt-5" action="{{route('admin.posts.update', $post['id'])}}" method="POST">
    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci qui il titolo del tuo post" value="{{old('title') ? old('title') : $post['title']}}">
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" name="slug" class="form-control" id="slug" placeholder="Inserisci qui lo slug del tuo post" value="{{old('slug') ? old('slug') : $post['slug']}}">
        </div>
        <div class="form-group">
            <label for="content">Contenuto del post</label>
            <textarea type="text" rows="8" name="content" class="form-control" id="content">{{old('content') ? old('content') : $post['content']}}</textarea>
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" class="form-control" id="author" placeholder="Inserisci qui il tuo nome" value="{{old('author') ? old('author') : $post['author']}}">
        </div>
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
    
@endsection