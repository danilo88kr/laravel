<x-layout>

    <div class="container-fluid ">
      <div class="row justify-content-center d-flex  pippo">
         <div class="col-12 col-md-6 d-flex justify-content-center align-items-center">
      
         <h1 class="display-2 fw-medium">Modifica Categoria :{{$category->name}}</h1>
      
        </div>
      </div>
    </div>

    @if (session('message'))
    <div class="alert alert-success">
        {{session('message')}}
    </div>     
    @endif
    
     @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif 




    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6 ">
                <form enctype="multipart/form-data" method="POST" action="{{route('category.update',compact('category'))}}" class="p-4 form-custom rounded-4">
                    @method('PUT')
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome Categoria</label>
                      <input type="text" name="name" 
                      
                      class="form-control @error('name') is-invalid @enderror"
                      value="{{$category->name}}"
                       id="name" > 
                        </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione della Categoria</label>
                        <textarea name="description" class="form-control
                        @error('description') is-invalid @enderror" 
                        
                        id="description" cols="30" rows="10">{{$category->description}}</textarea>
                    </div>
                    <div class="mb-3">
                        <div><img src="{{Storage::url($category->img)}}" height="200" alt=""></div>
                        <label for="img" class="form-label">Inserisci un'immagine</label>
                        <input type="file" name="img" class="form-control" id="img" >   
                    </div>
                    <button type="submit" class="btn btn-warning">Modifica Categoria</button>
                  </form>
            </div>
        </div>
    </div>
   
   </x-layout>