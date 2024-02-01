<x-layout>

    <div class="container-fluid ">
      <div class="row justify-content-center pippo">
         <col-12 class="col-md-6 d-flex justify-content-center align-items-center">
      
         <h1 class="display-2 fw-medium mt-5">Crea il tuo Articolo</h1>
      
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
        <div class="row justify-content-center mt-5">
            <div class="col-12 col-md-6 form-custom rounded-4 p-4">
                <form enctype="multipart/form-data" method="POST" action="{{route('article.store')}}" "p-4 shadow my-5 rounded-4 bg-white">
                    @csrf
                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo articolo</label>
                      <input type="text" name="title" 
                      
                      class="form-control @error('title') is-invalid @enderror"
                      value="{{old('title')}}"
                       id="title" > 

                      
                        </div>
              
                    <div>
                        <select class="form-select" name="category" aria-label="Default select example">
                            <option selected>Seleziona una categoria</option>
                            @foreach($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                            @endforeach
                          </select>
                    </div>

                    
                    <div class="mb-3">
                        <label for="body" class="form-label  ">Testo articolo</label>
                        <textarea name="body" class="form-control
                        @error('body') is-invalid @enderror" 
                        
                        id="body" cols="30" rows="10">{{old('body')}}</textarea>
                    </div>
                    <div class="mb-3">
                        @foreach($tags as $tag)
                        <div class="form-check">
                            <input class="form-check-input" name="tags[]" type="checkbox" value="{{$tag->id}}" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                              {{$tag->name}}
                            </label>
                          </div> 
                          @endforeach
                    </div>

                    <div class="mb-3">
                        <label for="img" class="form-label">Inserisci immagine</label>
                        <input type="file" name="img" class="form-control" id="img" >   
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Inserisci articolo</button>
                  </form>
            </div>
        </div>
    </div>
   
   </x-layout>