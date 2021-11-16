@extends('layouts.front-app')

@section('pageContent')

    
    <div class="container">
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">{{$posts[0]['title']}}</h1>
            <p class="lead my-3">{{$posts[0]['content']}}</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
            </div>
        </div>
        
        <main role="main" class="container">
            <div class="row">
                <div class="col-md-8 blog-main">
                <h3 class="pb-4 mb-4 font-italic border-bottom">
                    From the Boolpress Insiders
                </h3>
            
                @foreach ($posts as $post)
                    <div class="blog-post">
                        <a href="{{route('blog.show', $post['slug'])}}">
                            <h2 class="blog-post-title">{{$post['title']}}</h2>
                        </a>
                        <p class="blog-post-meta">{{$post['created_at']->diffForHumans()}} by {{$post['author']}}</p>
                        
                        <p>{{$post['content']}}</p>
                    </div><!-- /.blog-post -->
                @endforeach
                </div><!-- /.blog-main -->
            
                <aside class="col-md-4 blog-sidebar">
                <div class="p-4 mb-3 bg-light rounded">
                    <h4 class="font-italic">About</h4>
                    <p class="mb-0">Saw you downtown singing the Blues. Watch you circle the drain. Why don't you let me stop by? Heavy is the head that <em>wears the crown</em>. Yes, we make angels cry, raining down on earth from up above.</p>
                </div>
            
                <div class="p-4">
                    <h4 class="font-italic">Archives</h4>
                    <ol class="list-unstyled mb-0">
                    <li><a href="#">March 2021</a></li>
                    <li><a href="#">February 2021</a></li>
                    <li><a href="#">January 2021</a></li>
                    <li><a href="#">December 2020</a></li>
                    </ol>
                </div>
            
                <div class="p-4">
                    <h4 class="font-italic">Elsewhere</h4>
                    <ol class="list-unstyled">
                    <li><a href="#">GitHub</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">Facebook</a></li>
                    </ol>
                </div>
                </aside><!-- /.blog-sidebar -->
            
            </div><!-- /.row -->
        </main><!-- /.container -->
    </div>
    
@endsection