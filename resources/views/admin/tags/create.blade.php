@extends('layouts.back-app')

@section('pageContent')
    <h1>Crea un nuovo tag</h1>

    <form class="mt-5" action="{{route('admin.tags.store')}}" method="POST">
    @csrf

        <div class="form-group">
            <label for="name">Tag</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Inserisci il nome del nuovo tag" value="{{old('name')}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-3">Salva</button>
    </form>
@endsection