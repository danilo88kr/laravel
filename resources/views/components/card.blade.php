<div class="container">
  <div class="row justify-content-center ">
    <div class="col-12 col-md-6">

    
<div class="card " style="width: 18rem;">
    <img src="{{Storage::url($article->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      @if(count($article->tags))

      @foreach($article->tags as $tag)

      <span class="badge rounded-pill text-bg-success">#{{$tag->name}}</span>

      @endforeach

      @endif
      <h2 class="card-title">{{$article->title}}:</h2>
      <h3 class="card-title">Autore: @if($article->user) {{$article->user->name}} @else Utente non definito @endif</h3>
      <p class="card-text @if(Route::currentRouteName() == 'article.index') text-truncate @endif ">Descrizione:{{$article->description}}">Articolo{{$article->body}}:</p>

      @if(Route::currentRouteName() == 'article.index')
      <a href="{{route('article.show', compact('article'))}}" class="btn btn-primary mx-1">Dettaglio</a>
      @else
      <a href="{{route('article.index')}}" class="btn btn-primary my-2">Torna indietro</a>
      @endif
      
      <a href="{{route('article.edit', compact('article'))}}" class="btn btn-warning  ">Modifica</a>
       
      <form action="{{route('article.destroy', compact('article'))}}" method="POST">
        @method('DELETE')
        @csrf
        
      <button type="submit" class="btn btn-danger  mt-2">Elimina</button>
      
      </form>
    </div>
  </div>
</div>
</div>
</div>