<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Laravel</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
          @auth
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.create')}}">Inserisci il tuo Articolo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('category.create')}}">Inserisci una nuova Categoria</a>
          </li>
          @endauth
          <li class="nav-item">
            <a class="nav-link" href="{{route('article.index')}}">I nostri Articoli</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('category.index')}}">Tutte le Categorie</a>
          </li>
          @guest
          <li class="nav-item">
            <a class="nav-link" href="{{route('register')}}">Registrati</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('login')}}">Accedi</a>
          </li>
          @endguest
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{Auth::user()->name}}
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{route('user.dashboard')}}">Dashboard Utente</a></li>
              <li><form  method="POST" action="{{route('logout')}}">
                @csrf
                <button class="dropdown-item" type="submit">Logout</button>
              </form>
            </li>
            
            </ul>
          </li>
          @endauth
         
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>