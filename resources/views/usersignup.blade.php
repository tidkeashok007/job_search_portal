@extends('layouts.main')
@push('ul')
<ul>
    <li><a class="nav-link scrollto " href="{{route('index')}}">Home</a></li>
    <li><a class="nav-link scrollto" href="{{route('about')}}">About</a></li>
    <li><a class="nav-link scrollto" href="{{route('contact')}}">Contact</a></li>
    <li><a class="getstarted scrollto" href="{{route('userlogin')}}">Sign In</a></li>
    <li><a class="getstarted scrollto" href="{{route('usersignup')}}">Sign Up</a></li>
</ul>
@endpush
@section('main.container')

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
                    <h5 class="card-title text-center pb-0 fs-4">Create an Account</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" action="{{route('register-user')}}" method="POST">
                  @csrf
                    @if(Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                    @endif

                    @if(Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                    @endif


                  

                    
                    <div class="col-12">
                      <label for="name" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control"  value="{{old('name')}}">
                      <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                      </span>
                    </div>


                    <div class="col-12">
                      <label for="yourEmail" class="form-label">Your Email</label>
                      <input type="email" name="email" class="form-control" value="{{old('email')}}">
                      <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                      </span>
                    </div>


                    <div class="col-12">
                      <label for="phone" class="form-label">Your Mobile</label>
                      <input type="tel" name="phone" class="form-control" value="{{old('phone')}}">
                      <span class="text-danger">
                        @error('phone')
                        {{$message}}
                        @enderror
                      </span>
                    </div>


                    <div class="mb-3">
                      <label for="role-input" class="form-label">Role:</label>
                      <select class="form-select" name="role">
                      <option selected>-- Select Role --</option>
                      <option value="employee">Employee</option>
                      <option value="employer">Employer</option>
                      </select>
                      <span class="text-danger">
                        @error('role')
                        {{$message}}
                        @enderror
                      </span>
                    </div>


                    <div class="col-12">
                      <label for="password-input" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control">
                      <span class="text-danger">
                        @error('password')
                        {{$message}}
                        @enderror
                      </span>
                    </div>


                    <div class="col-12">
                      <label for="password-input" class="form-label">Confirm Password</label>
                      <input type="password" name="password_confirmation" class="form-control" id="password_confirmation">
                      <span class="text-danger">
                        @error('confirmation_password')
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                    

                    <div class="col-12">
                      <div class="form-check">
                        <input class="form-check-input" name="terms" type="checkbox" required>
                        <label class="form-check-label" for="acceptTerms">I agree and accept the <a href="">terms and conditions</a></label>
                        <div class="invalid-feedback">You must agree before submitting.</div>
                      </div>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Create Account</button>
                    </div>


                    <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="{{route('userlogin')}}">Log in</a></p>
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