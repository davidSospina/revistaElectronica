<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">Revista electrónica</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item mr-sm-2">
          <a class="nav-link" href="{{route('article.index')}}">Artículos<span class="sr-only"></span></a>
        </li>
        <li class="nav-item mr-sm-2">
          <a class="nav-link" href="{{route('category.index')}}">Categorías<span class="sr-only"></span></a>
        </li>
      </ul>

      <ul class="navbar-nav">
        <li class="nav-item mr-sm-2">
          <a class="nav-link" href="{{route('dashboard')}}">Home<span class="sr-only"></span></a>
        </li>

        <li class="nav-item dropdown">
            
        </li>

      </ul>
    </div>
  </nav>

  