<x-layout>
    <div class="container-fluid ">
      <div class="row justify-content-center pippo">
         <div class=" col-12 col-md-6 d-flex justify-content-center align-items-center">
      
         <h1 class="display-2 fw-medium mt-5">Tutte le Categorie</h1>
      
        </div>
      </div>
    </div>
     {{-- @dd($categories) --}}
    
    <div class="container-fluid">
        <div class="row h-100 d-flex justify-content-center  mt-5">
            @foreach ($categories as $category)
            <div class="col-12 col-md-4 ">

              <x-card-category
             :$category
              
              />
            </div>
            @endforeach
        </div>
    </div>
   </x-layout>