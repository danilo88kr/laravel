<x-layout>

    <div class="container-fluid h-100 ">
        
      <div class="row h-100 justify-content-center ">
         <div class=" col-12 col-md-6 d-flex justify-content-center align-items-center">
      
         <h1 class="display-2 fw-medium mt-5">Accedi</h1>
      
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




    <div class="container ">
        <div class="row justify-content-center">
    
            <div class="col-12 col-md-6 form-custom rounded-4">
                <form method="POST" action="{{route('login')}}" class="p-4  my-5 rounded-4">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{old('email')}}" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password </label>
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Accedi</button>
                  </form>
            </div>
        </div>
    </div>
    
   
   </x-layout>