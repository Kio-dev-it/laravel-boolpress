@extends('layouts.back-app')

@section('pageContent')

    <h1>Modifica il tag: {{$tag->name}}</h1>

    <form class="mt-5" action="{{route('admin.tags.update', $tag['id'])}}" method="POST">
    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="name">Tag</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Inserisci qui il nome del tag" value="{{old('name') ?? $tag['name']}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
    
@endsection