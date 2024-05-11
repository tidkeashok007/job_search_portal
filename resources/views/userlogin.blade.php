
@extends('layouts.main')
@push('ul')
<ul>
    <li><a class="nav-link scrollto " href="{{route('index')}}">Home</a></li>
    <li><a class="nav-link scrollto " href="{{route('about')}}">About</a></li>
    <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>
    <li><a class="getstarted scrollto" href="{{route('userlogin')}}">Sign In</a></li>
    <li><a class="getstarted scrollto" href="{{route('usersignup')}}">Sign Up</a></li>
</ul>
@endpush
@section('main.container')
<!-- ============================================================== -->
                           <!-- Modal -->
<!-- ============================================================== -->

        <!-- Modal start -->
        <div class="modal fade" id="Forgot" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="card mb-0 border-0 shadow-none mb-0">
                    <div class="card-body p-sm-5 m-lg-4">
                      <div class="text-center mt-2">
                        <h5 class="fs-3xl">Forgot Password?</h5>
                          <p class="text-muted mb-4">Reset password with Steex</p>
                          <div class="pb-4">
                          <img src="{{url('dashassets/images/auth/email.png')}}" alt="" class="avatar-md">
                            </div>
                          </div>

                          <div class="alert border-0 alert-warning text-center mb-2 mx-2" role="alert">
                            Enter your email and instructions will be sent to you!
                          </div>
                          <div class="p-2">
                              <form>
                                  <div class="mb-4">
                                     <label class="form-label">Email</label>
                                     <input type="email" class="form-control password-input" id="email" placeholder="Enter Email" required >
                                 </div>

                                  <div class="text-center mt-4">
                                     <button class="btn btn-primary w-100" type="submit">Send Reset Link</button>
                                 </div>
                             </form><!-- end form -->
                         </div>
                          <div class="mt-4 text-center">
                             <p class="mb-0">Wait, I remember my password... <a href="auth-signin.html" class="fw-semibold text-primary text-decoration-underline"> Click here </a> </p>
                         </div>
                     </div><!-- end card body -->
                 </div><!-- end card -->
             </div>
             <!--end col-->
                </div>
                
            </div>
            
        </div>
        <!--end modal -->

  <main>
    <div class="container mt-5">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a class="logo d-flex align-items-center w-auto">
                  <img src="{{url('indexassets/img/logo.png')}}" alt="">
                  <span class="d-none d-lg-block">Welcome To Job Search</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your email & password to login</p>
                  </div>
                  @if($errors->has('is_approved'))
                    <!-- danger Alert -->
                    <div class="alert alert-danger" role="alert">
                        <strong>   {{$errors->first('is_approved')}} </strong> 
                    </div>
                  @endif

                  <form class="row g-3 needs-validation" method="post" action="{{route('login-user')}}">
                  @csrf

                    @if(Session::has('success'))
                      <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                      <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif

                    <div class="col-12">
                      <label for="email" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" id="" value="{{old('email')}}">
                      <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                      </span>
                    </div>


                    <div class="col-12">
                      <label for="password" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control">
                      <span class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                      </span>
                      <div class="float-end mt-1">
                        <a href="#" class="badge  text-danger" data-bs-toggle="modal" data-bs-target="#Forgot">Forgot password?</a> 
                      </div>
                    </div>


                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="remember" value="true" required>
                        <label class="form-check-label" for="rememberMe">Remember me</label>
                        <div class="invalid-feedback">Click here to remember your email and password</div>
                      </div>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Don't have account? <a href="{{route('usersignup')}}">Create an account</a></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
  @endsection