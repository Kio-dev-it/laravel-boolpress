@extends('layouts.back-app')

@section('pageContent')
    <form class="mt-5" action="{{route('admin.categories.store')}}" method="POST">
    @csrf

        <div class="form-group">
            <label for="name">Categoria</label>
            <input type="text" name="name" class="form-control" id="name" placeholder="Inserisci il nome della nuova categoria" value="{{old('name')}}">
            @error('name')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary my-3">Salva</button>
    </form>
@endsection