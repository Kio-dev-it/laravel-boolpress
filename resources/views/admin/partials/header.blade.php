<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Boolpress</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{route('admin.home')}}">Home</a>
              </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.posts.index')}}">Visualizza tutti i post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.posts.create')}}">Crea un nuovo post</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.categories.index')}}">Tutte le categorie</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.categories.create')}}">Crea una nuova categoria</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.tags.index')}}">Tutti i tag</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('admin.tags.create')}}">Crea un nuovo tag</a>
            </li>
          </ul>
        </div>
      </nav>
</header>