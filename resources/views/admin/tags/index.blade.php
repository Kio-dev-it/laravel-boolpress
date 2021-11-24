@extends('layouts.back-app')

@section('pageContent')
    
    <h2 class="ml-5">Tutti i tag</h2>

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
            @foreach ($tags as $tag)
                <tr>
                    <th scope="row">{{$tag['id']}}</th>
                    <td>{{$tag['name']}}</td>
                    <td>{{$tag['slug']}}</td>
                    <td>
                        <a href="{{route('admin.tags.show', $tag['id'])}}"><button type="button" class="btn btn-primary">Visualizza</button></a>
                        <a href="{{route('admin.tags.edit', $tag['id'])}}"><button type="button" class="btn btn-warning">Modifica</button></a>
                        <button type="button" class="btn btn-danger" data-id="{{$tag["id"]}}" data-toggle="modal" data-target="#deleteModal">Elimina</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Conferma cancellazione Tag</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{route("admin.tags.destroy", $tag['id'])}}" method="POST">
                @csrf
                @method("DELETE")
                <div class="modal-body">
                    Sei sicuro di voler cancellare il tag?
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