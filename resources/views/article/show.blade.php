<x-layout>
    <div class="container-fluid ">
      <div class="row  justify-content-center pippo">
         <div class=" col-12 col-md-6 d-flex justify-content-center align-items-center">
      
         <h1 class="display-2 fw-medium mt-5">Il dettaglio dell'articolo</h1>
      
        </div>
      </div>
    </div>

    
    <div class="container-fluid">
        <div class="row h-100 d-flex justify-content-center align-items-center mt-5">
           
            <div class="col-12 col-md-4 my-3">
              <x-card
             :article="$article" 
              />
            </div>
        </div>
    </div>
   </x-layout>