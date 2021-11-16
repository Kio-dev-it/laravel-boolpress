<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Boolpress Homepage</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>
        
        <header class="py-2">
            <div class="container text-center">
                <h2>Boolpress</h2>
            </div>
            <div class="container d-flex justify-content-end">
                <a href="{{route('login')}}"><button class="btn btn-light">Accedi</button></a>
            </div>
        </header>

        <main>
            <div class="container homepage_view text-center d-flex flex-wrap align-items-center">
                <h1 class="mega-text">
                    Benvenuti in questo blog
                </h1>
                <a href="{{route('blog.index')}}"><h3>Entra per leggere ciò che scriviamo</h3></a>
                <a href="{{route('register')}}"><h4>Clicca qui per entrare a far parte del nostro team</h4></a>
            </div>
        </main>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>