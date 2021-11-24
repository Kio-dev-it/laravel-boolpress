@extends('layouts.back-app')

@section('pageContent')
    <h2 class="ml-5">Tutti i post</h2>

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
                <th scope="col">Titolo</th>
                <th scope="col">Slug</th>
                <th scope="col">Categoria</th>
                <th scope="col">Tags</th>
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
                    <td>{{$post['category'] != null ? $post['category']['name'] : ""}}</td>
                    <td>
                            @if (count($post['tags']) > 0)
                                @foreach ($post['tags'] as $tag)
                                    <span class="badge badge-success">{{$tag['name']}}</span>
                                @endforeach
                            @endif
                    </td>
                    <td>{{$post['author']}}</td>
                    <td>{{$post['created_at']}}</td>
                    <td>
                        <a href="{{route('admin.posts.show', $post['id'])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
                        <a href="{{route('admin.posts.edit', $post['id'])}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                        <button type="button" class="btn btn-danger" data-id="{{$post["id"]}}" data-toggle="modal" data-target="#deleteModal">Elimina</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

<!-- Modal for Delete-->


    <div class="modal fade" id="deleteModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Conferma cancellazione Post</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route("admin.posts.destroy", $post['id'])}}" method="POST">
                @csrf
                @method("DELETE")
                <div class="modal-body">
                    Sei sicuro di voler cancellare il post?
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Si</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </form>
            </div>
        </div>
    </div>
@endsection


