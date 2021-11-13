<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>

    <h1 class="ml-5">Tutti i post</h1>

    <div class="container">
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
    </div>
    <script src="{{asset('js/app.js')}}"></script>
</body>
</html>