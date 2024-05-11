@extends('employer.employer_layout.main')
@push('title')
<title>Employer - Dashboard</title>
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
            <a href="{{route('employerdashboard')}}" class="nav-link menu-link collapsed active" role="button" aria-controls="sidebarDashboards">
                <i class="ph-gauge"></i> <span data-key="t-dashboards">Dashboards</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('employee_applied')}}" class="nav-link menu-link"> <i class="bi bi-person-video3"></i> <span data-key="t-email">Applications</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{route('employer_contact')}}" class="nav-link menu-link"> <i class="bi bi-envelope-plus"></i> <span data-key="t-email">Contact</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{route('employer_about')}}" class="nav-link menu-link"> <i class="bi bi-globe2"></i> <span data-key="t-email">About</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{route('employer_profile')}}" class="nav-link menu-link"> <i class="bi bi-person-circle"></i> <span data-key="t-email">Profile</span> </a>
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
@section('employer.employer_layout.main.container')
        <!-- ============================================================== -->
                           <!-- Modal -->
        <!-- ============================================================== -->

        <!-- Modal start -->
        <div class="modal fade" id="PostAJob" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="pt-4 pb-2">
                        <h5 class="card-title text-center pb-0 fs-4">Hiring Form</h5>
                    </div>
                    <form action="{{route('jobPost')}}"  method="POST" >
                        @csrf
                        <div class="modal-body">

                            <div class="col-12">
                                <label for="firstNameinput" class="form-label">Job Name</label>
                                <input type="text" name="jobname" class="form-control" placeholder="Enter jobname" >
                            </div>

                            <div class="col-12 mt-3">
                                <label for="lastNameinput" class="form-label">Description</label>
                                <input type="text" name="discription" class="form-control" placeholder="Enter description" >
                            </div>

                            <div class="col-12 mt-3">
                               <label for="phonenumberInput" class="form-label">experience</label>
                               <input type="text"  name="experience"class="form-control" placeholder="enter need experience" >
                            </div>

                            <div class="col-12 mt-3">
                                <label for="emailidInput" class="form-label">Working Type</label>
                                <input type="text" name="workingtype" class="form-control" placeholder="fulltime/part time/consultant" id="emailidInput">
                            </div>

                            <div class="col-12 mt-3">
                                <label for="address1ControlTextarea" class="form-label">Company Name</label>
                                <input type="text" name="companyname" class="form-control" placeholder="company name" id="address1ControlTextarea">
                            </div>

                            <div class="col-12 mt-3">
                               <label for="address1ControlTextarea" class="form-label">Location</label>
                               <input type="text" name="location" class="form-control" placeholder="Address" id="address1ControlTextarea">
                            </div>
                    
                        </div>
                        <div class="modal-footer">
                            <div class="hstack gap-2 justify-content-end">
                                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Back</button>
                                <button type="submit" class="btn btn-primary" id="add-btn">Post your job</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--end modal -->


        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-0">Welcome To Job Search</h4>
                                </div><!-- end card header -->

                                <div class="card-body">
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <div class="card ribbon-box border shadow-none mb-lg-0">
                                                <div class="card-body">
                                                    <div class="ribbon ribbon-primary ribbon-shape">Hire Staff Now</div>
                                                    <div class="mt-4"><h5 class="fs-md text-center"></h5></div>
                                                    <div class="ribbon-content text-muted mt-4">
                                                        <p class="mb-0">Quisque nec turpis at urna dictum luctus. Suspendisse convallis dignissim eros at volutpat. In egestas
                                                             mattis dui. Aliquam mattis dictum aliquet. Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio.
                                                        </p>
                                                    </div>
                                                    <div class="text-center">
                                                        <button type="button" class="btn btn-md btn-subtle-success" data-bs-toggle="modal" data-bs-target="#PostAJob">Post A Job</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>   
                            </div>
                        </div><!--end col-->
                    </div><!--end row-->
                </div><!-- container-fluid -->
            </div><!-- End Page-content -->

        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    @stack('footer')
    @endsection