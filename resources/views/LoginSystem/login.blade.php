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

      {{-- <div class="section">	
        <div class="container"> 
          <div class="row full-height justify-content-center">	
            <div class="col-12 text-center align-self-center py-5">	
              <div class="section pb-5 pt-5 pt-sm-2 text-center">	
                <h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>	
                <input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>	
                <label for="reg-log"></label>	<div class="card-3d-wrap mx-auto">	<div class="card-3d-wrapper">	
                  <div class="card-front">	
                    <div class="center-wrap">	
                      <div class="section text-center">	
                        <h4 class="mb-4 pb-3">Log In</h4>	
                        <div class="form-group"> 
                          <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="none">	<i class="input-icon fa fa-at"></i>	</div>	
                          <div class="form-group mt-2"> <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="none">	<i class="input-icon fa fa-lock"></i>	</div>	
                          <a href="#" class="btn mt-4">Login</a>	
                          <p class="mb-0 mt-4 text-center"> <a href="#0" class="link">Forgot your password?</a> </p>	</div>	</div>	</div>	
                          <div class="card-back">	
                            <div class="center-wrap">	
                              <div class="section text-center">	
                                <h4 class="mb-4 pb-3">Sign Up</h4>	<div class="form-group"> <input type="text" name="logname" class="form-style" placeholder="Your Full Name" id="logname" autocomplete="none">	<i class="input-icon fa fa-user"></i>	</div>	<div class="form-group mt-2"> <input type="email" name="logemail" class="form-style" placeholder="Your Email" id="logemail" autocomplete="none">	<i class="input-icon fa fa-at"></i>	</div>	<div class="form-group mt-2"> <input type="password" name="logpass" class="form-style" placeholder="Your Password" id="logpass" autocomplete="none">	<i class="input-icon fa fa-lock"></i>	</div>	<a href="#" class="btn mt-4">Signup</a>	</div>	</div>	</div>	</div>	</div>	</div>	</div>	</div> </div>	</div> --}}

  <div class="container-login d-flex justify-content-center">
          <div class="card two login px-5 py-5 mb-2 mt-5">
             <form action="{{ route('login.auth') }}" method="POST" class="">
              @csrf
              @method('POST')
              
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
  </div> 
</section>
@endsection('content')
   