@extends('admin.admin_layout.main')

@push('title')
<title>Admin - Employee_Applied</title>
@endpush

@push('pannelname')
<h3>Employee Applications</h3>
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
            <a href="{{route('employerdashboard')}}" class="nav-link menu-link collapsed" role="button" aria-controls="sidebarDashboards">
                <i class="ph-gauge"></i> <span data-key="t-dashboards">Dashboards</span>
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('employee_applied')}}" class="nav-link menu-link active"> <i class="bi bi-person-video3"></i> <span data-key="t-email">Applications</span> </a>
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
@section('admin.admin_layout.main.container')
        <!-- ============================================================== -->
        <!-- Admin Pannel -->
        <!-- ============================================================== -->
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title mb-3 text-center">Applications</h4>
                                </div><!-- end card header -->
                                <div class="card-body mt-3">
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Last Name</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">CoverLatter</th>
                                                    <th scope="col">Resume</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach ($jobseeker as $jobseeker)
                                                <tr>
                                                <th scope="row">{{$jobseeker->id}}</th>
                                                <td>{{$jobseeker->name}}</td>
                                                <td>{{$jobseeker->lastname}}</td>
                                                <td>{{$jobseeker->phone}}</td>
                                                <td>{{$jobseeker->email}}</td>
                                                <td>{{$jobseeker->coverLatter}}</td>
                                                <td><a href="{{asset($jobseeker->resume)}}" target="_blank">view cv</a></td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- end card-body -->
                            </div><!-- end card -->
                        </div><!--end col-->
                    </div><!--end row-->
                </div>
                <!-- container-fluid -->
            </div>
            <!-- End Page-content -->
        </div>
        <!-- end main content-->
    </div>
    <!-- END layout-wrapper -->
    @stack('footer')
@endsection