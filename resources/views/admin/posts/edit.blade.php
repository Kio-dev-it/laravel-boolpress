@extends('layouts.back-app')

@section('pageContent')

    <form class="mt-5" action="{{route('admin.posts.update', $post['id'])}}" method="POST">
    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" name="title" class="form-control" id="title" placeholder="Inserisci qui il titolo del tuo post" value="{{old('title') ?? $post['title']}}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="content">Contenuto del post</label>
            <textarea type="text" rows="8" name="content" class="form-control" id="content">{{old('content') ?? $post['content']}}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="author">Autore</label>
            <input type="text" name="author" class="form-control" id="author" placeholder="Inserisci qui il tuo nome" value="{{old('author') ?? $post['author']}}">
            @error('author')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
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
            @error('category_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <p>Tags</p>
            @foreach ($tags as $tag)
                <div class="custom-control custom-checkbox">
                    {{-- questo if catcha l'errore che viene passato al salvataggio del post qualunque esso sia mostrando i tag old se ci sono (quindi se sono stati 
                    aggiornati in fase di edit, altrimenti si limita a mostrare quelli presenti nel DB) --}}
                    @if ($errors->any())
                        <input {{in_array($tag['id'], old("tags", [])) ? "checked" : null}} name="tags[]" value="{{$tag['id']}}" type="checkbox" class="custom-control-input" id="tag-{{$tag['id']}}">
                    @else
                    {{-- Questa serve a mostrare i tag relativi al post contenuti nel database  --}}
                        <input name="tags[]" {{$post['tags']->contains($tag['id']) ? 'checked' : null}}  value="{{$tag['id']}}" type="checkbox" class="custom-control-input" id="tag-{{$tag['id']}}">
                    @endif
                        <label class="custom-control-label" for="tag-{{$tag['id']}}">{{$tag['name']}}</label>
                </div>
            @endforeach
            @error('tags')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
    
@endsection