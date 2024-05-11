@extends('admin.admin_layout.main')

@push('title')
<title>Admin - Employer_dash</title>
@endpush

@push('pannelname')
<h3>Employer's</h3>
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
            <a href="{{url('admin_application')}}" class="nav-link menu-link"> <i class="bi bi-briefcase"></i> <span data-key="t-chat">Manage Job Card's</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_employee')}}" class="nav-link menu-link"> <i class="bi bi-person-vcard"></i> <span data-key="t-email">Employee</span> </a>
        </li>

        <li class="nav-item">
            <a href="{{url('admin_employer')}}" class="nav-link menu-link active"> <i class="bi bi-person-video3"></i> <span data-key="t-email">Employer</span> </a>
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
            <a href="" class="nav-link menu-link"> <i class="bi bi-box-arrow-in-left"></i> <span data-key="t-email">log Out</span> </a>
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
                                    <h4 class="card-title mb-3 text-center">Employer's</h4>
                                </div><!-- end card header -->
                                <div class="card-body mt-3">
                                    <div class="table-responsive table-card">
                                        <table class="table align-middle table-nowrap mb-0">
                                            <!-- Table Start -->
                                            <thead class="table-light">
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Status</th>
                                                    <!-- <th scope="col" style="width: 150px;">Action</th> -->
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <tr>
                                                    <td>01</td>
                                                    <td>ashok</td>
                                                    <td>ashok@gmail.com</td>
                                                    <td>9359591463</td>
                                                    <td>employer</td>
                                                    <td><button><span class="badge bg-danger">Rejected</span></button></td>
                                                    <!-- <td>
                                                        <div class="d-flex gap-2">
                                                            <div>
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#Approve">Approve</button>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#Reject">Reject</button>
                                                            </div>
                                                        </div>
                                                    </td> -->
                                                </tr>

                                                
                                                <tr>
                                                    <td>02</td>
                                                    <td>ashok</td>
                                                    <td>ashok@gmail.com</td>
                                                    <td>8020123262</td>
                                                    <td>employee</td>
                                                    <td><button><span class="badge bg-success">Active</span></button></td>
                                                    <!-- <td>
                                                        <div class="d-flex gap-2">
                                                            <div>
                                                                <button class="btn btn-sm btn-success edit-item-btn" data-bs-toggle="modal" data-bs-target="#Approve">Approve</button>
                                                            </div>
                                                            <div>
                                                                <button class="btn btn-sm btn-danger remove-item-btn" data-bs-toggle="modal" data-bs-target="#Reject">Reject</button>
                                                            </div>
                                                        </div>
                                                    </td> -->
                                                </tr>
                                            </tbody>
                                        </table>

                                        <!-- end table -->
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