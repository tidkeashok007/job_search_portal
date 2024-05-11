@extends('admin.admin_layout.main')
@push('title')
<title>Admin - Job Card</title>
@endpush

@push('pannelname')
<h3>Manage Job Card's</h3>
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
            <a href="{{url('admindashboard')}}" class="nav-link menu-link collapsed" role="button" aria-controls="sidebarDashboards">
                <i class="bi bi-diagram-3"></i> <span data-key="t-dashboards">Users Dashboards</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_application')}}" class="nav-link menu-link active"> <i class="bi bi-briefcase"></i> <span data-key="t-chat">Manage Job Card's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_employee_dtl')}}" class="nav-link menu-link"> <i class="bi bi-person-vcard"></i> <span data-key="t-email">Employee Detail's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_employer_dtl')}}" class="nav-link menu-link"> <i class="bi bi-person-vcard"></i> <span data-key="t-email">Employer Detail's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_employer_req')}}" class="nav-link menu-link"> <i class="bi bi-person-video3"></i> <span data-key="t-email">Employer Request's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_jobPost_req')}}" class="nav-link menu-link"> <i class="bi bi-person-video3"></i> <span data-key="t-email">Job Post Request's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_contact')}}" class="nav-link menu-link"> <i class="bi bi-envelope-plus"></i> <span data-key="t-email">Contact</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_about')}}" class="nav-link menu-link"> <i class="bi bi-globe2"></i> <span data-key="t-email">About</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_profile')}}" class="nav-link menu-link"> <i class="bi bi-person-circle"></i> <span data-key="t-email">Profile</span> </a>
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
@section('admin.admin_layout.main.container')

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
                    <form class="tablelist-form">
                        <div class="modal-body">

                            <div class="col-12">
                                <label for="fname" class="form-label">Full Name:</label>
                                <input type="text" name="fname" class="form-control" id="fname" required>
                                <div class="invalid-feedback">Please, enter your name!</div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Your Email:</label>
                                <input type="email" name="email" class="form-control" id="email" required>
                                <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                            </div>

                            <div class="col-12">
                                <label for="mobile" class="form-label">Your Mobile:</label>
                                <input type="tel" name="mobile" class="form-control" id="mobile" pattern="[0-9]{10}" required>
                                <div class="invalid-feedback">Please, enter your mobile number!</div>
                            </div>

                            <div class="col-12">
                                <label for="resume" class="form-label">Resume:</label>
                                <input type="file" class="form-control" id="resume" name="resume" required>
                                <div class="invalid-feedback">Please upload your resume!</div>
                            </div>

                            <div class="col-12">
                                <label for="coverLetter" class="form-label">Cover Letter:</label>
                                <textarea class="form-control" id="coverLetter" name="coverLetter" rows="5" required></textarea>
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
                            </div><!-- end card -->
                        </div><!-- end col -->
                    </div><!-- end row -->
                </div><!-- container-fluid -->
            </div><!-- End Page-content -->
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    @stack('footer')
@endsection