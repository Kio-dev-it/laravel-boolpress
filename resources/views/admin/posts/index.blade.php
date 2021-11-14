@extends('admin.layout.base')

@section('pageContent')
    <h2 class="ml-5">Tutti i post</h2>
        
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Autore</th>
                <th scope="col">Creazione</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <th scope="row">{{$post['id']}}</th>
                    <td>{{$post['title']}}</td>
                    <td>{{$post['slug']}}</td>
                    <td>{{$post['author']}}</td>
                    <td>{{$post['created_at']}}</td>
                    <td>
                        <a href="{{route('admin.posts.show', $post['id'])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


