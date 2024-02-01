<x-layout>

    <div class="container-fluid ">
      <div class="row  justify-content-center pippo">
         <col-12 class="col-md-6 d-flex justify-content-center align-items-center">
      
         <h1 class="display-2 fw-medium mt-5">Crea Categoria</h1>
      
        </col-12>
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
        <div class="row justify-content-center mt-5 ">
            <div class="col-12 col-md-6 ">
                <form enctype="multipart/form-data" method="POST" action="{{route('category.store')}}" class="form-custom rounded-4 p-4">
                    @csrf
                    <div class="mb-3">
                      <label for="name" class="form-label">Nome Categoria</label>
                      <input type="text" name="name" 
                      
                      class="form-control @error('name') is-invalid @enderror"
                      value="{{old('name')}}"
                       id="name" > 
                        </div>
                    
                    <div class="mb-3">
                        <label for="description" class="form-label">Descrizione della Categoria</label>
                        <textarea name="description" class="form-control
                        @error('description') is-invalid @enderror" 
                        
                        id="description" cols="30" rows="10">{{old('description')}}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci un'immagine</label>
                        <input type="file" name="img" class="form-control" id="img" >   
                    </div>
                    <button type="submit" class="btn btn-primary">Inserisci Categoria</button>
                  </form>
            </div>
        </div>
    </div>
   
   </x-layout>