<div class="container">
  <div class="row justify-content-center align-item-center">
     <div class="col-12 col-md-6">

    
<div class="card " style="width: 18rem;">
    <img src="{{Storage::url($category->img)}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h2 class="card-title">{{$category->name}}:</h2>
      <p class="card-text @if(Route::currentRouteName() == 'category.index') text-truncate @endif ">Descrizione:{{$category->description}}</p>

      @if(Route::currentRouteName() == 'category.index')

      <a href="{{route('category.show', compact('category'))}}" class="btn btn-primary mx-1 ">Dettaglio</a>
    
      @else

      <a href="{{route('category.index')}}" class="btn btn-primary mb-2">Torna indietro</a>
      
      @endif

      <a href="{{route('category.edit',compact('category'))}}" class="btn btn-warning ">Modifica articolo</a>

      <form action="{{route('category.destroy',compact('category'))}}" method="POST">
        @method('DELETE')
        @csrf
        
        <button type="submit"  class="btn btn-danger mt-2"> Elimina articolo</button>
       </form>
    </div>
  </div>
</div>
</div>
</div>