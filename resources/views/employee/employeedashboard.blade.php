@extends('employee.employee_layout.main')

@push('title')
<title>Employee-Dashboard</title>
@endpush

@push('pannelname')
<h3>Dashboard</h3>
@endpush

@push('footer')
<div class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6">
                <script>document.write(new Date().getFullYear())</script> © Job Search.
            </div>
            <div class="col-sm-6">
                <div class="text-sm-end d-none d-sm-block">
                    Design & Develop by Job Search
                </div>
            </div>
        </div>    
    </div>
</div>
@endpush

@push('ul')
    <ul class="navbar-nav" id="navbar-nav">

        <li class="menu-title"><span data-key="t-menu">Menu</span></li>
        <li class="nav-item">
            <a href="{{route('employeedashboard')}}" class="nav-link menu-link collapsed active" role="button" aria-controls="sidebarDashboards">
                <i class="ph-gauge"></i> <span data-key="t-dashboards">Dashboards</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('employee_contact')}}" class="nav-link menu-link"> <i class="bi bi-envelope-plus"></i> <span data-key="t-email">Contact</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{route('employee_about')}}" class="nav-link menu-link"> <i class="bi bi-globe2"></i> <span data-key="t-email">About</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{route('employee_profile')}}" class="nav-link menu-link"> <i class="bi bi-person-circle"></i> <span data-key="t-email">Profile</span> </a>
        </li>

        <li class="nav-item">
            <!-- Example logout link -->
            <a href="{{route('logout')}}" class="nav-link menu-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-in-left"></i> <span data-key="t-logout">Logout</span></a>

            <!-- Logout form -->
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </li>
    </ul>
@endpush
@section('employee.employee_layout.main.container')
        <!-- ============================================================== -->
                           <!-- Modal -->
        <!-- ============================================================== -->

        <!-- Modal start -->
        <div class="modal fade" id="Apply" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Application Form</h5>
                        <p class="text-center small">Enter your correct information</p>
                    </div>
                    <form class="tablelist-form needs-validation" action="{{route('apply_Job')}}" method="post">
                        @csrf
                        
                        <div class="modal-body">

                            <div class="col-12">
                                <label for="firstNameinput" class="form-label">First Name:</label>
                                <input type="text" name="name" class="form-control"  placeholder="Enter your firstname" id="firstNameinput">
                                <span class="text-danger">
                                    @error('name')
                                    {{$message}}
                                    @enderror
                                <span>
                                <!-- <div class="invalid-feedback">Please, enter your name!</div> -->
                            </div>

                            <div class="col-12">
                                <label for="lastNameinput" class="form-label">Last Name:</label>
                                <input type="text" name="lastname" class="form-control"  placeholder="Enter your lastname" id="lastNameinput">
                                <span class="text-danger">
                                    @error('lastname')
                                    {{$message}}
                                    @enderror
                                <span>
                                <!-- <div class="invalid-feedback">Please, enter your name!</div> -->
                            </div>

                            <div class="col-12">
                                <label for="phonenumberInput" class="form-label">Phone Number:</label>
                                <input type="tel" name="phone" class="form-control" placeholder="+(245) 451 45123" id="phonenumberInput">
                                <span class="text-danger">
                                    @error('phone')
                                    {{$message}}
                                    @enderror
                                <span>
                                <!-- <div class="invalid-feedback">Please, enter your mobile number!</div> -->
                            </div>


                            <div class="col-12">
                                <label for="emailidInput" class="form-label">Email Address:</label>
                                <input type="email" name="email" class="form-control" placeholder="example@gamil.com" id="emailidInput">
                                <span class="text-danger">
                                    @error('email')
                                    {{$message}}
                                    @enderror
                                <span>
                            </div>

                            <div class="col-12">
                                <label for="address1ControlTextarea" class="form-label">cover letter</label>
                                <input type="text" name="coverLatter" class="form-control" placeholder="Address 1" id="address1ControlTextarea">
                                <span class="text-danger">
                                    @error('coverLetter')
                                    {{$message}}
                                    @enderror
                                <span>
                            </div>

                            <div class="col-12">
                                 <label for="formFile" class="form-label">Upload Your Resume</label>
                                <input class="form-control" type="file" name="resume" id="formFile">
                                <span class="text-danger">
                                    @error('resume')
                                    {{$message}}
                                    @enderror
                                <span>
                            </div>

                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Back</button>
                                <button type="submit" class="btn btn-primary" id="add-btn">Apply</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end modal -->


        <!-- ============================================================== -->
                           <!-- Admin Pannel -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Jobs For You</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="row g-3">
                                    <div class="card-body">
                                    <div class="row g-3">
                                        @foreach($job as $Job)
                                        <div class="col-xxl-4">
                                            <div class="card ribbon-box border shadow-none mb-lg-0">
                                                <div class="card-body">
                                                    <div class="ribbon ribbon-primary ribbon-shape">{{$Job->jobname}}</div>
                                                    <div class="mt-4"><h3 class="text-center text-white bg-success">Job Name:  {{$Job->jobname}}</h3></div>
                                                    <div class="mt-3"><h5 class="text-center">Experience:<span> {{$Job->experience}}</span></h5></div>
                                                    <div class="mt-3"><h5 class="text-center">Company Name:<span> {{$Job->companyname}}</span></h5></div>
                                                    <div class="mt-3"><h5 class="text-center">Working Type:<span> {{$Job->workingtype}}</span></h5></div>
                                                    <div class="ribbon-content text-muted mt-3">
                                                        <p class="mb-0">job discription:<span> {{$Job->discription}}</span></p>
                                                    </div>
                                                    <div class="mt-3"><h5 class="text-center text-danger">Location:<span> {{$Job->location}}</span></h5></div>
                                                    <div>
                                                        <button class="btn btn-sm btn-success float-end" data-bs-toggle="modal" data-bs-target="#Apply">Apply</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div><!-- end row -->
                                </div><!-- end card-body -->
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- container-fluid -->
            </div><!-- End Page-content -->
            @stack('footer')
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
@endsection