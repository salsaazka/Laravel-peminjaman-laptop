@extends('layout')
{{-- untuk memanggil file layout  --}}

@section('content')
    <section class="vh-100">
        <div class="container py-5 h-100">
          {{-- saat berhasil login --}}
          @if (Session::get('success'))
              <div class="alert alert-success w-100">
                 {{ Session::get('success') }}
              </div>  
          @endif

          {{-- saat password salah --}}
          @if (Session::get('fail'))
          <div class="alert alert-danger w-100">
             {{ Session::get('fail') }}
          </div>  
           @endif
 
          {{-- dari isLogin --}}
             @if (Session::get('notAllowed'))
          <div class="alert alert-danger w-100">
             {{ Session::get('notAllowed') }}
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

      <div class="container-log pt-3 pb-5">
        <div class="card ">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card border-0">
                      
                            {{-- <img src="{{ asset('assets/img/wikrama.jpeg') }}" class="">
                        </div> --}}
                        <div class="row px-3 justify-content-center mt-5 mb-5 ">
                            <img src="{{ asset('assets/img/login.jpg') }}" class="image">
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-6 ">
                    <div class="card2 card border-0 px-4 py-5">
                      <form action="{{ route('login.auth') }}" method="POST" class="">
                        @csrf
                        @method('POST')
                        
                        <div class="row px-5 py-5">
                          <label class="form-label" >Username</label>
                          <input type="password" name="username" class="form-control form-control-lg" />
                        </div>
                        <div class="row px-5 ">
                          <label class="form-label" >Password</label>
                          <input type="password" name="password" class="form-control form-control-lg" />
                        </div>
                        <div class="col-12 px-3 py-3">
                          <center>
                            <button type="submit" class="btn btn-primary btn-lg btn-block ">Login</button>
                          </center>
                         
                        </div>
                        <div class="row mb-4 px-3">
                            <small class="font-weight-bold">Don't have an account? <a href="/register"class="text-danger ">Register</a></small>
                        </div>
                      </form>
                    </div>
                </div>
            </div>
            
        </div>
    </div>

{{-- 
  <div class="container-login d-flex justify-content-center">
          <div class="card two login px-5 py-5 mb-2 mt-5">
            
               <div class="form-outline mb-4">
                <label class="form-label" >Username</label>
                <input type="password" name="username" class="form-control form-control-lg" />
              </div>
    
              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" >Password</label>
                <input type="password" name="password" class="form-control form-control-lg" />
              </div>
    
              <div class="d-flex justify-content-around align-items-center mb-4">
                <!-- Checkbox -->
                <a href="/register">Create Account?</a>
              </div>
    
              <!-- Submit button -->
              <center>
                <button type="submit" class="btn btn-primary btn-block btn-lg mt-1 mb-2 "><span>Get started <i class="fas fa-long-arrow-alt-right ml-2"></i></span></button>
              </center>
             </form>
       
          </div>
        </div>
      </div>     
   
  </div>
  </div>  --}}
</section>
@endsection('content')
   