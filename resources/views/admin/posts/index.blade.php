@extends('admin.layout.base')

@section('pageContent')
    <h1 class="ml-5">Tutti i post</h1>
        
    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Slug</th>
                <th scope="col">Author</th>
                <th scope="col">Creation Date</th>

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
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection


