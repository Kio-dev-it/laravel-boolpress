@extends('layouts.back-app')

@section('pageContent')

    <form class="mt-5" action="{{route('admin.categories.update', $category['id'])}}" method="POST">
    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="name">Categoria</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Inserisci qui il titolo del tuo post" value="{{old('name') ?? $category['name']}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva Modifiche</button>
    </form>
    
@endsection