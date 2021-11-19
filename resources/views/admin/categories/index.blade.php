@extends('layouts.back-app')

@section('pageContent')
    
<h2 class="ml-5">Tutte le categorie</h2>

@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button>    
    <strong>{{ $message }}</strong>
</div>
@endif
    
<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Slug</th>
            <th scope="col">Azioni</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <th scope="row">{{$category['id']}}</th>
                <td>{{$category['name']}}</td>
                <td>{{$category['slug']}}</td>
                <td>
                    <a href="{{route('admin.categories.show', $category['id'])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
                    <a href="{{route('admin.categories.edit', $category['id'])}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                    <form class="d-inline-block" action="{{route('admin.categories.destroy', $category['id'])}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Elimina</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection