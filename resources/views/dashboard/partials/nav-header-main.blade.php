<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">Revista electrónica</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      @auth
        <ul class="navbar-nav mr-auto">
          <li class="nav-item mr-sm-2">
            <a class="nav-link" href="{{route('article.index')}}">Artículos<span class="sr-only"></span></a>
          </li>
          <li class="nav-item mr-sm-2">
            <a class="nav-link" href="{{route('category.index')}}">Categorías<span class="sr-only"></span></a>
          </li>
        </ul>
      @else
      @endauth

      <ul class="navbar-nav">
        <li class="nav-item mr-sm-2">
          <a class="nav-link" href="{{route('dashboard')}}">Home<span class="sr-only"></span></a>
        </li>

        @auth
          <li class="nav-item dropdown">
              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                  {{ Auth::user()->name }} <span class="caret"></span>
              </a>

              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                  document.getElementById('logout-form').submit();">
                      {{ __('Salir') }}
                  </a>

                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                      @csrf
                  </form>
              </div>
          </li>
        @else
        @endauth
      </ul>
    </div>
  </nav>

  